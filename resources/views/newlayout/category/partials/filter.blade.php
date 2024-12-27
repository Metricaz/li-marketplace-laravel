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
            <input type="checkbox" class="c-checkbox__input" id="size" name="size[]" value="38" @if(request()->has('size') && in_array('38', request()->get('size'))) checked @endif>
            <span class="c-checkbox__box"></span>
            38
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="size" name="size[]" value="39" @if(request()->has('size') && in_array('39', request()->get('size'))) checked @endif>
            <span class="c-checkbox__box"></span>
            39
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="size" name="size[]" value="40" @if(request()->has('size') && in_array('40', request()->get('size'))) checked @endif>
            <span class="c-checkbox__box"></span>
            40
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="size" name="size[]" value="41" @if(request()->has('size') && in_array('41', request()->get('size'))) checked @endif>
            <span class="c-checkbox__box"></span>
            41
          </label>
          @php
          @endphp
          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="size" name="size[]" value="42" @if(request()->has('size') && in_array('42', request()->get('size'))) checked @endif>
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
            <input type="checkbox" class="c-checkbox__input" id="brand" name="brand[]" value="levis" @if(request()->has('brand') && in_array('levis', request()->get('brand'))) checked @endif>
            <span class="c-checkbox__box"></span>
            Levi's
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="brand" name="brand[]" value="sawary" @if(request()->has('brand') && in_array('sawary', request()->get('brand'))) checked @endif>
            <span class="c-checkbox__box"></span>
            Sawary
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="brand" name="brand[]" value="biotipo" @if(request()->has('brand') && in_array('biotipo', request()->get('brand'))) checked @endif>
            <span class="c-checkbox__box"></span>
            Biotipo
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="brand" name="brand[]" value="hering" @if(request()->has('brand') && in_array('hering', request()->get('brand'))) checked @endif>
            <span class="c-checkbox__box"></span>
            Hering
          </label>
        </div>
      </div>

      <div class="c-filter__block">
        <h4 class="c-filter__subtitle">
          Cores
        </h4>

        <div class="c-filter__list">
          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="color" name="color[]" value="azul" @if(request()->has('color') && in_array('azul', request()->get('color'))) checked @endif>
            <span class="c-checkbox__box"></span>
            Azul
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="color" name="color[]" value="preto" @if(request()->has('color') && in_array('preto', request()->get('color'))) checked @endif>
            <span class="c-checkbox__box"></span>
            Preto
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="color" name="color[]" value="cinza" @if(request()->has('color') && in_array('cinza', request()->get('color'))) checked @endif>
            <span class="c-checkbox__box"></span>
            Cinza
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="color" name="color[]" value="bege" @if(request()->has('color') && in_array('bege', request()->get('color'))) checked @endif>
            <span class="c-checkbox__box"></span>
            Bege
          </label>

          <label class="c-checkbox">
            <input type="checkbox" class="c-checkbox__input" id="color" name="color[]" value="branco" @if(request()->has('color') && in_array('branco', request()->get('color'))) checked @endif>
            <span class="c-checkbox__box"></span>
            Branco
          </label>
        </div>
      </div>
    </div>

    {{-- Exemplo filtro novo --}}
    {{-- <div class="c-filter__body">
      <div class="c-filter__block">
        <h4 class="c-filter__subtitle">
          Tipos
        </h4>

        <div
          class="c-filter__list"
          data-filter-list
        >
          <a href="#">
            Tipo 1
          </a>

          <a href="#">
            Tipo 2
          </a>

          <a href="#">
            Tipo 3
          </a>

          <a href="#">
            Tipo 4
          </a>

          <a href="#" data-filter-hidden>
            Tipo 5
          </a>

          <a href="#" data-filter-hidden>
            Tipo 6
          </a>

          <a href="#" data-filter-hidden>
            Tipo 7
          </a>

          <a href="#" data-filter-hidden>
            Tipo 8
          </a>

          <a href="#" data-filter-hidden>
            Tipo 9
          </a>

          <a href="#" data-filter-hidden>
            Tipo 10
          </a>

          <a href="#" data-filter-show-more>
            <strong>Mais categorias...</strong>
          </a>
        </div>
      </div>

      <div class="c-filter__block">
        <h4 class="c-filter__subtitle">
          Marcas
        </h4>

        <div
          class="c-filter__list"
          data-filter-list
        >
          <a href="#">
            Marca 1
          </a>

          <a href="#">
            Marca 2
          </a>

          <a href="#">
            Marca 3
          </a>

          <a href="#">
            Marca 4
          </a>

          <div class="c-filter__form-group">
            <label for="filter-input-more-brands">
              Outras marcas
            </label>

            <input
              id="filter-input-more-brands"
              class="c-form-control"
              type="text"
              placeholder="Digite a marca"
            >
          </div>
        </div>
      </div>

      <div class="c-filter__block">
        <h4 class="c-filter__subtitle">
          Preço
        </h4>

        <div class="c-filter-price" data-filter-price>
          <div class="c-filter-price__fields">
            <div class="c-filter-price__field">
              <label for="filter-price-input-min">
                Min.
              </label>

              <input
                id="filter-price-input-min"
                type="text"
                value="0"
              >
            </div>

            <div class="c-filter-price__field">
              <label for="filter-price-input-max">
                Max.
              </label>

              <input
                id="filter-price-input-max"
                type="text"
                value="0"
              >
            </div>
          </div>

          <div class="c-filter-price__slider" id="price-slider"></div>
        </div>
      </div>

      <div class="c-filter__block">
        <label
          class="c-filter__subtitle"
          for="filter-input-sizes"
        >
          Tamanhos
        </label>

        <select
          id="filter-input-sizes"
          class="c-form-control"
          name=""
        >
          <option value="">Lista de tamanhos</option>
          <option value="38">38</option>
          <option value="39">39</option>
          <option value="40">40</option>
          <option value="42">42</option>
        </select>
      </div>

      <div class="c-filter__block">
        <h4 class="c-filter__subtitle">
          Cores
        </h4>

        <div class="c-filter__list">
          <label class="c-checkbox c-checkbox--right">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Azul
          </label>

          <label class="c-checkbox c-checkbox--right">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Preto
          </label>

          <label class="c-checkbox c-checkbox--right">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Cinza
          </label>

          <label class="c-checkbox c-checkbox--right">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Bege
          </label>

          <label class="c-checkbox c-checkbox--right">
            <input type="checkbox" class="c-checkbox__input">
            <span class="c-checkbox__box"></span>
            Branco
          </label>
        </div>
      </div>
    </div> --}}

    <div class="c-filter__footer">
      <button type="submit" class="c-filter__button">
        Filtrar
      </button>
    </div>
  </form>
</div>
