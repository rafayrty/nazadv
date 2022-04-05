import Swiper from 'swiper';
// eslint-disable-next-line import/no-unresolved
import 'swiper/css';

export default class HomeSlider {
  constructor() {
    let numOfSlides = 0;

    this.swiper = new Swiper('.home-slider', {
      // configure Swiper to use modules
      loop: true,
      on: {
        beforeInit: () => {
          numOfSlides = document.querySelectorAll('.home-slider .swiper-slide').length;
        },
      },

    });
  }

  slideNext() {
    this.swiper.slideNext();
  }
}
