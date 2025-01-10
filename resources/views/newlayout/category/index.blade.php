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
          
          <form name="order-by-form" id="order-by-form" method="get" action="{{url()->full()}}">
            <!--This code is really wrong-->
            @if(request()->has('size'))
              <input type="hidden" name="size" value="{{request()->get('size')}}" />
            @endIf
            @if(request()->has('brand'))
              @foreach(request()->get('brand') as $brand)
                <input type="hidden" name="brand[]" value="{{$brand}}" /> 
              @endforeach
            @endIf
            @if(request()->has('color'))
              @foreach(request()->get('color') as $color)
                <input type="hidden" name="color[]" value="{{$color}}" /> 
              @endforeach
            @endIf
            @if(request()->has('per_page'))
              <input type="hidden" name="per_page" value="{{request()->get('per_page')}}" /> 
            @endIf
            <!--This code is really wrong-->
            <select
              class="c-form-control c-category-page-bar__select"
              id="select-order-by"
              name="order_by"
            >
              <option value="">Mais Relevante</option>
              <option value="desc" @if(request()->has('order_by') && request()->get('order_by') == 'desc') selected @endif>Preço mais alto</option>
              <option value="asc" @if(request()->has('order_by') && request()->get('order_by') == 'asc') selected @endif>Preço mais baixo</option>
            </select>
          </form>
          </div>

          <div class="c-category-page-bar__right">
            <label for="select-items-per-page">
              Itens por página
            </label>

            <form name="perpage-form" id="perpage-form" method="get" action="{{url()->current()}}">
            <!--This code is really wrong-->
            @if(request()->has('size'))
              <input type="hidden" name="size" value="{{request()->get('size')}}" />
            @endIf
            @if(request()->has('brand'))
              @foreach(request()->get('brand') as $brand)
                <input type="hidden" name="brand[]" value="{{$brand}}" /> 
              @endforeach
            @endIf
            @if(request()->has('color'))
              @foreach(request()->get('color') as $color)
                <input type="hidden" name="color[]" value="{{$color}}" /> 
              @endforeach
            @endIf
            @if(request()->has('order_by'))
              <input type="hidden" name="order_by" value="{{request()->get('order_by')}}" />
            @endIf
            <!--This code is really wrong-->
            <select
              class="c-form-control c-category-page-bar__select"
              id="select-items-per-page"
              name="per_page"
            >
              <option value="12" @if(request()->has('per_page') && request()->get('per_page') == '12') selected @endif>12</option>
              <option value="24" @if(request()->has('per_page') && request()->get('per_page') == '24') selected @endif>24</option>
              <option value="48" @if(request()->has('per_page') && request()->get('per_page') == '48') selected @endif>48</option>
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
                'url' => url('/').'/'.$product->sku.'/p',
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
