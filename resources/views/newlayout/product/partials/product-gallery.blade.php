<div class="c-product-gallery" data-product-gallery>

  <img
    class="c-product-gallery__image"
    data-product-gallery-image
    src="{{$product->feature_image}}"
    alt="Lorem ipsum dolor sit amet consectetur adipiscing elit"
    width="375"
    height="430"
  >

  <div class="c-product-gallery__thumbs" data-product-gallery-thumbs>
    <img
      class="c-product-gallery__thumb is-active"
      data-product-gallery-thumb
      src="{{$product->feature_image}}"
      alt="Lorem ipsum dolor sit amet consectetur adipiscing elit"
      width="80"
      height="80"
    >

    @foreach($images as $image)
      <img
        class="c-product-gallery__thumb"
        data-product-gallery-thumb
        src="{!! $image !!}"
        width="80"
        height="80"
      >
    @endforeach
  </div>
</div>
