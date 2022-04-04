import ServicesSlider from './services';

export default class Sliders {
  constructor() {
    this.ServiceSlider = new ServicesSlider();

    this.sliderEvents();
  }

  sliderEvents() {
    document.querySelector('.main-slider-1 .slide-next').addEventListener('click', () => {
      this.ServiceSlider.slideNext(0);
    });
    document.querySelector('.main-slider-2 .slide-next').addEventListener('click', () => {
      this.ServiceSlider.slideNext(1);
    });

    document.querySelector('.main-slider-3 .slide-next').addEventListener('click', () => {
      this.ServiceSlider.slideNext(2);
    });

    document.querySelector('.main-slider-4 .slide-next').addEventListener('click', () => {
      this.ServiceSlider.slideNext(3);
    });
  }
}
