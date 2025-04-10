<header class="c-header">
  <div class="o-container c-header__wrapper" id="header-wrapper" custom_title="logo">
    <a
      href="/"
      title="Bora Comprar"
      class="c-header__logo"
      custom_title="logo"
    >
      <img
        src="{{ asset('img-new/logo.webp') }}"
        alt="Logo Bora Comprar"
        width="250"
        height="31"
        custom_title="logo"
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

      <form name="serach-form" id="search-form" method="get" action="{{route('search', '')}}" custom_title="busca">
        <div class="c-search__field">
          <input
            type="text"
            name="topbar-search-input"
            id="topbar-search-input"
            placeholder="Buscar"
            class="c-search__input"
            custom_title="busca"
          >

          <a
            type="submit"
            name="topbar-search-submit"
            id="topbar-search-submit"
            class="c-search__button"
            title="Buscar"
          >
            @include('newlayout.partials.svg.icons.search')
          </button>
        </div>
      </form>
    </div>

    <div class="c-header__follow-us">
      @include('newlayout.partials.follow-us', ['size' => 'sm'])
    </div>
  </div>
</header>
