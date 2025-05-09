class TopOffers {
  constructor() {
    this.body = document.querySelector('body');
    this.offersList = document.querySelector('[data-top-offers-list]');
    this.scrollLeftBtn = document.querySelector('[data-top-offers-btn-scroll-left]');
    this.scrollRightBtn = document.querySelector('[data-top-offers-btn-scroll-right]');
    this.scrollAmount = 320;
  }

  updateScrollButtons() {
    const isScrollable = this.offersList.scrollWidth > this.offersList.clientWidth;

    if (isScrollable) {
      this.scrollLeftBtn.style.display = 'flex';
      this.scrollRightBtn.style.display = 'flex';
    } else {
      this.scrollLeftBtn.style.display = 'none';
      this.scrollRightBtn.style.display = 'none';
    }

    if (this.offersList.scrollLeft + this.offersList.clientWidth < this.offersList.scrollWidth) {
      this.offersList.classList.add('has-fade-right');
    } else {
      this.offersList.classList.remove('has-fade-right');
    }

    if (this.offersList.scrollLeft > 0) {
      this.offersList.classList.add('has-fade-left');
    } else {
      this.offersList.classList.remove('has-fade-left');
    }

    if (this.offersList.scrollLeft === 0) {
      this.scrollLeftBtn.style.display = 'none';
    }

    if (this.offersList.scrollLeft + this.offersList.clientWidth >= this.offersList.scrollWidth) {
      this.scrollRightBtn.style.display = 'none';
    }
  }

  scrollLeft() {
    this.pushDatalayer()
    this.offersList.scrollBy({
      left: -this.scrollAmount,
      behavior: 'smooth'
    });
    setTimeout(() => this.updateScrollButtons(), 320);
  }

  scrollRight() {
    this.pushDatalayer()
    this.offersList.scrollBy({
      left: this.scrollAmount,
      behavior: 'smooth'
    });
    setTimeout(() => this.updateScrollButtons(), 320);
  }

  pushDatalayer(){
      let customTitle = ''

      if (this.offersList.querySelectorAll('a:last-child')[0] && this.offersList.querySelectorAll('a:last-child')[0].querySelectorAll('img')[0].getAttribute('custom_title')) {
        customTitle = this.slugify(this.offersList.querySelectorAll('a:last-child')[0].querySelectorAll('img')[0].getAttribute('custom_title'));
      }

      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'event':'clique',
        'event_type':'event_custom',
        'custom_section': 'pdp-boracomprar',
        'custom_type': 'botao',
        'custom_title': customTitle,
      });
  }

  slugify(text) {
    if (!text) {
      return;
    }
    return text.normalize('NFD')
      .replace(/[\u0300-\u036f]/g, '')
      .toLowerCase()
      .trim()
      .replace(/\s+/g, '-')
      .replace(/[^\w-]+/g, '')
      .replace(/--+/g, '-')
      .replace(/^-+/, '')
      .replace(/-+$/, '');
  }

  addEventListeners() {
    this.scrollLeftBtn.addEventListener('click', () => this.scrollLeft());
    this.scrollRightBtn.addEventListener('click', () => this.scrollRight());

    window.addEventListener('resize', () => this.updateScrollButtons());
  }

  init() {
    if (!this.offersList || !this.scrollLeftBtn || !this.scrollRightBtn) return;

    this.updateScrollButtons();
    this.addEventListeners();
  }
}

export default TopOffers;
