class Filter {
  constructor() {
    this.body = document.querySelector('body');
    this.filterButton = document.querySelectorAll('[data-filter-button]');
    this.filterModal = document.querySelector('[data-filter]');
    this.filterCloseButton = document.querySelector('[data-filter-close]');
    this.overlay = null;
    this.currentFilter = null;
    this.escapeKeyListener = null;
  }

  createOverlay() {
    if (!this.overlay) {
      this.overlay = document.createElement('div');
      this.overlay.classList.add('c-overlay');
      this.body.appendChild(this.overlay);
      this.overlay.addEventListener('click', () => this.closeFilter());
    }
  }

  openFilter(filterModal) {
    this.currentFilter = filterModal;

    this.createOverlay();
    filterModal.classList.add('is-visible');
    this.overlay.classList.add('is-visible');

    this.body.classList.add('u-overflow-hidden');

    this.addEventListeners();
  }

  closeFilter() {
    if (this.currentFilter) {
      this.currentFilter.classList.remove('is-visible');
      if (this.overlay) {
        this.overlay.classList.remove('is-visible');
      }

      this.body.classList.remove('u-overflow-hidden');

      this.removeEventListeners();

      setTimeout(() => {
        if (this.overlay) {
          this.body.removeChild(this.overlay);
          this.overlay = null;
        }
      }, 300);

      this.currentFilter = null;
    }
  }

  addEventListeners() {
    this.escapeKeyListener = (e) => {
      if (e.key === 'Escape') {
        this.closeFilter();
      }
    };
    document.addEventListener('keydown', this.escapeKeyListener);

    if (this.filterCloseButton) {
      this.filterCloseButton.addEventListener('click', () => this.closeFilter());
    }
  }

  removeEventListeners() {
    if (this.escapeKeyListener) {
      document.removeEventListener('keydown', this.escapeKeyListener);
      this.escapeKeyListener = null;
    }
  }

  init() {
    this.filterButton.forEach(button => {
      button.addEventListener('click', event => {
        event.preventDefault();
        const filterModal = document.querySelector('[data-filter]');
        this.openFilter(filterModal);
      });
    });
  }
}

export default Filter;
