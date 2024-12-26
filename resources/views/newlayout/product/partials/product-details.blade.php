<div class="c-product-page__details">
  <h2 class="c-product-page__details-title">
    Especificações técnicas
  </h2>

  <h3 class="c-product-page__details-subtitle">
    Informações do Produto
  </h3>

  <div class="c-product-page__details-text">

    @foreach(json_decode($product->full_description, true) as $description)
      <p>
        {{$description}}
      </p>
    @endForeach
  </div>
</div>
