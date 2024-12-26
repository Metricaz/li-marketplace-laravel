<div class="c-product__info">
  <div class="c-product__labels">
    @if ($product->discount_price)
    <div class="c-product__label">
      Desconto Verificado
    </div>
    @endif
  </div>
  
  @if ($product->discount_price)
  <div class="c-product__old-price">
    R$ {{$product->discount_price}}
  </div>
  @endif

  <div class="c-product__price">
    R$ {{$product->price}}
  </div>

  <div class="c-product__sizes">
    <div class="c-product__sizes-title">
      Tamanhos disponíveis
    </div>

    <div class="c-product__sizes-list">
      <div class="c-product__sizes-item">{!! $product->info->size !!}</div>
    </div>
  </div>

  <a
    class="c-product__button"
    href="{{$product->offer_link}}"
    target="_blank"
  >
    Ver Oferta @include('newlayout.partials.svg.icons.amazon')
  </a>

  <div class="c-product__send-wrapper">
    <a
      class="c-product__send"
      href="{{$product->offer_link}}"
    >
      @include('newlayout.partials.svg.icons.send') Enviar para um amigo
    </a>

    <div class="c-product__views u-visible-tablet">
      @include('newlayout.partials.svg.icons.eye') 15
    </div>
  </div>
</div>
