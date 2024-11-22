<div class="c-product-page__sidebar">
  <h3 class="c-product-page__sidebar-title">
    Ofertas similares
  </h3>

  @for($i=0;$i<3;$i++)
    @include('newlayout.partials.product-card-mini',[
      'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent hendrerit dapibus elit at tristique. Mauris eget est ac tellus elementum',
      'price' => '129,99',
      'old_price' => '199,99',
      'image_url' => 'https://placehold.co/300x300?text=P',
      'url' => '/newlayout/produto',
    ])
  @endfor
</div>
