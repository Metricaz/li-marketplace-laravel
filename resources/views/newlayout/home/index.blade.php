@extends('newlayout.master')

@section('content')
<div class="c-home-page">
  @include('newlayout.partials.menu-desk')
  @include('newlayout.home.partials.hero')
  @include('newlayout.home.partials.brands-section')

  <div id="super-descontos-wrapper">
    @include('newlayout.home.partials.cards-section', [
      'title' => 'SUPER DESCONTOS',
      'link' => '/calca-jeans',
      'products' => $productsMinPrice
    ])
  </div>
  <div id="mais-vendidos-wrapper">
    @include('newlayout.home.partials.cards-section', [
      'title' => 'MAIS VENDIDOS',
      'link' => '/calca-jeans',
      'products' => $products
    ])
  </div>
  @include('newlayout.home.partials.featured-categories')
  @include('newlayout.home.partials.newsletter-section')
</div>
@stop
