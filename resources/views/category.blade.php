<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, follow">
    <link href="{{ asset('css/styleguide.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider-categorias.css') }}" rel="stylesheet">
    <link href="{{ asset('css/breadcrumbs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/grid-produtos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/card-produto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/banner-simples.css') }}" rel="stylesheet">
    <link href="{{ asset('css/faq-wrap.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>


    <link href="//cdn.bootcss.com/noUiSlider/8.5.1/nouislider.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/noUiSlider/8.5.1/nouislider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/wnumb@1.2.0/wNumb.min.js"></script>
</head>
<body>
    @include('components.header')
    <section>
        <div class="container">
            @include('components.slider-categorias')
        </div>
    </section>
    <section>
        <div class="container">
            @include('components.grid-produtos', ['data' => $data, 'category' => $category, 'category_id' => $category_id])
        </div>
    </section>
    <section class="padrao verde text-branco">
        <div class="container">
            <div class="row justify-end">
                <div class="d-col-9 m-col-12 padding-h-20">
                    <p class="no-margin">Tudo que você precisa saber sobre:</p>
                    <h2 class="text-branco">{{$category}}</h2>
                    <p>Lorem ipsum dolor sit amet consectetur. Dignissim varius iaculis dis egestas sed enim ac. Fermentum et mauris leo diam. Integer accumsan sit ultrices id quisque sollicitudin maecenas tristique. Ultricies orci auctor volutpat lacus facilisi amet. </p>
                    <p>Eget mauris mattis amet aliquet nam adipiscing. Turpis scelerisque purus curabitur facilisis iaculis gravida vestibulum. Pulvinar morbi aenean magna diam.</p>
                    <p>Nam commodo cras varius pretium sit non. Dui vel justo malesuada tristique volutpat. Porttitor molestie in a tristique risus vitae sagittis. A turpis faucibus id in. Risus est neque euismod odio massa. Parturient arcu adipiscing id ultrices ut ipsum adipiscing id. Dictumst nisi dis eu massa tellus in. Sit lectus tristique metus ultrices egestas vulputate leo.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="padrao text-roxo">
        <div class="container">
            @include('components.faq')
        </div>
    </section>
    <section class="padrao roxo text-branco">
        <div class="container">
            <div class="row align-items-center">
                <div class="d-col-6 m-col-12 padding-h-20 ">
                    <p class="small text-dourado">Quer aparecer aqui também?</p>        
                    <h3 class="text-branco">Venha ser uma <br /> empresa parceira</h3>
                    <a href="" class="btn verde">Seja empresa parceira</a>
                    <p class="small text-branco">Comece a vender para novos clientes 😉</p>                           
                </div>
                <div class="d-col-6 m-col-12">
                    <div class="row">
                        <div class="d-col-6 padding-h-20 ">
                            <img src="{{url('/')}}/img/icon-certificado.svg">
                            <p>Ganhe certificado e prêmio como uma das nossas melhores parcerias.</p>
                        </div>
                        <div class="d-col-6 padding-h-20 ">
                            <img src="{{url('/')}}/img/icon-conectado.svg">
                            <p>Te conectamos a uma base de centenas de possíveis clientes.</p>
                        </div>
                        <div class="d-col-6 padding-h-20 ">
                            <img src="{{url('/')}}/img/icon-escale.svg">
                            <p>Escale seus serviços. Vire uma empresa de tecnologia.</p>
                        </div>
                        <div class="d-col-6 padding-h-20 ">
                            <img src="{{url('/')}}/img/icon-divulgado.svg">
                            <p>Divulgue sua solução em nossos canais digitais e em eventos como empresa parceira.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.footer')
    <script defer src="js/script.js?ver=003"></script>
</body>
</html>