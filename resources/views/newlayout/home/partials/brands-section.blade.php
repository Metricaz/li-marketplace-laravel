<div class="c-brands-section">
  <div class="o-container">
    <div class="c-brands-section__wrapper">
      <h2 class="c-brands-section__title">
        Navegue pelas Principais Marcas:
      </h2>

      <div class="c-brands-section__brands-wrapper">
        <button
            class="c-brands-section__btn c-brands-section__btn--left"
            data-brands-section-btn-scroll-left
            aria-label="Navegar para esquerda"
          >
          @include('newlayout.partials.svg.icons.chevron-left')
        </button>

        <div class="c-brands-section__list" data-brands-section-list>
          <a
            href="#"
            title="Levi's"
          >
            <img
              src="{{ asset('img-new/home/brands-section/logo-levis.webp') }}"
              alt="Levi's"
              width="143"
              height="38"
            >
          </a>

          <a
            href="#"
            title="Zara"
          >
            <img
              src="{{ asset('img-new/home/brands-section/logo-zara.webp') }}"
              alt="Zara"
              width="143"
              height="38"
            >
          </a>

          <a
            href="#"
            title="Sawary"
          >
            <img
              src="{{ asset('img-new/home/brands-section/logo-sawary.webp') }}"
              alt="Sawary"
              width="143"
              height="38"
            >
          </a>

          <a
            href="#"
            title="Colcci"
          >
            <img
              src="{{ asset('img-new/home/brands-section/logo-colcci.webp') }}"
              alt="Colcci"
              width="143"
              height="38"
            >
          </a>
        </div>

        <button
          class="c-brands-section__btn c-brands-section__btn--right"
          data-brands-section-btn-scroll-right
          aria-label="Navegar para direita"
        >
          @include('newlayout.partials.svg.icons.chevron-right')
        </button>
      </div>
    </div>
  </div>
</div>
