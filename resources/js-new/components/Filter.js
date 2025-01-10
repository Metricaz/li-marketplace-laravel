import * as noUiSlider from 'nouislider';
import 'nouislider/dist/nouislider.css';
import wNumb from 'wnumb';
class Filter {
  constructor() {
    this.body = document.querySelector('body');
    this.filterButton = document.querySelectorAll('[data-filter-button]');
    this.filterModal = document.querySelector('[data-filter]');
    this.filterCloseButton = document.querySelector('[data-filter-close]');
    this.showMoreButtons = document.querySelectorAll('[data-filter-show-more]');
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

    this.showMoreButtons.forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        this.showMoreItems(button);
      });
    });
  }

  removeEventListeners() {
    if (this.escapeKeyListener) {
      document.removeEventListener('keydown', this.escapeKeyListener);
      this.escapeKeyListener = null;
    }
  }

  showMoreItems(button) {
    const list = button.closest('[data-filter-list]');
    if (!list) return;

    const hiddenItems = list.querySelectorAll('[data-filter-hidden]');
    hiddenItems.forEach(item => {
      item.removeAttribute('data-filter-hidden');
    });

    button.style.display = 'none';
  }

  initializePriceRangeSlider() {
    const slider = document.getElementById('price-slider');
    const inputMin = document.getElementById('filter-price-input-min');
    const inputMax = document.getElementById('filter-price-input-max');
    const inputs = [inputMin, inputMax];
    const searchParams = new URLSearchParams(window.location.search);
    let queryMinPrice = searchParams.get('minPrice')
    let queryMaxPrice = searchParams.get('maxPrice')

    if (!queryMinPrice) {
      queryMinPrice = 0
    }

    if (!queryMaxPrice) {
      queryMaxPrice = 10000
    }

    if (!slider || !inputMin || !inputMax) {
      return;
    }

    noUiSlider.create(slider, {
      start: [queryMinPrice, queryMaxPrice],
      connect: true,
      range: {
        'min': [0, 5],
        '50%': [300, 10],
        '60%': [500, 25],
        '80%': [5000, 100],
        'max': 10000,
      },
      format: wNumb({
        decimals: 0,
        thousand: '.',
      }),
    });

    slider.noUiSlider.on('update', (values, handle) => {
      inputs[handle].value = values[handle];
    });

    inputs.forEach((input, handle) => {
      input.addEventListener('change', () => {
        slider.noUiSlider.setHandle(handle, input.value);
      });

      input.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
          e.preventDefault();
          slider.noUiSlider.setHandle(handle, input.value);
        }

        handleSliderKeydown(e, slider, handle);
      });
    });

    function handleSliderKeydown(event, slider, handle) {
      const values = slider.noUiSlider.get();
      const value = Number(values[handle]);
      const steps = slider.noUiSlider.steps();
      const step = steps[handle];

      let position;

      switch (event.key) {
        case 'Enter':
          slider.noUiSlider.setHandle(handle, event.target.value);
          break;

        case 'ArrowUp':
          position = step[1] || 1;
          slider.noUiSlider.setHandle(handle, value + position);
          break;

        case 'ArrowDown':
          position = step[0] || 1;
          slider.noUiSlider.setHandle(handle, value - position);
          break;
      }
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

    this.showMoreButtons.forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        this.showMoreItems(button);
      });
    });

    this.initializePriceRangeSlider();
  }
}

export default Filter;
