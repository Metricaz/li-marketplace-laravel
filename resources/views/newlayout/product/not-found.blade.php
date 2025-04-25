@extends('newlayout.master')

@section('content')
@include('newlayout.partials.breadcrumb')
<div class="c-product-page">
  <div class="o-container">
    <div class="c-product-page__wrapper">
      <div class="c-product">
        <input type="hidden" name="item-view-wrapper" id="item-view-wrapper" value="{{ $itemView }}" />
        <h1 class="c-product__title">
          Produto Não Encontrado
        </h1>

        <div class="c-product__views u-hidden-tablet">
          @include('newlayout.partials.svg.icons.eye') 15
        </div>

        <div class="c-product__main">
        </div>
      </div>
    </div>
  </div>
</div>
@stop
