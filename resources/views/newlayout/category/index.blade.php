@extends('newlayout.master')

@section('content')
<div class="c-category-page">
  @include('newlayout.category.partials.category-description')
  @include('newlayout.category.partials.top-offers')

  <div class="o-container">
    <div class="c-category-page__wrapper">
      <div class="c-category-page__sidebar">
        @include('newlayout.category.partials.filter')
      </div>

      <div class="c-category-page__content">
        <div class="c-category-page-bar">
          <div class="c-category-page-bar__left">
            <span class="c-category-page-bar__results">
              545 produtos
            </span>

            <label for="select-order-by" class="u-visually-hidden">
              Ordenar por
            </label>

            <select
              class="c-category-page-bar__select"
              id="select-order-by"
              name=""
            >
              <option value="">Mais Relevante</option>
              <option value="">Praço mais alto</option>
              <option value="">Praço mais baixo</option>
            </select>
          </div>


          <div class="c-category-page-bar__right">
            <label for="select-items-per-page">
              Itens por página
            </label>

            <select
              class="c-category-page-bar__select"
              id="select-items-per-page"
              name=""
            >
              <option value="12">12</option>
              <option value="24">24</option>
              <option value="48">48</option>
            </select>
          </div>
        </div>

        <div class="c-category-page__list">
          @for($i=0;$i<12;$i++)
            @include('newlayout.category.partials.product-card', [
              'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent hendrerit dapibus elit at tristique. Mauris eget est ac tellus elementum',
              'price' => '129,99',
              'old_price' => '199,99',
              'image_url' => 'https://placehold.co/300x300?text=P',
              'url' => '#',
            ])
          @endfor
        </div>
      </div>
    </div>
  </div>

  @include('newlayout.category.partials.category-description-bottom')
</div>
@include('newlayout.category.partials.bottom-bar')
@stop
