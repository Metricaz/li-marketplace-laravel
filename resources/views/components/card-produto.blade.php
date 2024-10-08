<article class="card-produto">
    <a class="img-produto" href="/product/{{Arr::get($product, 'sku')}}"><img src="{{Arr::get($product, 'feature_image')}}"></a>
    <h3>{{Arr::get($product, 'name')}}</h3>
    <span class="tag-destaque">{{Arr::get($product, 'highlight')}}</span>
    <div class="price-row">
        <span>R$</span>
        <span class="price">{{Arr::get($product, 'price')}}</span>
        <a href="/product/{{Arr::get($product, 'sku')}}" class="btn">Saiba Mais</a>
    </div>
    <footer>{{Arr::get($product, 'sold_by')}}</footer>
</article>
