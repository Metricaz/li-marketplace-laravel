<div class="c-cards-section">
  <div class="o-container">
    <h2 class="c-section-title">
      {{ $title ?? '' }}
    </h2>
  </div>

  <div class="c-cards-section__wrapper">
    <div class="c-cards-section__list-wrapper">
      <div class="o-container">
        <div class="c-cards-section__list" data-cards-section-list>
          @foreach($products as $product)
            @include('newlayout.partials.product-card', [
                'title' => $product->name,
                'price' => $product->price,
                'old_price' => $product->discount_price,
                'image_url' => $product->feature_image,
                'url' => '/product/'.$product->id,
            ])

          @endforeach
          <div class="c-cards-section__last-card">
            <a href="{!! $link !!}" >
              @include('newlayout.partials.svg.icons.seta-1')

              <div>
                Gostaria de ver mais itens como estes?
              </div>

              <div
                href="{!! $link !!}"
                class="c-cards-section__last-card-button"
              >
                Ver mais
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="c-cards-section__button">
      <a href="{!! $link !!}" class="c-button c-button--secondary">
        Ver Mais
      </a>
    </div>
  </div>
</div>
