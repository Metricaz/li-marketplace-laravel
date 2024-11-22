@extends('newlayout.master')
@section('meta-title', 'Lorem ipsum dolor sit amet consectetur adipiscing elit - Bora Comprar')
@section('meta-description', 'Lorem ipsum dolor sit amet consectetur adipiscing elit - Bora Comprar')

@section('content')
<div class="c-product-page">
  <div class="o-container">
    <div class="c-product-page__wrapper">
      <div class="c-product">
        <h1 class="c-product__title">
          Lorem ipsum dolor sit amet consectetur adipiscing elit
        </h1>

        <div class="c-product__views u-hidden-tablet">
          @include('newlayout.partials.svg.icons.eye') 15
        </div>

        <div class="c-product__main">
          @include('newlayout.product.partials.product-gallery')
          @include('newlayout.product.partials.product-info')
        </div>

        @include('newlayout.product.partials.product-details')
      </div>

      @include('newlayout.product.partials.sidebar')
    </div>

    @include('newlayout.product.partials.store-info')
  </div>

  @include('newlayout.category.partials.category-description-bottom')
</div>
@stop
