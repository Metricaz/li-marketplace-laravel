@extends('newlayout.master')
@section('meta-title', "$product->name - Bora Comprar")
@section('meta-description', "$product->name - Bora Comprar")

@section('content')
<div class="c-product-page">
  <div class="o-container">
    <div class="c-product-page__wrapper">
      <div class="c-product">
        <input type="hidden" name="item-view-wrapper" id="item-view-wrapper" value="{{ $itemView }}" />
        <h1 class="c-product__title">
          {{$product->name}}
        </h1>

        <div class="c-product__views u-hidden-tablet">
          @include('newlayout.partials.svg.icons.eye') 15
        </div>

        <div class="c-product__main">
          @include('newlayout.product.partials.product-gallery', ['product' => $product, 'images' => $images])
          @include('newlayout.product.partials.product-info', ['product' => $product])
        </div>

        @include('newlayout.product.partials.product-details', ['product' => $product])
      </div>

      @include('newlayout.product.partials.sidebar', ['similarProducts' => $similarProducts])
    </div>

    @include('newlayout.product.partials.store-info', ['product' => $product])
  </div>

  <!-- @include('newlayout.category.partials.category-description-bottom') -->
</div>
@stop
