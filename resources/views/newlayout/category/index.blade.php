@extends('newlayout.master')
@section('meta-title', 'Lorem ipsum dolor sit - Bora Comprar')
@section('meta-description', 'Lorem ipsum dolor sit - Bora Comprar')

@section('content')
<div class="c-category-page">
  @include('newlayout.partials.breadcrumb')
  @include('newlayout.category.partials.category-description', ['categoryText' => $categoryText])
  @include('newlayout.category.partials.top-offers', ['top-products' => $products])

  <div class="o-container">
    <div class="c-category-page__wrapper">
      <div class="c-category-page__sidebar">
        @include('newlayout.category.partials.filter')
      </div>

      <div class="c-category-page__content">
        <div class="c-category-page-bar">
          <div class="c-category-page-bar__left">
            <span class="c-category-page-bar__results">
              {{$productCount}} produtos
            </span>

            <label for="select-order-by" class="u-visually-hidden">
              Ordenar por
            </label>

            <select
              class="c-form-control c-category-page-bar__select"
              id="select-order-by"
              name=""
            >
              <option value="">Mais Relevante</option>
              <option value="">Preço mais alto</option>
              <option value="">Preço mais baixo</option>
            </select>
          </div>


          <div class="c-category-page-bar__right">
            <label for="select-items-per-page">
              Itens por página
            </label>

            <form name="get-user-by-id" id="get-user-by-id" method="post" action="{{url('do-get-address')}}">
            <select
              class="c-form-control c-category-page-bar__select"
              id="select-items-per-page"
              name="select-items-per-page"
            >
              <option value="12">12</option>
              <option value="24">24</option>
              <option value="48">48</option>
            </select>
            </form>
          </div>
        </div>

        <div class="c-category-page__list">
          @foreach($products as $product)
            @include('newlayout.partials.product-card', [
                'title' => $product->name,
                'price' => $product->price,
                'old_price' => $product->discount_price,
                'image_url' => $product->feature_image,
                'url' => $product->sku.'/p',
            ])

          @endforeach
        </div>
        {{ $products->links() }}
      </div>
    </div>
  </div>

  @include('newlayout.category.partials.category-description-bottom', ['categoryText' => $categoryText])
</div>
@include('newlayout.category.partials.bottom-bar')
@stop
