<div class="c-product-card">
  <a
    href="{{ $url ?? '' }}"
    class=""
  >
  <img
    class="c-product-card__img"
    src="{{ $image_url ?? '' }}"
    alt="{{ $title ?? '' }}"
    width="242"
    height="222"
  >

    <div class="c-product-card__body">
      <h3 class="c-product-card__title">
        {{ $title ?? '' }}
      </h3>

      <div class="c-product-card__price">
        @if (isset($old_price))
          <span class="c-product-card__old-price">R$ {{ $old_price }}</span>
        @endif

        <span class="c-product-card__new-price">R$ {{ $price ?? '' }}</span>
      </div>
    </div>
  </a>

  <a href="{{ $product->offer_link ?? '' }}">
    <div class="c-product-card__button">
      Ver <strong>Oferta</strong> @include('newlayout.partials.svg.icons.external-link')
    </div>
  </a>
</div>