<div class="c-product-page__sidebar">
  <h3 class="c-product-page__sidebar-title">
    Ofertas similares
  </h3>

  @foreach($similarProducts as $product)
    @include('newlayout.partials.product-card-mini', [
        'title' => $product->name,
        'price' => $product->price,
        'old_price' => $product->discount_price,
        'image_url' => $product->feature_image,
        'url' => $product->sku.'/p',
    ])
  @endforeach
</div>
