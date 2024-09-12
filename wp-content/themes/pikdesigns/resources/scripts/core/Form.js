import { formDataToJSON } from "@scripts/lib/helpers"
import { Schema } from "yup"

export default class FormHandler {
    errors = {}

    /**
     * 
     * @param {HTMLFormElement} el 
     * @param {Schema} schema
     * @param {Function} callback 
     */
    constructor(el, schema, callback) {
        this.$el = el
        this.schema = schema
        this.callback = callback

        this.init()
    }

    init() {
        this.$submitBTN = this.$el.querySelector('[type=submit]')

        this.$el.addEventListener('submit', this.validate.bind(this))
    }

    validate(event) {
        event.preventDefault()

        const data = formDataToJSON(new FormData(this.$el))

        this.schema.validate(data, { strict: true })
            .then(() => {
                this.callback(data)
                this.clearErrors(data)
            })
            .catch((err) => {
                this.errors[err.path] = err.errors
                this.showErrors()
            })
    }

    showErrors() {
        Object.keys(this.errors)
            .forEach(fieldName => {
                const $input = document.querySelector(`[name=${fieldName}]`)
                const $parent = $input.closest('.form__group')
                let $errorMSG = $parent.querySelector('.error__message')

                if (!$errorMSG) {
                    $errorMSG = document.createElement('span')
                    $errorMSG.classList.add('error__message')
                    $parent.append($errorMSG)
                }

                $parent.classList.add('has--error')
                $errorMSG.innerText = this.errors[fieldName]
            })
    }

    clearErrors(data) {
        Object.keys(this.errors)
            .forEach(fieldName => {
                const $input = document.querySelector(`[name=${fieldName}]`)
                const $parent = $input.closest('.form__group')
                const $errorMSG = $parent.querySelector('.error__message')

                $errorMSG.remove()
                $parent.classList.remove('has--error')
            })
    }
}