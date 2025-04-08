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
  }

  sendDataClick(wrapper, customType) {
    if(!wrapper) {
      return
    }

    wrapper.addEventListener('click', (event) => {
      console.log(event.target);
      console.log(event.target.getAttribute('custom_title'));

      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'event':'clique',
        'event_type':'event_custom',
        'custom_section': 'geral',
        'custom_type': customType,
        'custom_title': this.slugify(event.target.getAttribute('custom_title')),
      });
    })
  }

  slugify(text) {
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
    this.sendDataClick(wrapper, 'header');
  }

  addListenerToTopMenu() {
    const wrapper = document.getElementById('menu-wrapper');
    this.sendDataClick(wrapper, 'menu');
  }

  addListenerToFooter() {
    const wrapper = document.getElementById('footer-wrapper');
    this.sendDataClick(wrapper, 'footer');
  }

  addListenerToBrandSection() {
    const wrapper = document.getElementById('brands-section-wrapper');
    this.sendDataClick(wrapper, 'link');
  }

  addListenerToSuperDescontos() {
    const wrapper = document.getElementById('super-descontos-wrapper');
    this.sendDataClick(wrapper, 'link');
  }

  addListenerToMaisVendidos() {
    const wrapper = document.getElementById('mais-vendidos-wrapper');
    this.sendDataClick(wrapper, 'link');
  }

  addListenerToFeaturedCategories() {
    const wrapper = document.getElementById('featured-categories-wrapper');
    this.sendDataClick(wrapper, 'link');
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
