import domReady from '@roots/sage/client/dom-ready'
import * as Yup from 'yup'

import HomePage from './pages/Home'
import { formDataToJSON } from './lib/helpers'
import FormHandler from './core/Form'

/**
 * Application entrypoint
 */
domReady(async () => {
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
  const $form = document.querySelector('.support__form')

  if (!$form)
    return

  const formSchema = Yup.object({
    topic: Yup.string().required()
  })

  new FormHandler($form, formSchema, (a) => {
    console.log(a)
  })
}