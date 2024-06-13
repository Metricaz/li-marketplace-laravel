<div class="grid-produtos grey">
    <div class="row no-padding">
        <div class="grid-header">
            @include('components.breadcrumbs', ['category' => $category])
            <h1>{{$category}}</h1>   
        </div>
    </div>
    <form action="/category/{{$category_id}}/search" method="POST" class="form form-inline" role="search">
    @csrf
    <div class="row no-padding no-wrap no-gap">
        <aside id="aside-filtro" class="sidenav d-col-3">
            <div><h3>Filtros</h3></div>
            <a href="#" id="aside-toggle" class="aside-arrow d-hide"></a>

                <div>
                    <h4>Enviado de</h4>
                    <label>
                        <input type="checkbox" id="locale[]" name="locale[]" value="sao_paulo">  São Paulo
                    </label>
                    <label>
                        <input type="checkbox" id="locale[]" name="locale[]" value="rio_grande_do_sul"> Rio Grande do Sul
                    </label>
                    <label>
                        <input type="checkbox" id="locale[]" name="locale[]" value="rio_de_janeiro"> Rio de Janeiro
                    </label>
                    <label>
                        <input type="checkbox" id="locale[]" name="locale[]" value="mato_grosso"> Mato Grosso
                    </label>
                </div>
                <div>
                    <h4>Tipos de Loja</h4>
                    <label>
                        <input type="checkbox" id="store_type[]" name="store_type[]" value="indicated"> Indicada
                    </label>
                    <label>
                        <input type="checkbox" id="store_type[]" name="store_type[]" value="verified"> Verificada
                    </label>
                    <label>
                        <input type="checkbox" id="store_type[]" name="store_type[]" value="most_sales"> Campeã de Vendas
                    </label>
                </div>
                <div>
                    <h4>Condições</h4>
                    <label>
                        <input type="checkbox" id="conditions[]" name="conditions[]" value="new"> Novo
                    </label>
                    <label>
                        <input type="checkbox" id="conditions[]" name="conditions[]" value="used"> Usado
                    </label>
                </div>
                <div>
                    <h4>Marcas</h4>
                    <label>
                        <input type="checkbox" id="brands[]" name="brands[]" value="handmade"> Própria / Artesanal
                    </label>
                    <label>
                        <input type="checkbox" id="brands[]" name="brands[]" value="apple"> Apple
                    </label>
                    <label>
                        <input type="checkbox" id="brands[]" name="brands[]" value="samsung"> Samsung
                    </label>
                    <label>
                        <input type="checkbox" id="brands[]" name="brands[]" value="xiaomi"> Xiaomi
                    </label>
                    <label>
                        <input type="checkbox" id="brands[]" name="brands[]" value="baseus"> Baseus
                    </label>
                </div>
                <div>
                    <h4>Faixa de preço</h4>
                    <div>
                        <div id="nouislider"></div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Pesquisar</button>
                </div>
            <div>
                <a href="#" class="btn">Limpar todos os filtros</a>
            </div>
        </aside>
        <main class="d-col-9 m-col-12">
            <div class="row">
                @foreach ($data as $product)
                    @include('components.card-produto', ['product' => $product])
                @endforeach
            </div>
            @include('components.banner-simples')
        </main>
    </div>
    </form>
</div>
<script>
var slider = document.getElementById('nouislider');
noUiSlider.create(slider, {
    start: [250, 750],
    step: 10,
    connect: true,
    tooltips: [
        wNumb({prefix: 'R$ ',thousand: '.',decimals: 2}),
        wNumb({prefix: 'R$ ',thousand: '.',decimals: 2}),
    ],
    range: {
        'min': 0,
        'max': 1000
    }
});  
</script>   