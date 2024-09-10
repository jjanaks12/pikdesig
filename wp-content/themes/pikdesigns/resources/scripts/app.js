import domReady from '@roots/sage/client/dom-ready';
import Swiper from 'swiper';
import  { Pagination } from 'swiper/modules';

/**
 * Application entrypoint
 */
domReady(async () => {
  initSwiperSlider()
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);


const initSwiperSlider = () => {
  const $portfolioSectionSlider = document.querySelector('.portfolio__section .swiper')

  if (!$portfolioSectionSlider)
    return

  new Swiper($portfolioSectionSlider, {
    spaceBetween: 60,
    breakpoints: {
      768: {
        slidesPerView: 3
      }
    }
  })

  const $serviceSectionSlider = document.querySelector('.services__section .swiper')
  if (!$serviceSectionSlider)
    return

  new Swiper($serviceSectionSlider, {
    modules: [Pagination],
    pagination: {
      el: ".swiper-pagination",
    },
  })
}