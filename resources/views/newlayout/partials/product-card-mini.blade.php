<div class="c-product-card-mini">
  <a
    href="{{ $url ?? '' }}"
  >
  <img
    class="c-product-card-mini__img"
    src="{{ $image_url ?? '' }}"
    alt="{{ $title ?? '' }}"
    width="242"
    height="222"
  >

    <div class="c-product-card-mini__body">
      <h3 class="c-product-card-mini__title">
        {{ $title ?? '' }}
      </h3>

      <div class="c-product-card-mini__price">
        @if (isset($old_price))
          <span class="c-product-card-mini__old-price">R$ {{ $old_price }}</span>
        @endif

        <span class="c-product-card-mini__new-price">R$ {{ $price ?? '' }}</span>
      </div>
    </div>
  </a>

  <div>
    <a href="{{ $product->offer_link ?? '' }}">
      <div class="c-product-card-mini__button">
        Ver <strong>Oferta</strong> @include('newlayout.partials.svg.icons.external-link')
      </div>
    </a>
  </div>
</div>