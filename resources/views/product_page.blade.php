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
    <link href="{{ asset('css/single-produto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/banner-simples.css') }}" rel="stylesheet">
    <link href="{{ asset('css/card-produto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/faq-wrap.css') }}" rel="stylesheet">
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
            @include('components.breadcrumbs', ['category' => Arr::get($selectedProduct, 'category')])
        </div>
    </section>
    <main>
        <article class="container single-produto">
            <div class="row">
                <div class="d-col-6 m-col-12">
                    <div class="produto-img-wrap">
                        <figure>
                            <img src="https://cdn.awsli.com.br/{{Arr::get($selectedProduct, 'feature_image')}}" />
                        </figure> 
                        <ul class="produto-img-gallery">
                            @foreach (Arr::get($selectedProduct, 'images') as $key => $image)
                                @if ($key == 0)
                                    <li class="ativo"><img src="https://cdn.awsli.com.br/{{$image}}" alt=""></li>
                                @endif
                                @if ($key != 0)
                                    <li><img src="https://cdn.awsli.com.br/{{$image}}" alt=""></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <div class="share-wrap">
                            <p><small>Compartilhe:</small></p>
                            <ul class="share-options">
                                <li>
                                    <a class="share-facebook" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M28 16C28 9.373 22.627 4 16 4C9.373 4 4 9.373 4 16C4 21.628 7.875 26.35 13.101 27.647V19.667H10.627V16H13.1V14.42C13.1 10.335 14.949 8.442 18.959 8.442C19.719 8.442 21.031 8.592 21.567 8.74V12.065C21.284 12.035 20.792 12.02 20.181 12.02C18.214 12.02 17.453 12.765 17.453 14.703V16H21.373L20.7 19.667H17.453V27.912C23.395 27.195 28 22.135 28 16Z" fill="white"/>
                                    </svg>
                                    </a>
                                </li>
                                <li><a class="share-whatsapp" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.21 4.41003C9.973 4.41003 4.917 9.46503 4.917 15.7C4.917 17.834 5.509 19.83 6.537 21.532L4.5 27.59L10.75 25.588C12.4212 26.5122 14.3003 26.9954 16.21 26.992C22.444 26.992 27.5 21.937 27.5 15.702C27.5 9.46503 22.444 4.41003 16.21 4.41003ZM16.21 25.1C14.3 25.1 12.52 24.53 11.037 23.547L7.427 24.703L8.6 21.213C7.4343 19.6118 6.80748 17.6816 6.81 15.701C6.81 10.521 11.027 6.30103 16.21 6.30103C21.393 6.30103 25.607 10.521 25.607 15.701C25.607 20.889 21.393 25.101 16.209 25.101L16.21 25.1ZM21.503 18.268C21.219 18.113 19.83 17.362 19.569 17.256C19.304 17.15 19.114 17.096 18.911 17.376C18.708 17.656 18.131 18.286 17.957 18.472C17.781 18.658 17.612 18.675 17.329 18.52C17.047 18.366 16.129 18.026 15.065 17.003C14.235 16.208 13.692 15.243 13.535 14.948C13.377 14.653 13.535 14.503 13.685 14.364C13.819 14.24 13.985 14.038 14.135 13.876C14.285 13.713 14.338 13.596 14.441 13.406C14.545 13.216 14.501 13.046 14.436 12.9C14.37 12.753 13.846 11.313 13.626 10.727C13.408 10.141 13.166 10.229 12.996 10.222C12.828 10.215 12.638 10.184 12.446 10.177C12.256 10.17 11.936 10.231 11.666 10.509C11.389 10.783 10.616 11.452 10.566 12.871C10.511 14.289 11.492 15.697 11.63 15.894C11.767 16.094 13.504 19.166 16.39 20.431C19.278 21.695 19.29 21.309 19.82 21.281C20.35 21.254 21.554 20.648 21.82 19.984C22.086 19.32 22.107 18.744 22.04 18.621C21.97 18.498 21.78 18.418 21.5 18.264L21.503 18.268Z" fill="white"/>
                                    </svg>
                                </a></li>
                                <li><a class="share-x" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="32" height="32" viewBox="0 0 512 512" fill="none"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" fill="#FFFFFF" /></svg>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-col-6 m-col-12">
                    <header>
                        <h1>{{Arr::get($selectedProduct, 'name')}}</h1>
                    </header>
                    <div class="row produto-tecnico">
                        <div class="d-col-6"><small>Código: <b>CV14-05-GTX-1050</b></small></div>
                        <div class="d-col-6 text-right"><small>Loja: <b>XingLing</b></small></div>
                    </div>
                    <div class="row produto-valores">
                        <div class="d-col-4 m-col-12">
                            <div><b>12x</b> de <b class="valor-parcelado">R$ 394,16</b></div>
                            <div class="valor">R$ {{Arr::get($selectedProduct, 'price')}}</div>
                            <div><small>R$ {{Arr::get($selectedProduct, 'price')}} via Boleto</small></div>
                        </div>
                    </div>
                    <div class="row produto-condicoes">
                        <div class="d-col-12 condicoes-msg">Aceitamos pagamento via PIX</div>
                    </div>
                    <form>
                        <div class="row produto-form">
                            <div class="d-col-2 m-col-6">
                                <input type="number" name="" value="1" step="1" min="1" max="10">
                            </div>
                            <div class="d-col-6">
                                <button class="btn-comprar">Comprar</button>
                            </div>
                        </div>
                    </form>
                    <div class="row no-padding"><small>Estoque: <b>55 unidades</b></small></div>
                    <div class="row produto-parcela-box">
                        <div class="d-col-12">
                            <details open>
                                <summary>Parcelas</summary>
                                
                                    <ul>
                                        <li><b>1x</b> de R$ 4.730,00 sem juros</li>
                                        <li><b>2x</b> de R$ 2.365,00 sem juros</li>
                                        <li><b>3x</b> de R$ 1.576,66 sem juros</li>
                                        <li><b>4x</b> de R$ 1.182,50 sem juros</li>
                                        <li><b>5x</b> de R$ 946,00 sem juros</li>
                                        <li><b>6x</b> de R$ 788,33 sem juros</li>
                                        <li><b>7x</b> de R$ 675,71 sem juros</li>
                                        <li><b>8x</b> de R$ 591,25 sem juros</li>
                                        <li><b>9x</b> de R$ 525,55 sem juros</li>
                                        <li><b>10x</b> de R$ 473,00 sem juros</li>
                                        <li><b>11x</b> de R$ 430,00 sem juros</li>
                                        <li><b>12x</b> de R$ 394,16 sem juros</li>
                                    </ul>
                                
                            </details>
                            <div class="produto-parcela-box-footer">
                            R$ 4.730,00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <section class="produto-faixa">
        <div class="container">
            <div class="row">
                <div class="d-col-4 m-col-12">
                    <h3>{{Arr::get($selectedProduct, 'product_nickname')}}</h3>
                </div>
                <div class="d-col-5  m-col-12">
                    <div class="row">
                        <div class="d-col-4 produto-valores">
                            <div>
                                <div><b>12x</b> de <b class="valor-parcelado">R$ 394,16</b></div>
                                <div class="valor">R$ 4.730,00</div>
                                <div><small>R$ 4.588,10 via Boleto</small></div>
                            </div>
                        </div>
                        <div class="d-col-6">
                            <button class="btn-comprar">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="produto-descricao">
                <h3>Informações Gerais</h3>
                    {{strip_tags(Arr::get($selectedProduct, 'full_description'))}}
            </div>
            <div class="produto-detalhes">
                <h3>Detalhes</h3>
                <ul>
                    <li>Rgb: sim</li>
                    <li>Overclocked: não</li>
                    <li>Tipo de refrigerador: Ventilador duplo</li>
                    <li>Características do produto: PhysX</li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row gap10">
                <div class="d-col-55 m-col-12">
                    <div class="banner-simples ciano">
                        <div class="d-col-12">
                            <h4 class="text-roxo">Conheça nosso Marketplace:</h4>
                            <p class="text-roxo">São mais de 5 mil itens <br /> escolhidos especialmente para você!</p>        
                            <div class="item-select">
                                <a href="#" class="text-roxo row-right">Conheça</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-col-55 m-col-12">
                    <div class="banner-simples">
                        <div class="d-col-12">
                            <h4>Lideres de vendas</h4>
                            <p>Fizemos uma seleção dos  <br />itens mais vendidos em nosso site. Conheça já!</p>   
                            <div class="item-select">     
                                <a href="#" class="text-branco row-right">Conheça</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2 class="produto-h2">Produtos Relacionados</h2>
            <div class="row gap10">
                @foreach ($data as $product)
                    @include('components.card-produto', ['product' => $product])
                @endforeach
            </div>
        </div>
    </section>
    <section class="padrao ciano text-branco">
        <div class="container">
            <div class="row align-items-center">
                <div class="d-col-6 m-col-12 padding-h-20 ">
                    <p class="small text-verde">Como vender</p>        
                    <h3 class="text-roxo bold-me">Quer vender <br /> conosco? Saiba <br /> como e onde!</h3>                   
                </div>
                <div class="d-col-6 m-col-12">
                    <div class="row">
                        <div class="d-col-4 m-col-12">
                            <div class="item-select">     
                                <a href="#" class="text-roxo row-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                        <path d="M27.0469 14V6.667C27.047 6.31673 26.9781 5.96986 26.8441 5.64623C26.7101 5.32259 26.5137 5.02853 26.266 4.78085C26.0183 4.53317 25.7243 4.33673 25.4006 4.20275C25.077 4.06876 24.7301 3.99987 24.3799 4H7.04685C6.69658 3.99987 6.34971 4.06876 6.02608 4.20275C5.70244 4.33673 5.40838 4.53317 5.1607 4.78085C4.91302 5.02853 4.71658 5.32259 4.5826 5.64623C4.44861 5.96986 4.37972 6.31673 4.37985 6.667V20M4.37985 20C3.64385 20 3.04785 20.597 3.04785 21.333V22.667C3.04812 23.0205 3.18864 23.3594 3.43857 23.6093C3.6885 23.8592 4.0274 23.9997 4.38085 24H20.3809M4.37985 20H20.3809" stroke="#2BC4C3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M28.3799 28H21.7129C21.3594 27.9997 21.0205 27.8592 20.7706 27.6093C20.5207 27.3594 20.3801 27.0205 20.3799 26.667V15.333C20.3799 14.597 20.9769 14 21.7129 14H28.3799C29.1159 14 29.7129 14.597 29.7129 15.333V26.667C29.7129 27.403 29.1159 28 28.3799 28Z" stroke="#371E56" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20.3799 24H29.7129" stroke="#371E56" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <b>Marketplace LI</b>
                                </a>
                            </div>
                        </div>
                        <div class="d-col-4 m-col-12">
                            <div class="item-select">     
                                <a href="#" class="text-roxo row-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                        <path d="M7.57666 9.33301V22.666M26.2447 12V9.33301" stroke="#2BC4C3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M8.90967 28H6.24267C5.88922 27.9997 5.55032 27.8592 5.30039 27.6093C5.05046 27.3593 4.90993 27.0204 4.90967 26.667V24C4.90967 23.264 5.50667 22.667 6.24267 22.667H8.90967C9.64567 22.667 10.2427 23.264 10.2427 24V26.667C10.2427 27.403 9.64567 28 8.90967 28Z" stroke="#2BC4C3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M8.90967 28H6.24267C5.88922 27.9997 5.55032 27.8592 5.30039 27.6093C5.05046 27.3594 4.90993 27.0205 4.90967 26.667V24C4.90967 23.264 5.50667 22.667 6.24267 22.667H8.90967C9.64567 22.667 10.2427 23.264 10.2427 24V26.667C10.2427 27.403 9.64567 28 8.90967 28ZM27.5777 9.333H24.9107C24.5572 9.33274 24.2183 9.19221 23.9684 8.94228C23.7185 8.69235 23.5779 8.35345 23.5777 8V5.333C23.5777 4.597 24.1747 4 24.9107 4H27.5777C28.3137 4 28.9107 4.597 28.9107 5.333V8C28.9107 8.736 28.3137 9.333 27.5777 9.333ZM8.90967 9.333H6.24267C5.88922 9.33274 5.55032 9.19221 5.30039 8.94228C5.05046 8.69235 4.90993 8.35345 4.90967 8V5.333C4.90967 4.597 5.50667 4 6.24267 4H8.90967C9.64567 4 10.2427 4.597 10.2427 5.333V8C10.2427 8.736 9.64567 9.333 8.90967 9.333Z" stroke="#2BC4C3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M8.90967 9.333H6.24267C5.88922 9.33274 5.55032 9.19221 5.30039 8.94228C5.05046 8.69235 4.90993 8.35345 4.90967 8V5.333C4.90967 4.597 5.50667 4 6.24267 4H8.90967C9.64567 4 10.2427 4.597 10.2427 5.333V8C10.2427 8.736 9.64567 9.333 8.90967 9.333Z" stroke="#2BC4C3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10.2417 25.334H14.2417M23.5747 6.66699H10.2417" stroke="#2BC4C3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M19.5776 28H23.3476L29.8536 21.495C29.9777 21.3713 30.0761 21.2243 30.1432 21.0625C30.2103 20.9007 30.2449 20.7272 30.2449 20.552C30.2449 20.3768 30.2103 20.2034 30.1432 20.0416C30.0761 19.8797 29.9777 19.7328 29.8536 19.609L27.9686 17.724C27.8449 17.6 27.6979 17.5016 27.5361 17.4345C27.3743 17.3673 27.2008 17.3328 27.0256 17.3328C26.8504 17.3328 26.677 17.3673 26.5152 17.4345C26.3533 17.5016 26.2064 17.6 26.0826 17.724L19.5776 24.229V28Z" stroke="#371E56" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <b>Loja de Parceiros</b>
                                </a>
                            </div>
                        </div>
                        <div class="d-col-4 m-col-12">
                            <div class="item-select">     
                                <a href="#" class="text-roxo row-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                        <path d="M13.7119 5.33301V7.73301C13.7119 8.17401 14.0109 8.53301 14.3789 8.53301H18.3789C18.7469 8.53301 19.0449 8.17401 19.0449 7.73301V5.33301" stroke="#2BC4C3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.8838 23.333H17.8708" stroke="#371E56" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12.3789 5.33301H20.3789C20.7291 5.33301 21.0759 5.402 21.3994 5.53604C21.7229 5.67008 22.0168 5.86655 22.2644 6.11421C22.512 6.36188 22.7083 6.6559 22.8423 6.97947C22.9762 7.30304 23.045 7.64982 23.0449 8.00001V24C23.0449 24.7069 22.7642 25.3849 22.2644 25.8848C21.7647 26.3847 21.0868 26.6657 20.3799 26.666H12.3799C12.0296 26.6663 11.6828 26.5975 11.3591 26.4636C11.0354 26.3298 10.7412 26.1334 10.4935 25.8859C10.2457 25.6383 10.0491 25.3443 9.91504 25.0207C9.78094 24.6971 9.71191 24.3503 9.71191 24V8.00001C9.71178 7.64974 9.78068 7.30287 9.91466 6.97924C10.0486 6.6556 10.2451 6.36154 10.4928 6.11386C10.7404 5.86618 11.0345 5.66974 11.3581 5.53575C11.6818 5.40177 12.0286 5.33288 12.3789 5.33301Z" stroke="#2BC4C3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <b>Aplicativo MKT LI</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padrao text-roxo">
        <div class="container">
            <!-- @include('components.faq') -->
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

    <!-- @include('components.footer') -->
    <script defer src="js/script.js?ver=003"></script>
</body>
</html>