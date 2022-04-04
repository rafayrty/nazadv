import Swiper from 'swiper';
// eslint-disable-next-line import/no-unresolved
import 'swiper/css';

export default class ServicesSlider {
  constructor() {
    // Sliders Loading
    const numOfSlides = [];
    this.swiper = [];
    this.swiper[0] = new Swiper('.slider-1', {
      // configure Swiper to use modules
      loop: true,
      on: {
        beforeInit: () => {
          numOfSlides[0] = document.querySelectorAll('.main-service-slider .slider-1 .swiper-slide').length;
        },
      },

    });
    this.swiper[0].on('slideChange', () => {
      this.setSlideIndex(0, this.swiper[0].realIndex + 1);
    });

    this.numOfSlides = [];
    this.setTotalSlides(0, numOfSlides[0]);

    // Second Slider

    this.swiper[1] = new Swiper('.slider-2', {
      // configure Swiper to use modules
      loop: true,
      on: {
        beforeInit: () => {
          numOfSlides[1] = document.querySelectorAll('.main-service-slider .slider-2 .swiper-slide').length;
        },
      },

    });
    this.swiper[1].on('slideChange', () => {
      this.setSlideIndex(1, this.swiper[1].realIndex + 1);
    });
    this.setTotalSlides(1, numOfSlides[1]);

    // Third Slider

    this.swiper[2] = new Swiper('.slider-3', {
      // configure Swiper to use modules
      loop: true,
      on: {
        beforeInit: () => {
          numOfSlides[2] = document.querySelectorAll('.main-service-slider .slider-3 .swiper-slide').length;
        },
      },

    });
    // this.setSlideIndex('.slider-1', this.swiper1.realIndex + 1);
    this.swiper[2].on('slideChange', () => {
      this.setSlideIndex(2, this.swiper[2].realIndex + 1);
    });
    this.setTotalSlides(2, numOfSlides[2]);

    // Fourth Slider

    this.swiper[3] = new Swiper('.slider-4', {
      // configure Swiper to use modules
      loop: true,
      on: {
        beforeInit: () => {
          numOfSlides[3] = document.querySelectorAll('.main-service-slider .slider-4 .swiper-slide').length;
        },
      },

    });
    this.swiper[3].on('slideChange', () => {
      this.setSlideIndex(3, this.swiper[3].realIndex + 1);
    });
    this.setTotalSlides(3, numOfSlides[3]);
  }

  slideNext(slider) {
    this.swiper[slider].slideNext();
    this.setSlideIndex(slider, this.swiper[slider].realIndex + 1);
  }

  setSlideIndex(slider, index) {
    const elem = `.slider-${slider + 1}`;
    document.querySelector(elem).parentElement.childNodes[1].innerHTML = `0${index}`;
    document.querySelector(elem).parentElement.childNodes[9].childNodes[1].childNodes[1].innerHTML = `0${index}`;
    document.querySelector(elem).parentElement.childNodes[9].childNodes[1].childNodes[3].childNodes[1].style.width = `${(index / this.numOfSlides[slider]) * 100}%`;
  }

  setTotalSlides(slider, count) {
    this.numOfSlides[slider] = count;
    const elem = `.slider-${slider + 1}`;
    document.querySelector(elem).parentElement.childNodes[9].childNodes[1].childNodes[5].innerHTML = `0${count}`;

    document.querySelector(elem).parentElement.childNodes[9].childNodes[1].childNodes[3].childNodes[1].style.width = `${((this.swiper[slider].realIndex + 1) / this.numOfSlides[slider]) * 100}%`;
  }
}
