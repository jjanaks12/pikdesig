import Swiper from 'swiper'
import { Pagination, EffectFade, Autoplay } from 'swiper/modules'

import Page from './Page'

export default class HomePage extends Page {
    constructor() {
        super('page-template-home')
    }

    init() {
        this.initSwiperSlider()
    }

    initSwiperSlider() {
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
            modules: [Pagination, EffectFade, Autoplay],
            effect: 'fade',
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                renderBullet: function (index, className) {
                    const iconName = this.slides[index].dataset.icon || ''
                    return `<button type="button" class="${className}"><img src="${iconName}"></button>`
                }
            },
            on: {
                'slideChange': (swiper) => {
                    const currentSlide = swiper.visibleSlides[0]

                    const video = currentSlide.querySelector('video')
                    if (video) {
                        swiper.autoplay.stop()
                        video.play()

                        setTimeout(() => {
                            swiper.autoplay.start()
                        }, (video.duration * 1000 - 3000))
                        setTimeout(() => {
                            video.pause()
                            video.currentTime = 0
                        }, (video.duration * 1000))
                    }
                }
            }
        })
    }
}