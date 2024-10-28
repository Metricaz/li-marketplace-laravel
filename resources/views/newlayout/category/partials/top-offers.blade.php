<div class="c-top-offers">
  <div class="o-container">
    <h2 class="c-top-offers__title">
      Melhores ofertas
    </h2>

    <div class="c-top-offers__wrapper">
      <button
          class="c-top-offers__btn c-top-offers__btn--left"
          data-top-offers-btn-scroll-left
          aria-label="Scroll Left"
        >
        @include('newlayout.partials.svg.icons.chevron-left')
      </button>

      <div class="c-top-offers__list" data-top-offers-list>
        @for($i=0;$i<12;$i++)
          @include('newlayout.category.partials.product-card-mini',[
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent hendrerit dapibus elit at tristique. Mauris eget est ac tellus elementum',
            'price' => '129,99',
            'old_price' => '199,99',
            'image_url' => 'https://placehold.co/300x300?text=P',
            'url' => '#',
          ])
        @endfor
      </div>

      <button
        class="c-top-offers__btn c-top-offers__btn--right"
        data-top-offers-btn-scroll-right
        aria-label="Scroll Right"
      >
        @include('newlayout.partials.svg.icons.chevron-right')
      </button>
    </div>
  </div>
</div>
