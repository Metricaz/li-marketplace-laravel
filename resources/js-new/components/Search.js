class Search {
  constructor() {
    this.body = document.querySelector('body');
    this.searchButton = document.querySelectorAll('[data-search-button]');
    this.searchModal = document.querySelector('[data-search]');
    this.searchCloseButton = document.querySelector('[data-search-close]');
    this.overlay = null;
    this.currentSearch = null;
    this.escapeKeyListener = null;
  }

  createOverlay() {
    if (!this.overlay) {
      this.overlay = document.createElement('div');
      this.overlay.classList.add('c-overlay');
      this.body.appendChild(this.overlay);
      this.overlay.addEventListener('click', () => this.closeSearch());
    }
  }

  openSearch(searchModal) {
    this.currentSearch = searchModal;

    this.createOverlay();
    searchModal.classList.add('is-visible');
    this.overlay.classList.add('is-visible');

    this.body.classList.add('u-overflow-hidden');

    const searchInput = searchModal.querySelector('.c-search__input');
    if (searchInput) {
      searchInput.focus();
    }

    this.addEventListeners();
  }

  closeSearch() {
    if (this.currentSearch) {
      this.currentSearch.classList.remove('is-visible');
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

      this.currentSearch = null;
    }
  }

  addEventListeners() {
    this.escapeKeyListener = (e) => {
      if (e.key === 'Escape') {
        this.closeSearch();
      }
    };
    document.addEventListener('keydown', this.escapeKeyListener);

    if (this.searchCloseButton) {
      this.searchCloseButton.addEventListener('click', () => this.closeSearch());
    }
  }

  removeEventListeners() {
    if (this.escapeKeyListener) {
      document.removeEventListener('keydown', this.escapeKeyListener);
      this.escapeKeyListener = null;
    }
  }

  init() {
    this.searchButton.forEach(button => {
      button.addEventListener('click', event => {
        event.preventDefault();
        const searchModal = document.querySelector('[data-search]');
        this.openSearch(searchModal);
      });
    });
  }
}
export default Search;
