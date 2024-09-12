import domReady from '@roots/sage/client/dom-ready'
import * as Yup from 'yup'

import HomePage from './pages/Home'
import FormHandler from './core/Form'
import { axios } from './services/axios'

/**
 * Application entrypoint
 */
domReady(async () => {
  // window.ADMIN_URL = "/wp-admin/admin-ajax.php"
  window.ADMIN_URL = "/wp-json/pikdesign/v1/"
  compileContaineroffset()
  supportForm()

  new HomePage()
})

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error)

const compileContaineroffset = () => {
  const calculatedWidth = () => {
    const documentWidth = document.body.offsetWidth
    const containerWidth = document.querySelector('.container')?.offsetWidth || 0

    const width = containerWidth + ((documentWidth - containerWidth) / 2)
    document.body.style = '--document-width:' + width + 'px'
  }

  calculatedWidth()
  document.addEventListener('resize', () => {
    calculatedWidth()
  })
}

const supportForm = () => {
  /** @type {HTMLFormElement} $form */
  const $form = document.querySelector('.support__form')
  /** @type {HTMLFieldSetElement} $form */
  const $fieldset = $form.querySelector('fieldset')
  /** @type {HTMLElement} $form */
  const $thankyou = $form.querySelector('.thankyou')

  if (!$form)
    return

  /** @type {Yup.Schema} formSchama */
  const formSchema = Yup.object({
    topic: Yup.string().required()
  })

  new FormHandler($form, formSchema, (formData) => {

    axios.post('save_support', formData)
      .then((response) => {
        if (response.status == 'success') {
          $fieldset.classList.add('hidden')
          $thankyou.classList.remove('hidden')
        }
      })
      .catch((e) => {
        console.log(e);
      })
  })
}