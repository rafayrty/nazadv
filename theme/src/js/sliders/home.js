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

    this.setTotalSlides(numOfSlides);
  }

  slideNext() {
    this.swiper.slideNext();
    this.setSlideIndex(this.swiper.realIndex + 1);
  }

  setSlideIndex(index) {
    document.querySelector('.our-works .slide-counter').innerHTML = `0${index}`;
    document.querySelector('.works-slider .current-slide').innerHTML = `0${index}`;
    document.querySelector('.works-slider .slide-progress b span').style.width = `${(index / this.numOfSlides) * 100}%`;
  }

  setTotalSlides(count) {
    this.numOfSlides = count;
    document.querySelector('.our-works .count').innerHTML = `0${count}`;

    document.querySelector('.works-slider .slide-progress b span').style.width = `${((this.swiper.realIndex + 1) / this.numOfSlides) * 100}%`;
  }
}
