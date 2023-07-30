class Header {
  constructor() {
    this.header = document.querySelector('.header');
    this.burgerBtn = this.header.querySelector('.header__burger');
    this.navMenu = this.header.querySelector('.header__nav');

    this.navMenuIsOpen = false;

    this.burgerBtn.addEventListener('click', this.changeNavMenu);
  }

  changeNavMenu = () => {
    this.navMenuIsOpen = !this.navMenuIsOpen;
    this.render();
  }

  render() {
    if(this.navMenuIsOpen) {
      this.navMenu.classList.add('_active');
      this.navMenu.insertAdjacentHTML('afterbegin', `<button class="header__nav-close" onClick="header.changeNavMenu()"></button>`);
    } else {
      this.navMenu.classList.remove('_active');
      document.querySelector('.header__nav-close').remove();
    }
  }

}

const header = new Header();