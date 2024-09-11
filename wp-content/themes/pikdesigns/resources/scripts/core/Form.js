import { formDataToJSON } from "@scripts/lib/helpers"
import { Schema } from "yup"

export default class FormHandler {

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
            })
            .catch((_, err) => {
                console.log(err);
            })
    }
}