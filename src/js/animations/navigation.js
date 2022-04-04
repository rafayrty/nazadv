import gsap from 'gsap';

export default class Navigation {
  constructor() {
    this.navigationElement = document.querySelector('.main-menu');
    this.navigationNavElement = document.querySelector('nav');
    this.overlayMenu = document.querySelector('.overlay-menu');
    this.menuIcon = document.querySelector('.menu-icon');
    this.menuIconAnchor = document.querySelector('.menu-icon a');
    this.hero = document.querySelector('.hero');
    this.menuItems = document.querySelectorAll('.menu-list li');
    this.overlayLogo = document.querySelector('.overlay-first .logo');
    this.overlayAddress = document.querySelector('.overlay-first .address');
    this.overlaySocials = document.querySelector('.overlay-first .socials');

    this.checkAddressHeader = document.querySelector('.overlay-first'); // Check if Displayed on Desktop
    this.menuIconSVG = {
      start: document.querySelector('.menu-icon a #start'),
      middle: document.querySelector('.menu-icon a #middle'),
      end: document.querySelector('.menu-icon a #end'),
    };

    this.isOpened = false;

    this.icon = document.querySelector('nav');

    // Timeline
    this.tl = gsap.timeline();

    this.hoverTL = gsap.timeline();
  }

  menuIconHoverIn() {
    if (!this.hoverTL.reversed()) {
      this.hoverTL.to(this.menuIconSVG.start, { duration: 0.3, translateX: '20%', ease: 'power4.easeInOut' });
      this.hoverTL.to(this.menuIconSVG.middle, { duration: 0.3, translateX: '-20%', ease: 'power4.easeInOut' }, '-=.3');
      this.hoverTL.to(this.menuIconSVG.end, { duration: 0.3, translateX: '20%', ease: 'power4.easeInOut' }, '-=.3');
    } else {
      this.hoverTL.play();
    }
  }

  menuIconHoverOut() {
    this.hoverTL.reverse(0);
  }

  menuClick() {
    if (!this.isOpened) {
      this.isOpened = true;
      this.menuOpen();
    } else {
      this.isOpened = false;
      this.menuClose();
    }
  }

  menuOpen() {
    if (!this.tl.reversed()) {
      this.tl.set('body', { overflow: 'hidden' });
      this.tl.to(this.overlayMenu, { duration: 1, ease: 'power4.inOut', translateX: '-100%' });
      this.tl.to(this.hero, {
        duration: 0.5, ease: 'power4.inOut', translateX: '-10%', autoAlpha: 0,
      }, '-=.9');
      this.tl.to(this.menuIconAnchor, {
        duration: 0.2, ease: 'power3.inOut', background: '#FFF', color: '#343466',
      }, '-=.8');
      this.tl.from(this.overlayLogo, {
        duration: 0.5, ease: 'power4.inOut', autoAlpha: 0, translateY: '20%',
      }, '-=.6');

      if (window.getComputedStyle(this.checkAddressHeader).display === 'block') {
        this.tl.from('.overlay-first .address', {
          duration: 0.4, stagger: 0.1, ease: 'power4.inOut', autoAlpha: 0, translateY: '20%',
        }, '-=.4');

        this.tl.from('.overlay-first .socials', {
          duration: 0.4, stagger: 0.1, ease: 'power4.inOut', autoAlpha: 0, translateY: '20%',
        }, '-=.4');
      }

      this.tl.from(this.menuItems, {
        duration: 0.4, stagger: 0.1, ease: 'power4.inOut', autoAlpha: 0, skewX: 20, translateY: '40px',
      }, '-=.6');
    } else {
      this.tl.play();
    }
  }

  menuClose() {
    this.tl.reverse();
  }
}
