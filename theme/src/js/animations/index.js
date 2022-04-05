import Navigation from './navigation';

export default class Animations {
  constructor() {
    this.navigation = new Navigation();
    this.menuIcon();
  }

  menuIcon() {
    document.querySelector('.menu-icon a').addEventListener('mouseenter', () => {
      this.navigation.menuIconHoverIn();
    });
    document.querySelector('.menu-icon a').addEventListener('mouseleave', () => {
      this.navigation.menuIconHoverOut();
    });

    document.querySelector('.menu-icon a').addEventListener('click', () => {
      this.navigation.menuClick();
    });
  }
}
