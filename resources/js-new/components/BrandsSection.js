class BrandSection {
  constructor() {
    this.body = document.querySelector('body');
    this.brandsList = document.querySelector('[data-brands-section-list]');
    this.scrollLeftBtn = document.querySelector('[data-brands-section-btn-scroll-left]');
    this.scrollRightBtn = document.querySelector('[data-brands-section-btn-scroll-right]');
    this.scrollAmount = this.getScrollAmount();
  }

  getScrollAmount() {
    return window.innerWidth > 768 ? 150 : 120;
  }

  updateScrollButtons() {
    const isScrollable = this.brandsList.scrollWidth > this.brandsList.clientWidth;

    if (isScrollable) {
      this.scrollLeftBtn.style.display = 'flex';
      this.scrollRightBtn.style.display = 'flex';
    } else {
      this.scrollLeftBtn.style.display = 'none';
      this.scrollRightBtn.style.display = 'none';
    }

    if (this.brandsList.scrollLeft + this.brandsList.clientWidth < this.brandsList.scrollWidth) {
      this.brandsList.classList.add('has-fade-right');
    } else {
      this.brandsList.classList.remove('has-fade-right');
    }

    if (this.brandsList.scrollLeft > 0) {
      this.brandsList.classList.add('has-fade-left');
    } else {
      this.brandsList.classList.remove('has-fade-left');
    }

    if (this.brandsList.scrollLeft === 0) {
      this.scrollLeftBtn.style.display = 'none';
    }

    if (this.brandsList.scrollLeft + this.brandsList.clientWidth >= this.brandsList.scrollWidth) {
      this.scrollRightBtn.style.display = 'none';
    }
  }

  scrollLeft() {
    this.brandsList.scrollBy({
      left: -this.scrollAmount,
      behavior: 'smooth'
    });
    setTimeout(() => this.updateScrollButtons(), this.scrollAmount);
  }

  scrollRight() {
    this.brandsList.scrollBy({
      left: this.scrollAmount,
      behavior: 'smooth'
    });
    setTimeout(() => this.updateScrollButtons(), this.scrollAmount);
  }

  addEventListeners() {
    this.scrollLeftBtn.addEventListener('click', () => this.scrollLeft());
    this.scrollRightBtn.addEventListener('click', () => this.scrollRight());

    window.addEventListener('resize', () => this.updateScrollButtons());
  }

  init() {
    if (!this.brandsList || !this.scrollLeftBtn || !this.scrollRightBtn) return;

    this.updateScrollButtons();
    this.addEventListeners();
  }
}

export default BrandSection;
