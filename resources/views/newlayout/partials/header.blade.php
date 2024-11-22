<header class="c-header">
  <div class="o-container c-header__wrapper">
    <a
      href="/newlayout"
      title="Bora Comprar"
      class="c-header__logo"
    >
      <img
        src="{{ asset('img-new/logo.webp') }}"
        alt="Logo Bora Comprar"
        width="250"
        height="31"
      >
    </a>

    <div class="c-search" data-search>
      <button
        type="button"
        class="c-search__close"
        data-search-close
        title="Fechar busca"
      >
        @include('newlayout.partials.svg.icons.close')
      </button>

      <div class="c-search__field">
        <input
          type="text"
          placeholder="Buscar"
          class="c-search__input"
        >

        <button
          type="submit"
          class="c-search__button"
          title="Buscar"
        >
          @include('newlayout.partials.svg.icons.search')
        </button>
      </div>
    </div>

    <div class="c-header__follow-us">
      @include('newlayout.partials.follow-us', ['size' => 'sm'])
    </div>
  </div>
</header>
