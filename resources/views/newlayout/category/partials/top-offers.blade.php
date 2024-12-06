<div class="c-top-offers">
  <div class="o-container">
    <h2 class="c-top-offers__title">
      Melhores ofertas
    </h2>

    <div class="c-top-offers__wrapper">
      <button
          class="c-top-offers__btn c-top-offers__btn--left"
          data-top-offers-btn-scroll-left
          aria-label="Navegar para esquerda"
        >
        @include('newlayout.partials.svg.icons.chevron-left')
      </button>

      <div class="c-top-offers__list" data-top-offers-list>
          @foreach($products as $product)
            @include('newlayout.partials.product-card-mini',[
                'title' => $product->name,
                'price' => $product->price,
                'old_price' => $product->price,
                'image_url' => $product->feature_image,
                'url' => '/product/'.$product->id,
            ])

          @endforeach
      </div>

      <button
        class="c-top-offers__btn c-top-offers__btn--right"
        data-top-offers-btn-scroll-right
        aria-label="Navegar para direita"
      >
        @include('newlayout.partials.svg.icons.chevron-right')
      </button>
    </div>
  </div>
</div>
