<div class="c-product-page__details">
  <h2 class="c-product-page__details-title">
    Sobre a Loja
  </h2>

  <h3 class="c-product-page__details-subtitle">
    {{$product->sold_by}}
  </h3>

  <div class="c-product-page__details-text">
    <ul class="c-product-page__details-list">
      <li>@include('newlayout.partials.svg.icons.check') <div> {{$product->sold_by}}</div></li>
    </ul>
  </div>
</div>
