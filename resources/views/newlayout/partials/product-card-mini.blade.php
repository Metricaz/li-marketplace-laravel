<a
  href="{{ $url ?? '' }}"
  class="c-product-card-mini"
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

    <div class="c-product-card-mini__button">
      Ver <strong>Oferta</strong> @include('newlayout.partials.svg.icons.external-link')
    </div>
  </div>
</a>
