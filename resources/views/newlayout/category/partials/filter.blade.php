<div class="c-filter" data-filter>
  <div class="c-filter__head">
    <h3 class="c-filter__title">
      Filtrar
    </h3>

    <button
      type="button"
      class="c-filter__close"
      data-filter-close
      title="Fechar filtro"
    >
      @include('newlayout.partials.svg.icons.close')
    </button>
  </div>

  <form name="filter-category-form" id="filter-category-form" method="get" action="{{route('category', $category)}}">
  @csrf
    <div class="c-filter__body">
      <div class="c-filter__block">
        <h4 class="c-filter__subtitle">
          Tamanho
        </h4>

        <div class="c-filter__list">
          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="size" name="size" value="38">
            <span class="c-checkbox__box"></span>
            38
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="size" name="size" value="39">
            <span class="c-checkbox__box"></span>
            39
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="size" name="size" value="40">
            <span class="c-checkbox__box"></span>
            40
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="size" name="size" value="41">
            <span class="c-checkbox__box"></span>
            41
          </label>
          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="size" name="size" value="42">
            <span class="c-checkbox__box"></span>
            42
          </label>
        </div>
      </div>

      <div class="c-filter__block">
        <h4 class="c-filter__subtitle">
          Marca
        </h4>

        <div class="c-filter__list">
          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Levi's
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Sawary
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Biotipo
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Hering
          </label>
        </div>
      </div>

      <div class="c-filter__block">
        <h4 class="c-filter__subtitle">
          Tipos
        </h4>

        <div class="c-filter__list">
          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Calça Skinny
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Calça Boyfriend
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Calça Pantalona
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Calça Mom
          </label>
        </div>
      </div>

      <div class="c-filter__block">
        <h4 class="c-filter__subtitle">
          Cores
        </h4>

        <div class="c-filter__list">
          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Azul
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Preto
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Cinza
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Bege
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Branco
          </label>
        </div>
      </div>
    </div>
    <div class="c-filter__footer">
        <button type="submit" class="c-filter__button" title="Refresh page">
          Filtrar
        </button>
    </div>

  </form>
</div>
