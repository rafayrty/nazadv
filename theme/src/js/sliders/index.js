import ServicesSlider from './services';
import HomeSlider from './home';

export default class Sliders {
  constructor() {
    if (document.querySelector('.services-page')) {
      this.serviceSlider = new ServicesSlider();
      this.servicesSliderEvents();
    }
    if (document.querySelector('.home-page')) {
      this.homeSlider = new HomeSlider();
      this.homeSliderEvents();
    }
  }

  servicesSliderEvents() {
    document.querySelector('.main-slider-1 .slide-next').addEventListener('click', () => {
      this.serviceSlider.slideNext(0);
    });
    document.querySelector('.main-slider-2 .slide-next').addEventListener('click', () => {
      this.serviceSlider.slideNext(1);
    });

    document.querySelector('.main-slider-3 .slide-next').addEventListener('click', () => {
      this.serviceSlider.slideNext(2);
    });

    document.querySelector('.main-slider-4 .slide-next').addEventListener('click', () => {
      this.serviceSlider.slideNext(3);
    });
  }

  homeSliderEvents() {
    document.querySelector('.our-works .slide-next').addEventListener('click', () => {
      this.homeSlider.slideNext();
      console.log('hey');
    });
  }
}
