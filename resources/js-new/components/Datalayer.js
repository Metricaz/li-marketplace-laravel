class Datalayer {
  init() {
    //Home click
    this.addListenerToHeader();
    this.addListenerToTopMenu();
    this.addListenerToFooter();
    this.addListenerToBrandSection();
    this.addListenerToSuperDescontos();
    this.addListenerToMaisVendidos();
    this.addListenerToFeaturedCategories();
    //search
    this.addListenerToSearchCallback();
    //pdp
    this.addListenerToSeeMoreAmazon();
    this.addListenerToSimilarOffer();
    //plp
    this.addListenerToPlpProducts();
    this.addListenerToPlpFilter();
  }

  sendDataClick(wrapper, customType, customSection) {
    if(!wrapper) {
      return
    }

    wrapper.addEventListener('click', (event) => {
      console.log(event.target);
      console.log(this.slugify(event.target.getAttribute('custom_title')));

      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'event':'clique',
        'event_type':'event_custom',
        'custom_section': customSection,
        'custom_type': customType,
        'custom_title': this.slugify(event.target.getAttribute('custom_title')),
      });
    })
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

  addListenerToHeader() {
    const wrapper = document.getElementById('header-wrapper');
    this.sendDataClick(wrapper, 'header', 'geral');
  }

  addListenerToTopMenu() {
    const wrapper = document.getElementById('menu-wrapper');
    this.sendDataClick(wrapper, 'menu', 'geral');
  }

  addListenerToFooter() {
    const wrapper = document.getElementById('footer-wrapper');
    this.sendDataClick(wrapper, 'footer', 'geral');
  }

  addListenerToBrandSection() {
    const wrapper = document.getElementById('brands-section-wrapper');
    this.sendDataClick(wrapper, 'link', 'geral');
  }

  addListenerToSuperDescontos() {
    const wrapper = document.getElementById('super-descontos-wrapper');
    this.sendDataClick(wrapper, 'link', 'geral');
  }

  addListenerToMaisVendidos() {
    const wrapper = document.getElementById('mais-vendidos-wrapper');
    this.sendDataClick(wrapper, 'link', 'geral');
  }

  addListenerToFeaturedCategories() {
    const wrapper = document.getElementById('featured-categories-wrapper');
    this.sendDataClick(wrapper, 'link', 'geral');
  }

  addListenerToSeeMoreAmazon() {
    const wrapper = document.getElementById('see-more-amazon-wrapper');
    this.sendDataClick(wrapper, 'botao', 'pdp-boracomprar');
  }

  addListenerToSimilarOffer() {
    const wrapper = document.getElementById('similar-offer-wrapper');
    this.sendDataClick(wrapper, 'botao', 'pdp-boracomprar');
  }

  addListenerToPlpProducts() {
    const wrapper = document.getElementById('plp-products-wrapper');
    this.sendDataClick(wrapper, 'botao', 'plp-boracomprar');
  }

  addListenerToPlpFilter() {
    const wrapper = document.getElementById('filter-category-form');
    this.sendDataClick(wrapper, 'botao', 'plp-boracomprar');
  }

  addListenerToSearchCallback() {
    window.onload = function() {
      const url = window.location.href;
      if (url.includes('/s/')) {
        const data = document.getElementsByClassName('c-category-page__list');
        
        let customTitle = 'sucesso'
        
        if (data[0].textContent.includes('Nenhum produto fo')) {
          customTitle = 'nenhum-resultado'
        }

        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
          'event': 'callback',
          'event_type':'event_custom',
          'custom_section': 'geral',
          'custom_type': 'busca',
          'custom_title': customTitle,
        });
      }
    };
  }
}

export default Datalayer;
