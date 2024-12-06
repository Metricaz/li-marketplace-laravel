<div class="c-category-description-bottom">
  <div class="o-container">
    <h2 class="c-category-description-bottom__title">
      @if ($categoryText)
        {{ $categoryText->bottom_text_title }}
      @else
        Lorem ipsum dolor sit amet
      @endif
    </h2>

    <div class="c-category-description-bottom__text">
      <p>
      @if ($categoryText)
        {!! $categoryText->bottom_text !!}
      @else
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat a nulla vitae pellentesque. Nunc ac cursus purus, quis posuere erat. Phasellus nulla quam, sagittis id nisi sed, tristique faucibus ante. Donec sed ultrices diam, vitae tristique nisl. Nulla imperdiet purus eu consectetur fermentum. Curabitur faucibus, massa eu aliquam sollicitudin, nulla mi lobortis eros, nec pretium ante mi non quam. Vestibulum eget ultrices mi. Aenean consectetur mollis erat, in finibus sem volutpat a. Cras sit amet ultrices ligula, id blandit tellus. Maecenas condimentum imperdiet mauris eu bibendum. Nunc maximus lorem id sem ullamcorper tincidunt. Aenean venenatis arcu ac aliquet tristique. Sed dapibus felis a risus fermentum hendrerit. Morbi a eros metus. Nulla consequat, massa ut ullamcorper facilisis, nulla nulla molestie purus, eu consequat velit neque ac diam.
      @endif
      </p>
    </div>

    <h3 class="c-category-description-bottom__tags-title">
      Veja também
    </h3>

    <div class="c-category-description-bottom__tags">
      <a
        class="c-tag"
        href="/newlayout/categoria"
      >
        Casaco Feminino
      </a>

      <a
        class="c-tag"
        href="/newlayout/categoria"
      >
        Camisas Femininas
      </a>

      <a
        class="c-tag"
        href="/newlayout/categoria"
      >
        Calça Feminina
      </a>

      <a
        class="c-tag"
        href="/newlayout/categoria"
      >
        Blazer Feminino
      </a>
    </div>
  </div>
</div>
