class ProductGallery {
  constructor() {
    this.gallery = document.querySelector('[data-product-gallery]');

    if (!this.gallery) return;

    this.mainImage = this.gallery.querySelector('[data-product-gallery-image]');
    this.thumbnails = this.gallery.querySelectorAll('[data-product-gallery-thumb]');
    this.activeClass = 'is-active';
  }

  updateMainImage(thumb) {
    if (!this.mainImage || !thumb) return;

    this.thumbnails.forEach(thumbnail => thumbnail.classList.remove(this.activeClass));

    thumb.classList.add(this.activeClass);

    const newSrc = thumb.getAttribute('src');
    const newAlt = thumb.getAttribute('alt');

    this.mainImage.setAttribute('src', newSrc);
    this.mainImage.setAttribute('alt', newAlt);
  }

  addEventListeners() {
    if (!this.thumbnails || this.thumbnails.length === 0) return;

    this.thumbnails.forEach(thumb => {
      thumb.addEventListener('click', () => this.updateMainImage(thumb));
    });
  }

  init() {
    if (!this.gallery || !this.thumbnails || this.thumbnails.length === 0) return;

    this.addEventListeners();
  }
}

export default ProductGallery;
