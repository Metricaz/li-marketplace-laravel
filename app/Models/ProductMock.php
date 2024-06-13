<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ProductMock
{
    public function returnData() {
        return collect([
            [
                "sku" => "haylou-watch-rs5-smartwatch-201",
                "name" => "HAYLOU Watch RS5 Smartwatch 2.01''",
                "price" => "222,22",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "",
                "category_id" => "",
                "product_nickname" => "",
                "full_description" => "Teste teste teste1",
                "feature_image" => "310x374/1935/1935748/produto/134973562/138d987a09.jpg",
                "images" => [
                    "762/762447/produto/30360314/fe08cb1935.jpg",
                ],
                "locale" => "sao_paulo",
            ],
            [
                "sku" => "haylou-watch-rs5-smartwatch-202",
                "name" => "HAYLOU Watch RS5 Smartwatch 2.02''",
                "price" => "222,22",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "",
                "category_id" => "",
                "product_nickname" => "",
                "full_description" => "Teste teste teste2",
                "feature_image" => "310x374/1935/1935748/produto/134973562/138d987a09.jpg",
                "images" => [
                    "762/762447/produto/30360314/fe08cb1935.jpg",
                ],
                "locale" => "rio_grande_do_sul",
            ],
            [
                "sku" => "haylou-watch-rs5-smartwatch-203",
                "name" => "HAYLOU Watch RS5 Smartwatch 2.03''",
                "price" => "222,22",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "",
                "category_id" => "",
                "product_nickname" => "",
                "full_description" => "Teste teste teste3",
                "feature_image" => "310x374/1935/1935748/produto/134973562/138d987a09.jpg",
                "images" => [
                ],
                "locale" => "rio_de_janeiro",
            ],
            [
                "id" => "37708029",
                "sku" => "R2ZCPNWCE",
                "name" => "Vestido em couro ecológico",
                "price" => "54,00",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "",
                "category_id" => "",
                "product_nickname" => "",
                "full_description" => "Vestido de couro ecológico no tamanho M.",
                "feature_image" => "646/646967/produto/37708029/e92ad36ab5.jpg",
                "images" => [
                ],
                "locale" => "mato_grosso",
            ],
            [
                "sku" => "haylou-watch-rs5-smartwatch-203",
                "name" => "HAYLOU Watch RS5 Smartwatch 2.03''",
                "price" => "222,22",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "",
                "category_id" => "",
                "product_nickname" => "",
                "full_description" => "Teste teste teste3",
                "feature_image" => "310x374/1935/1935748/produto/134973562/138d987a09.jpg",
                "images" => [
                ],
                "locale" => "sao_paulo",
            ],
            [
                "sku" => "haylou-watch-rs5-smartwatch-203",
                "name" => "HAYLOU Watch RS5 Smartwatch 2.03''",
                "price" => "222,22",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "",
                "category_id" => "",
                "product_nickname" => "",
                "full_description" => "Teste teste teste3",
                "feature_image" => "310x374/1935/1935748/produto/134973562/138d987a09.jpg",
                "images" => [
                ],
                "locale" => "rio_grande_do_sul",
            ],
            [
                "id" => "30360314",
                "sku" => "2AH8SGQME",
                "name" => "Kit Atacado 10 Peças Sortidas",
                "price" => "54,00",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "",
                "category_id" => "",
                "product_nickname" => "",
                "full_description" => "Kit Atacado 10 Peças Sortidas",
                "feature_image" => "762/762447/produto/30360314/cd3963a510.jpg",
                "images" => [
                    "762/762447/produto/30360314/fe08cb1935.jpg",
                    "762/762447/produto/30360314/fe08cb1935.jpg",
                    "762/762447/produto/30360314/fe08cb1935.jpg",
                    "762/762447/produto/30360314/fe08cb1935.jpg",
                    "762/762447/produto/30360314/fe08cb1935.jpg",
                    "762/762447/produto/30360314/fe08cb1935.jpg",
                    "762/762447/produto/30360314/fe08cb1935.jpg",
                    "762/762447/produto/30360314/fe08cb1935.jpg",
                    "762/762447/produto/30360314/fe08cb1935.jpg",
                    "1000/1000519/produto/147227740/b22063c978.jpg",
                ],
                "locale" => "sao_paulo",
            ],
            [
                "id" => "80520802",
                "sku" => "PFLKZ4BL9",
                "name" => "Kit Cozinha Tesoura Trinchante + Faca Aço Inox",
                "price" => "35",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Eletrônicos",
                "category_id" => "123",
                "product_nickname" => "kit-cozinha-tesoura-trinchante-faca-aco-inox",
                "full_description" => '<div dir="auto" style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;">Praticidade e beleza para facilitar as atividades no dia-a-dia da casa.</div>

<div dir="auto" style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;">- Uso: Profissional / Doméstico</div>

<div dir="auto" style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;">- Lâmina: Aço inox.</div>

<div dir="auto" style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;">- Material: Aço Inox e Plástico</div>

<div dir="auto" style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;">Composição de cada kit:</div>

<div dir="auto" style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;">- 1 Tesoura</div>

<div dir="auto" style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;">- 1 Faca</div>

<div dir="auto" style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small;">- 1 Protetor para faca</div>
',
                "feature_image" => "434/434332/produto/80520802/89a99ae266.jpg",
                "images" => [
                    "434/434332/produto/80520802/63b692faff.jpg",
                ],
                "locale" => "rio_grande_do_sul",
            ],
            [
                "id" => "11674365",
                "sku" => "LPL4U8SFG",
                "name" => "BT Spears",
                "price" => "50",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Eletrônicos",
                "category_id" => "123",
                "product_nickname" => "bt-spears",
                "full_description" => '<p>* Entradas: USB, Micro SD, Auxiliar (P2);<br />
* Suporta MP3 e VMA;<br />
* Funciona com qualquer aparelho Bluetooth:<br />
- Celular<br />
- Ipod<br />
- Ipad<br />
- Tablets<br />
- Notebooks<br />
- PCs<br />
* Bateria interna (não removível);<br />
* Voltagem de carga: 5v;<br />
* Pode ser carregado via USB (PC, Note);<br />
* Suporta Cartão micro SD (32Gb);<br />
* Tempo de bateria: 3 - 5 horas;<br />
* Acompanha cabo USB / mini USB;<br />
* Distância de transmissão : 10 metros;</p>

<p>* Potência de saída: RMS 3 W;</p>

<p>* Fonte de alimentação: bateria;</p>

<p>* Tensão de carregamento: 5 V .</p>

<p>Dimensão e peso:</p>

<p>Peso do produto: 254 g.</p>

<p>Peso da embalagem: 0,522 kg.</p>

<p>Tamanho do produto (l x W x h): 18,5x4,5x4,5 centímetros.</p>

<p>Tamanho do pacote (l x W x h): 22,1x9,5x7,3 centímetros.</p>
',
                "feature_image" => "48/48496/produto/11674365/6259ba84dd.jpg",
                "images" => [
                    "48/48496/produto/11674365/82d1e13d36.jpg",
                    "48/48496/produto/11674365/2698da216a.jpg",
                    "48/48496/produto/11674365/2698da216a.jpg",
                    "48/48496/produto/11674365/11a0a3c088.jpg",
                ],
                "locale" => "rio_de_janeiro",
            ],
            [
                "id" => "93472840",
                "sku" => "1400",
                "name" => "Controle Remoto Musical Buba",
                "price" => "60",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Eletrônicos",
                "category_id" => "123",
                "product_nickname" => "controle-remoto-musical-buba",
                "full_description" => '<p><span style="font-family:comic sans ms,cursive;"><font size="2">Na Amora Amor você encontra o Controle Remoto Musical da Buba que é diversão pura. Possui diversas músicas, sons de discagem e efeitos sonoros, ideais para desenvolver os sentidos dos pequenos. Ao apertar as teclas, a luz se acende e deixa a brincadeira ainda mais divertida. </font></span></p>
',
                "feature_image" => "994/994560/produto/93472840/5b65907eed.jpg",
                "images" => [
                    "994/994560/produto/93472840/41d6f24e41.jpg",
                ],
                "locale" => "mato_grosso",
            ],
            [
                "id" => "66248541",
                "sku" => "XZLQY3G64",
                "name" => "Microfone Com Fio Dinâmico Para uso em aplicações de áudio em geral ",
                "price" => "60",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Eletrônicos",
                "category_id" => "123",
                "product_nickname" => "microfone-com-fio-dinamico-para-uso-em-aplicacoes-de-audio-em-geral",
                "full_description" => '
Um produto compacto e eficaz, esse microfone se destaca por sua versatilidade e adaptação.
Ideal para Igrejas, Cultos, Aulas, Palestras, Karaokê.
- Microfone Dinâmico
- Unidirecional
- Excelente captação de áudio
- Comprimento do cabo: 1 metro (Plug P10)
- Impedância: 600 Ohms
- Cor: Preto
- Chave liga /desliga
- Dimensões Produto: (C) 4 x (L) 4 x (A) 17. cm
- Dimensões caixa: (C) 8 x (L) 18,2 x (A) 4,8. cm
Também Dispomos de Outros Modelos - Consulte!!!!',
                "feature_image" => "434/434332/produto/66248541/98584b5653.jpg",
                "images" => [
                    "434/434332/produto/66248541/cd4404e607.jpg",
                ],
                "locale" => "sao_paulo",
            ],
            [
                "id" => "20224478",
                "sku" => "YXUUDRN6K",
                "name" => "Adaptador Áudio Receptor Música Bluetooth P2",
                "price" => "40",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Eletrônicos",
                "category_id" => "123",
                "product_nickname" => "adaptador-audio-receptor-musica-bluetooth-p2",
                "full_description" => '<p><strong><span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 19.32px;">Possível parear qualquer dispoisitivo de áudio com saida Bluetooth</span><br style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 19.32px;" />
<span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 19.32px;">Prático e fácil, possui tamanho compacto, perfeito para leva-lo sempre em sua bolsa ou até mesmo deixar em seu carro</span><br style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 19.32px;" />
<span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 19.32px;">Envie suas músicas do celular para seu som automotivo, caixa de som, entre outros,</span><br style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 19.32px;" />
<span style="color: rgb(29, 33, 41); font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 19.32px;">O áudio devera ser ligado na entrada P2 e o USB é somente para alimentação do receptor</span><br />
<span class="text_exposed_show" style="display: inline; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px; line-height: 19.32px;">Alcance de até 10 metros</span></strong><br />
 </p>
',
                "feature_image" => "434/434332/produto/20224478/9d897c1f6d.jpg",
                "images" => [
                    "434/434332/produto/20224478/ec2e479ce2.jpg",
                    "434/434332/produto/20224478/36646566ab.jpg",
                    "434/434332/produto/20224478/93bc85960a.jpg",
                ],
                "locale" => "rio_grande_do_sul",
            ],
            [
                "id" => "66247910",
                "sku" => "AVKFMY463",
                "name" => "JOGO CHAVE CATRACA 40 PEÇAS ",
                "price" => "90",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Eletrônicos",
                "category_id" => "123",
                "product_nickname" => "jogo-chave-catraca-40-pecas",
                "full_description" => '<p>Utilizados juntamente com um acessório, os soquetes foram projetados para apertar e afrouxar parafusos de diferentes bitolas. Não podem faltar na sua caixa de ferramentas. Contém: 1- Peça - 3/8¨Chave Reversível 14 - Peças - 1/4¨ Soquetes de Encaixe: 4, 4.5, 5, 5.5,6, 6.5, 7, 7.5, 8, 9,10, 11, 12, 13mm 14 - Peças - 1/4¨Soquetes de Encaixe: 5/32, 3/16, 7/32, 1/4, 9/32, 5/16, 11/32, 3/8, 13/32, 7/16, 15/32, 1/2, 17/32, 9/16¨ 3 - Peças - 1/4¨Soquetes de Encaixe (BPT): 1/4, 5/16, 3/8¨ 1 - Peça - 3/8¨ Barra Extensora 3¨ 1 - Peça - 1/4 3/8¨ Adaptador 1 - Peça - 3/8¨ Vela de Ignição 21mm 1 - Peça - 6¨ Punho 2 - Peças - 3/8¨ Soquetes de Encaixe: 15mm 16mm 1 - Caixa de Plastico para transporte</p>
',
                "feature_image" => "434/434332/produto/66247910/2634b0defb.jpg",
                "images" => [
                    "434/434332/produto/66247910/88bef11559.jpg"
                ],
                "locale" => "rio_de_janeiro",
            ],
            [
                "id" => "221131787",
                "sku" => "1889",
                "name" => "Telefone Divertido Musical",
                "price" => "119.8",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Eletrônicos",
                "category_id" => "123",
                "product_nickname" => "telefone-divertido-musical",
                "full_description" => '<p><br />
<font face="Tahoma" size="2">Músicas, números em inglês e sons diversos.<br />
<br />
<br />
Nome do produto: bebê telefone móvel brinquedo música sirene<br />
Materiais: ABS<br />
Bateria: 3 pilhas AAA (Nota: não incluído no pacote)<br />
Tamanho: 8*14*3cm<br />
Pacote incluído:<br />
1 brinquedo do telefone celular do bebê (bateria não incluída)</font></p>
',
                "feature_image" => "994/994560/produto/221131787/whatsapp-image-2-d2th058gzy.jpeg",
                "images" => [
                    "994/994560/produto/221131787/whatsapp-image-2-qva9vzu5ym.jpeg",
                    "994/994560/produto/221131787/whatsapp-image-2-hy9p9jw2da.jpeg",
                    "994/994560/produto/221131787/whatsapp-image-2-3hu8eesqyd.jpeg",
                    "994/994560/produto/221131787/whatsapp-image-2-ygywv9d1hk.jpeg",
                    "994/994560/produto/221131787/whatsapp-image-2-cmvrodneb0.jpeg",
                ],
                "locale" => "mato_grosso",
            ],
            [
                "id" => "134360992",
                "sku" => "Y7XBCTY7C",
                "name" => "macbook",
                "price" => "119.8",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Eletrônicos",
                "category_id" => "123",
                "product_nickname" => "macbook",
                "full_description" => '<p><span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Aviso:</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">1. o idioma do teclado é teclado inglês, mas vamos dar o russo, espanhol, francês, alemão, italiano, filme de teclado árabe</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">2. os preços nos países da ue incluem impostos. Não há nenhum imposto sobre a entrega da espanha e da rússia, e imposto sobre a entrega da china. Outros países mostram que o preço não inclui impostos, e os clientes precisam pagar seus próprios impostos.</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">3. nós temos três tipos: plugues americanos, plugues britânicos e plugues da ue. Nós enviaremos os plugues de acordo com seu país. Se você tem necessidades especiais, por favor nos deixe uma mensagem.</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">4. recomendamos que os clientes gravem um vídeo ao abrir o pacote. Esta é uma evidência importante de se o pacote foi danificado pela companhia de navegação.</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Descrever</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Cpu: intel celeron n5095 (4 núcleos)</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Tamanho: 15.6 polegadas</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Sistema: Windows 10</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Memória: 8g + 128g/12g + 256g/12g + 512g</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Placa gráfica: ntel uuhd 600</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Câmera: 0.3MP</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Bluetooth: 4.0</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Resolução da tela: 1920 * 1080px</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Capacidade da bateria: 37000mwh.</span><br style="box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px; color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" />
<span style="color: rgb(0, 0, 0); font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 300; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Peso: cerca de 1.5kg.</span></p>
',
                "feature_image" => "2214/2214320/produto/134360992/0b2c667938.jpg",
                "images" => [
                ],
                "locale" => "sao_paulo",
            ],
            [
                "id" => "105272961",
                "sku" => "19",
                "name" => "Carregador Portatil Power Bank 10000mAh",
                "price" => "1965.04",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Eletrônicos",
                "category_id" => "123",
                "product_nickname" => "carregador-portatil-power-bank-10000mah",
                "full_description" => '<p>Funções: </p>

<p>📎Mantenha seus dispositivos carregados sem precisar ficar conectado a uma tomada.<br />
📎Possui cabo já embutido, e entrada USB adicional, permitindo a carga de mais de um dispositivo<br />
ao mesmo tempo.<br />
📎 Tempo de carregamento do Power Bank: 5-7 horas. DURANDO ATÉ 04 CARGAS NO CELULAR!!!<br />
📎Compatível para qualquer telefone, tablet, MP3, MP4, PSP, GPS, dispositivo de jogos, câmera e muitos mais 💡.</p>
',
                "feature_image" => "1966/1966787/produto/105272961/cba11f9244.jpg",
                "images" => [
                    "1966/1966787/produto/105272961/5715031405.jpg",
                    "1966/1966787/produto/105272961/2b64734cc7.jpg",
                    "1966/1966787/produto/105272961/f338f766af.jpg",
                ],
                "locale" => "rio_grande_do_sul",
            ],
            [
                "id" => "119941997",
                "sku" => "1497",
                "name" => "Cacto Dançante",
                "price" => "60",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Eletrônicos",
                "category_id" => "123",
                "product_nickname" => "cacto-dancante",
                "full_description" => '<p><span style="font-family:comic sans ms,cursive;"><font size="2">Na Amora Amor você encontra o Cacto Dançante que ajuda a entreter as crianças, facilita a vida das mamães e deixa a sua decoração ainda mais bonita! É ideal para presentear os pequenos, estimular o desenvolvimento cognitivo e a criatividade.<br />
Desenvolvido para executar, dançar, cantar e repetir as falas do seu filho, ele é um verdadeiro brinquedo educativo, perfeito para trabalhar as habilidades de fala do seu bebê e trazer benefícios para a saúde da criança, desde o alívio do estresse até o despertar da curiosidade.<br />
* Toca música;<br />
* Dança;<br />
* Adicional com luz e repetidor de voz.</font></span><br />
<br />
<span style="font-family:arial,helvetica,sans-serif;"><font size="2">OBS: A AMORA AMOR NÃO SE RESPONSABILIZA PELO CONTEÚDO INCLUSO NAS MÚSICAS. FICA NA DECISÃO DOS PAPAIS ESCOLHEREM O QUE É DE MELHOR PARA SEU FILHO.</font></span></p>
',
                "feature_image" => "994/994560/produto/119941997/de73070c36.jpg",
                "images" => [
                    "994/994560/produto/119941997/c0e4b0ee47.jpg",
                ],
                "locale" => "mato_grosso",
            ],
            [
                "id" => "4690349",
                "sku" => "1890-m",
                "name" => "1890-m",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Acessórios",
                "category_id" => "3",
                "product_nickname" => "-2015-08-06-09-23-15",
                "full_description" => Null,
                "feature_image" => "",
                "images" => [
                    "1000/1000519/produto/147227740/b22063c978.jpg",
                ],
                "locale" => "sao_paulo",
            ],
            [
                "id" => "12559318",
                "sku" => "LMN1400200",
                "name" => "Mochila para Notebook Local Motion Cinza LMN1400200",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Acessórios",
                "category_id" => "3",
                "product_nickname" => "mochila-para-notebook-local-motion-cinza-lmn1400200",
                "full_description" => '<p><span style="font-size:14px;">Para quem gosta de praticidade e estilo, a <strong>Mochila para Notebook LOCAL MOTION</strong> <strong>LNM1400200</strong> oferece um amplo espaço com divisórias para garantir a organização dos seus pertences. Além disso, o acessório traz puxadores alongados e zíperes duplos para proporcionar mais facilidade na abertura e no manuseio.<br />
O design também garante o logo da marca em destaque, conferindo mais qualidade ao produto. </span></p>

<p><span style="font-size:14px;"><strong>Características:</strong><br />
- Material: Em 100% poliéster<br />
- Alças: Uma manual e duas traseiras reguláveis e acolchoadas;<br />
- Parte traseira com espumas localizadas para ventilação e <strong>saída para o fone de ouvido</strong>;<br />
- Compartimentos: Principal amplo com divisória interna para seu notebook; 2 bolsos frontais externo com painel organizacional para o transporte de pequenos objetos; 2 bolsos laterais com zíperes, um bolso lateral com redinha<br />
- Compartimento principal com zíper duplo que amplia a abertura e facilita o acesso aos pertences;<br />
- Puxadores personalizados e alongados que facilitam o manuseio dos zíperes;</span></p>

<p><span style="font-size:14px;"><strong>Tamanho/Peso:</strong><br />
- Largura: 33cm <br />
- Altura: 49cm <br />
- Profundidade: 21cm <br />
- Peso: 1,070Kg</span></p>

<p> </p>
',
                "feature_image" => "378/378962/produto/12559318/460f90df6c.jpg",
                "images" => [
                    "378/378962/produto/12559318/f6b27b4721.jpg",
                    "378/378962/produto/12559318/c05d9dd721.jpg",
                    "378/378962/produto/12559318/ce166f1d94.jpg",
                    "378/378962/produto/12559318/c3b1af66bd.jpg",
                    "378/378962/produto/12559318/a1d751354c.jpg",
                    "378/378962/produto/12559318/b163ef3967.jpg",
                    "378/378962/produto/12559318/974cb1066b.jpg",
                ],
                "locale" => "sao_paulo",
            ],
            [
                "id" => "6834799",
                "sku" => "XSAPLSF8U-pijama-branco-florzinha",
                "name" => "XSAPLSF8U-pijama-branco-florzinha",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Acessórios",
                "category_id" => "3",
                "product_nickname" => Null,
                "full_description" => Null,
                "feature_image" => "",
                "images" => [
                    "1000/1000519/produto/147227740/b22063c978.jpg",
                ],
                "locale" => "rio_grande_do_sul",
            ],
            [
                "id" => "6835052",
                "sku" => "DWJMZMD9P",
                "name" => "Brincos",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Acessórios",
                "category_id" => "3",
                "product_nickname" => "b",
                "full_description" => Null,
                "feature_image" => "238/238395/produto/6835052/d7bfe3314c.jpg",
                "images" => [
                ],
                "locale" => "rio_de_janeiro",
            ],
            [
                "id" => "6835721",
                "sku" => "UGGWWCLQ8",
                "name" => "Pulseira folheada a ouro, contendo vários adereços em acrílico, na cores branco, preto e dourado. ",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "",
                "category_id" => "3",
                "product_nickname" => "pulseira-folheada-a-ouro-contendo-varios-aderecos-em-acrilico-na-cores-branco-preto-e-dourado",
                "full_description" => '<p style="line-height: 20.8px; text-align: center;"><span style="font-size:20px;"><span style="font-family:times new roman,times,serif;"><span style="color:#000080;"><strong>OFERTA POR TEMPO LIMITADO.</strong></span></span></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-size: 16px;"><span style="font-family: \'times new roman\', times, serif;"><span style="color: rgb(255, 0, 0);"><strong>Todos os produtos, por enquanto, são adquiridos online. Fornecemos direto da fábrica.</strong></span></span></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-size: 16px;"><span style="font-family: \'times new roman\', times, serif;"><span style="color: rgb(255, 0, 0);"><strong>Para lojistas e revendedores os produtos tem um descontão especial.</strong></span></span></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-size: 16px;"><span style="font-family: \'times new roman\', times, serif;"><span style="color: rgb(255, 0, 0);"><strong>Disponibilizamos o link direto por produto, e o link que direto a loja da Imagem Folheados.</strong></span></span></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-size: 16px;"><span style="font-family: \'times new roman\', times, serif;"><span style="color: rgb(255, 0, 0);"><strong>É muito importante ler a descrição do produto interessado para não haver nenhum mal entendido.</strong></span></span></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-size: 16px;"><span style="font-family: \'times new roman\', times, serif;"><span style="color: rgb(255, 0, 0);"><strong>Link direto para o produto:</strong></span></span></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-size:16px;"><span style="font-family:times new roman,times,serif;"><strong><a href="http://bit.ly/1W0ktnL"><span style="color:#0000CD;">http://bit.ly/1W0ktnL</span></a></strong></span></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-size: 16px;"><span style="font-family: \'times new roman\', times, serif;"><span style="color: rgb(255, 0, 0);"><strong>Link direto para a loja:</strong></span></span></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-size: 16px;"><span style="font-family: \'times new roman\', times, serif;"><strong><a href="http://bit.ly/grpif2"><span style="color: rgb(0, 0, 205);">http://bit.ly/grpif2</span></a></strong></span></span></p>

<p style="line-height: 20.8px; text-align: center;"><span style="font-size: 16px;"><span style="font-family: \'times new roman\', times, serif;"><span style="color: rgb(255, 0, 0);"><strong>A Imagem Folheados agradece o interesse pelos nossos produtos.</strong></span></span></span></p>
',
                "feature_image" => "",
                "images" => [
                    "1000/1000519/produto/147227740/b22063c978.jpg",
                ],
                "locale" => "mato_grosso",
            ],
            [
                "id" => "6410565",
                "sku" => "DGZLAGMSP",
                "name" => "Silicone gel 200gr",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Acessórios",
                "category_id" => "3",
                "product_nickname" => "silicone-gel-200gr",
                "full_description" => '<p>*FOTO MERAMENTE ILUSTRATIVA*</p>
',
                "feature_image" => "215/215653/produto/6410565/02e0f2ecc6.jpg",
                "images" => [
                ],
                "locale" => "sao_paulo",
            ],
            [
                "id" => "12559284",
                "sku" => "NHQ75WMW5",
                "name" => "Manta Premium Comfort Line com Pelúcia - Full Horse",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Acessórios",
                "category_id" => "3",
                "product_nickname" => "manta-premium-comfort-line-com-pelucia-full-horse-2016-09-08-21-50-26",
                "full_description" => '<p><span style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-size: 12px; line-height: normal; font-family: Arial; text-align: justify;">Manta Full Horse modelo Premium Comfort Line para selas de laço com estampa lisa, fabricada artesanalmente com reforço em couro nas laterais e parte interna de espuma com revestimento em pelúcia. Esta manta foi produzida utilizando tecnologias terapêuticas veterinárias específicas, proporcionando sensação de relaxamento e conforto ao animal.</span><br style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-size: 12px; line-height: normal; border: 0px; outline: none; list-style: none; font-family: Arial; text-align: justify;" />
<br style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-size: 12px; line-height: normal; border: 0px; outline: none; list-style: none; font-family: Arial; text-align: justify;" />
<b style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-size: 12px; line-height: normal; border: 0px; outline: none; list-style: none; font-family: Arial; text-align: justify;">Dimensões aproximadas C x L:</b><span style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-size: 12px; line-height: normal; font-family: Arial; text-align: justify;"> 82cm x 82cm.</span></p>
',
                "feature_image" => "312/312801/produto/12559284/5712737086.jpg",
                "images" => [
                ],
                "locale" => "rio_grande_do_sul",
            ],
            [
                "id" => "11381592",
                "sku" => "DXFQ26ASJ-branco-p",
                "name" => "DXFQ26ASJ-branco-p",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Acessórios",
                "category_id" => "3",
                "product_nickname" => Null,
                "full_description" => Null,
                "feature_image" => "",
                "images" => [
                    "1000/1000519/produto/147227740/b22063c978.jpg",
                ],
                "locale" => "rio_de_janeiro",
            ],
            [
                "id" => "6835067",
                "sku" => "UAFK553UQ-1",
                "name" => "UAFK553UQ-1",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Acessórios",
                "category_id" => "3",
                "product_nickname" => "6tjmb502f-okvwo6yge-p5jslvgws-ut9hrk03h-wh133tef5-v2d5be5j1-xxb8a9put-6w5g3aczg-oxg7y0x51-8hv9aedbb-igle7l1lo-upaudl63j-8atcan615-9jfykm8dx-None",
                "full_description" => Null,
                "feature_image" => "",
                "images" => [
                    "1000/1000519/produto/147227740/b22063c978.jpg",
                ],
                "locale" => "mato_grosso",
            ],
            [
                "id" => "7804124",
                "sku" => "65ANGZ4WK",
                "name" => "Saia Coca Cola",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Roupas",
                "category_id" => "4",
                "product_nickname" => "saia-coca-cola",
                "full_description" => '<p><span style="color: rgb(74, 74, 74); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;">Mini Saia Coca-Cola Clothing verde, com estampa animal print de cobra por toda a peça. Modelagem reta, cinco bolsos e cinco passantes no cós.</span><br style="color: rgb(74, 74, 74); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;" />
<br style="color: rgb(74, 74, 74); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;" />
<span style="color: rgb(74, 74, 74); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;">Confeccionada em algodão e elastano, garante conforto e mobilidade sobre o corpo. Fechamento por botão e zíper.</span></p>

<div><span style="color: rgb(74, 74, 74); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;">Composição : 98% algodão e 2% elastano</span></div>

<div><span style="color: rgb(74, 74, 74); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20px;">Referência 83200447</span></div>
',
                "feature_image" => "241/241968/produto/7804124/76f16a4155.jpg",
                "images" => [
                    "241/241968/produto/7804124/d9d47cc580.jpg",
                    "241/241968/produto/7804124/aa2cb33a9b.jpg",
                    "241/241968/produto/7804124/1e4fd76a96.jpg",
                    "241/241968/produto/7804124/b803455759.jpg",
                    "241/241968/produto/7804124/8524a2af6b.jpg",
                    "241/241968/produto/7804124/36a8ddd8ef.jpg",
                ],
                "locale" => "sao_paulo",
            ],
            [
                "id" => "5581577",
                "sku" => "1102",
                "name" => "Mini Saia Sabrina",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Roupas",
                "category_id" => "4",
                "product_nickname" => "mini-saia-sabrina",
                "full_description" => '<table border="0" cellpadding="0" cellspacing="0" style="width:565px;" width="565">
    <tbody>
        <tr height="41">
            <td height="41" style="height:41px;width:565px;">
            <p>Mini saia em lycra<span style="line-height: 20.7999992370605px;">, média compressão, com forro</span></p>

            <p>Composição: 80% Elastano 20% Poliamida</p>

            <p> </p>
            </td>
        </tr>
    </tbody>
</table>
',
                "feature_image" => "84/84646/produto/5581577/1445735a7d.jpg",
                "images" => [
                    "84/84646/produto/5581577/32f4351fc6.jpg",
                    "84/84646/produto/5581577/451508caa0.jpg",
                    "84/84646/produto/5581577/2509906f14.jpg",
                    "84/84646/produto/5581577/caa18ce938.jpg",
                ],
                "locale" => "rio_grande_do_sul",
            ],
            [
                "id" => "5581488",
                "sku" => "1101",
                "name" => "Mini Saia Melissa",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Roupas",
                "category_id" => "4",
                "product_nickname" => "mini-saia-melissa",
                "full_description" => '<p style="margin: 0px 0px 10px; padding: 0px; color: rgb(102, 102, 102); font-family: Verdana, Geneva, sans-serif; font-size: 12px; line-height: normal;">Mini saia em poliamida com babadinho na barra e elástico na cintura. Pode ser usado cós alto ou baixo.</p>

<p style="margin: 0px 0px 10px; padding: 0px; color: rgb(102, 102, 102); font-family: Verdana, Geneva, sans-serif; font-size: 12px; line-height: normal;"><span style="margin: 0px; padding: 0px; line-height: 20.7999992370605px;">Composição: 91% Poliamida 9% Elastano</span></p>
',
                "feature_image" => "84/84646/produto/5581488/90151d5613.jpg",
                "images" => [
                    "84/84646/produto/5581488/e0eb191380.jpg",
                    "84/84646/produto/5581488/b010f8c9d8.jpg",
                    "84/84646/produto/5581488/822a31eb85.jpg",
                    "84/84646/produto/5581488/d49c4223b9.jpg",
                    "84/84646/produto/5581488/c1fa247b47.jpg",
                ],
                "locale" => "rio_de_janeiro",
            ],
            [
                "id" => "7938920",
                "sku" => "XV4B5E6N4",
                "name" => "Saia com cinto Lança Perfume",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Roupas",
                "category_id" => "4",
                "product_nickname" => "saia-com-cinto-lanca-perfume",
                "full_description" => '<p>Saia comfort mini low, duas cores- verde - e marinho com cinto marinho e fivela grande dourada e prata oxidada .</p>

<p>Despojada permite um visual moderno e elegante</p>

<p>Composição : 100% algodão</p>

<p>Referência 01SA026900 </p>
',
                "feature_image" => "241/241968/produto/7938920/d6f4905ff9.jpg",
                "images" => [
                    "241/241968/produto/7938920/4ac9e6096d.jpg",
                    "241/241968/produto/7938920/45766056fe.jpg",
                ],
                "locale" => "mato_grosso",
            ],
            [
                "id" => "6795562",
                "sku" => "SKXYP7L33",
                "name" => "Saia Evasê Animal Print",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Roupas",
                "category_id" => "4",
                "product_nickname" => "saia-evase-animal-print",
                "full_description" => '<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Essa saia tem como ponto forte a adaptabilidade, fica bem de dia ou de noite, em um look mais simples ou mais trabalhado.</div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Combine-a com peças lisas em tons neutros, de preferência mais ajustadas ao corpo para criar um contraponto.</div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Para dias de descontração, em eventos como passeios, use-a com rasteiras, slippers ou espadrilles flat.</div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Para eventos casuais noturnos, use-a com uma bela blusa, uma sandália de salto alto e arremate com um cinto largo.</div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Essa saia pede bolsa de mão ou tiracolo média.</div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;"> </div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;"> </div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Material: 96% Viscose, 4% Elastano.</div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Cintura: Média.</div>

<div style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Comprimento: Micro.</div>

<div style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Cor: Animal Print.</div>

<div style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Tamanhos: P, M, G, GG e XXG.</div>
',
                "feature_image" => "171/171191/produto/6795562/0c5d663534.jpg",
                "images" => [
                    "171/171191/produto/6795562/14254060aa.jpg",
                    "171/171191/produto/6795562/817dc3cec7.jpg",
                ],
                "locale" => "sao_paulo",
            ],
            [
                "id" => "10489208",
                "sku" => "7Q8B6RMSH",
                "name" => "Saia Dzarm",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Roupas",
                "category_id" => "4",
                "product_nickname" => "saia-dzarm",
                "full_description" => '<p><span style="font-size:18px;"><span style="font-family:tahoma,geneva,sans-serif;">Linda Saia Dazrm com renda nas laterais e no cós,com pregas na frente e nas costas com passante no cós. Na cor preta  com um caimento perfeito e linda no corpo...</span></span></p>

<p><span style="font-size:20px;">Referência: z6wr</span></p>

<p><span style="font-size:20px;">composição:corpo 77% poliéster  18% viscose 5% elastano</span></p>

<p><span style="font-size:20px;">                    renda: 100% poliamida</span></p>
',
                "feature_image" => "241/241968/produto/10489208/1bc2e74fbb.jpg",
                "images" => [
                    "241/241968/produto/10489208/3b508cd69c.jpg",
                    "241/241968/produto/10489208/6c191d51a1.jpg",
                    "241/241968/produto/10489208/11789f23d5.jpg",
                ],
                "locale" => "rio_grande_do_sul",
            ],
            [
                "id" => "6487354",
                "sku" => "BTHJ39XUK",
                "name" => "Short-Saia",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Roupas",
                "category_id" => "4",
                "product_nickname" => "short-saia",
                "full_description" => '<p><span style="font-size:20px;"><span style="color:#FF0000;"><strong style="margin: 0px; padding: 0px; color: rgb(104, 104, 104); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 15px;">Descrição:</strong><span style="font-family: Arial, Helvetica, sans-serif; line-height: 15px;"> </span></span></span><br style="margin: 0px; padding: 0px; color: rgb(104, 104, 104); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 15px;" />
<span style="font-size:16px;"><span style="color:#FF0000;"><span style="font-family: Arial, Helvetica, sans-serif; line-height: 15px;">Short saia confeccionado em tecido suplex mescla, super confortável e com ótimo caimento. O acabamento da saia é sem costura para um ar mais moderno, além da cintura transpassada e em "V" que modela a silhueta, valorizando ainda mais o corpo. </span></span><span style="color:#FF0000;"><span style="font-family: Arial, Helvetica, sans-serif; line-height: 15px;"> Essa saia combina também com</span></span></span><span style="font-size:18px;"><span style="margin: 0px; padding: 0px; color: rgb(255, 0, 0); text-decoration: none; transition: color 450ms ease-in-out, background-color 450ms ease-in-out; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 15px;"> </span><span style="font-size:16px;"><span style="margin: 0px; padding: 0px; color: rgb(255, 0, 0); text-decoration: none; transition: color 450ms ease-in-out, background-color 450ms ease-in-out; font-family: Arial, Helvetica, sans-serif; line-height: 15px;">cropped</span></span></span><span style="font-size:16px;"><span style="color:#FF0000;"><span style="font-family: Arial, Helvetica, sans-serif; line-height: 15px;"> preto.</span></span></span><br style="margin: 0px; padding: 0px; color: rgb(104, 104, 104); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 15px;" />
<span style="font-size:20px;"><span style="color:#FF0000;"><strong style="margin: 0px; padding: 0px; color: rgb(104, 104, 104); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 15px;">Medidas da Modelo:</strong></span></span><br style="margin: 0px; padding: 0px;" />
<span style="font-size:16px;"><span style="color:#FF0000;"><span style="font-family: Arial, Helvetica, sans-serif; line-height: 15px;">A modelo da foto está vestindo tamanho M. Medidas da modelo: 1,72m de altura, 65cm de cintura, 98cm de quadril e 89cm de busto.</span></span></span><br style="margin: 0px; padding: 0px; color: rgb(104, 104, 104); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 15px;" />
<span style="font-size:20px;"><span style="color:#FF0000;"><strong style="margin: 0px; padding: 0px; color: rgb(104, 104, 104); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 15px;">Composição:</strong></span></span><br style="margin: 0px; padding: 0px;" />
<span style="font-size:16px;"><span style="color:#FF0000;"><span style="font-family: Arial, Helvetica, sans-serif; line-height: 15px;">54% algodão, 38% poliéster e 8% elastano.</span></span></span></p>
',
                "feature_image" => "213/213178/produto/6487354/e2e2075618.jpg",
                "images" => [
                    "213/213178/produto/6487354/11db0d395d.jpg",
                    "213/213178/produto/6487354/5bb0a5d786.jpg",
                    "213/213178/produto/6487354/ab657e8023.jpg",
                ],
                "locale" => "rio_de_janeiro",
            ],
            [
                "id" => "6795463",
                "sku" => "C3UYCEWNL",
                "name" => " Mini Saia Peplum Floral Mix",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Roupas",
                "category_id" => "4",
                "product_nickname" => "mini-saia-peplum-floral-mix",
                "full_description" => '<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Saia linda e que é tendência para esta estação.</div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Modelo peplum, que seria babados localizado na cintura.</div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Perfeito para usar com blusas de alças ou regatas.</div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Nos pés use com sapatos peep toe e de acessório combine com pulseiras douradas.</div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Ideal para usar em festas ou baladas animadas.</div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Você ainda mais linda e arrasando como sempre.</div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;"> </div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;"> </div>

<div class="linha" style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Material: 100% Algodão.</div>

<div style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Cintura: Média.</div>

<div style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Comprimento: Micro.</div>

<div style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Cor: Floral mix.</div>

<div style="margin: 0px; padding: 0px; outline: 0px; color: rgb(57, 57, 57); font-family: Arial; font-size: 12px; line-height: normal;">Tamanhos: P, M, G, GG.</div>
',
                "feature_image" => "171/171191/produto/6795463/3e61dc4269.jpg",
                "images" => [
                    "171/171191/produto/6795463/533e51e30b.jpg",
                    "171/171191/produto/6795463/e534a80c86.jpg",
                    "171/171191/produto/6795463/ccd8b18899.jpg",
                ],
                "locale" => "mato_grosso",
            ],
            [
                "id" => "6096097",
                "sku" => "6R4QEL9QF",
                "name" => "Mini-Saia Cheris Destroyed",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Roupas",
                "category_id" => "4",
                "product_nickname" => "mini-saia-cheris-destroyed",
                "full_description" => '<h4 id="tabs-1" style="border: 0px; margin: 0px 0px 40px -20px; padding: 0px; color: rgb(110, 110, 110); font-size: 25px; font-family: \'Trebuchet MS\', Tahoma, Verdana, Arial, sans-serif; line-height: 20px;"><span style="color:#EE82EE;"><strong><span style="font-size:24px;">Descrição do Produto</span></strong></span></h4>

<div style="border: 0px; margin: 0px; padding: 0px; font-family: \'Trebuchet MS\', Tahoma, Verdana, Arial, sans-serif; font-size: 12px; line-height: 20px;">
<div style="border: 0px; margin: 0px 0px 0cm; padding: 0px; line-height: 12px;"><span style="font-size:22px;"><span style="color:#4B0082;"><strong><font style="border: 0px; margin: 0px; padding: 0px;"><font face="Arial, sans-serif" style="border: 0px; margin: 0px; padding: 0px;"><font style="border: 0px; margin: 0px; padding: 0px; font-size: 10pt;">Informações Adicionais:</font></font></font></strong></span></span></div>

<div style="border: 0px; margin: 0px 0px 0cm; padding: 0px; line-height: 12px;"> </div>

<div style="border: 0px; margin: 0px 0px 0cm; padding: 0px; line-height: 12px;"><span style="font-size:22px;"><span style="color:#4B0082;"><strong><font style="border: 0px; margin: 0px; padding: 0px;"><font face="Arial, sans-serif" style="border: 0px; margin: 0px; padding: 0px;"><font style="border: 0px; margin: 0px; padding: 0px; font-size: 10pt;"><b style="border: 0px; margin: 0px; padding: 0px;">Modelagem Padrão<br style="border: 0px; margin: 0px; padding: 0px;" />
Modelo sem stretch</b></font></font></font></strong></span></span></div>

<div style="border: 0px; margin: 0px 0px 0cm; padding: 0px; line-height: 12px;"> </div>

<div style="border: 0px; margin: 0px 0px 0cm; padding: 0px; line-height: 12px;"><span style="font-size:22px;"><span style="color:#4B0082;"><strong><font style="border: 0px; margin: 0px; padding: 0px;"><font face="Arial, sans-serif" style="border: 0px; margin: 0px; padding: 0px;"><font style="border: 0px; margin: 0px; padding: 0px; font-size: 10pt;">Tamanhos: 36 ao 46</font></font></font></strong></span></span></div>

<div style="border: 0px; margin: 0px 0px 0cm; padding: 0px; line-height: 12px;"> </div>

<div style="border: 0px; margin: 0px 0px 0cm; padding: 0px; line-height: 12px;"><span style="font-size:22px;"><span style="color:#4B0082;"><strong><font style="border: 0px; margin: 0px; padding: 0px;"><font face="Arial, sans-serif" style="border: 0px; margin: 0px; padding: 0px;"><font style="border: 0px; margin: 0px; padding: 0px; font-size: 10pt;">Corte tipo “soltinho” destroyed</font></font></font></strong></span></span></div>

<div style="border: 0px; margin: 0px 0px 0cm; padding: 0px; line-height: 12px;"> </div>

<div style="border: 0px; margin: 0px 0px 0cm; padding: 0px; line-height: 12px;"><span style="font-size:22px;"><span style="color:#4B0082;"><strong><font style="border: 0px; margin: 0px; padding: 0px;"><font face="Arial, sans-serif" style="border: 0px; margin: 0px; padding: 0px;"><font style="border: 0px; margin: 0px; padding: 0px; font-size: 10pt;">Cor: delavê Marmorizado</font></font></font></strong></span></span></div>

<div style="border: 0px; margin: 0px 0px 0cm; padding: 0px; line-height: 12px;"><br style="border: 0px; margin: 0px; padding: 0px;" />
<span style="font-size:22px;"><span style="color:#4B0082;"><strong><font style="border: 0px; margin: 0px; padding: 0px;"><font face="Arial, sans-serif" style="border: 0px; margin: 0px; padding: 0px;"><font style="border: 0px; margin: 0px; padding: 0px; font-size: 10pt;">Material: jeans puro sem elastano</font></font></font></strong></span></span></div>

<div style="border: 0px; margin: 0px 0px 0cm; padding: 0px; line-height: 12px;"><br style="border: 0px; margin: 0px; padding: 0px;" />
<span style="font-size:22px;"><span style="color:#4B0082;"><strong><font style="border: 0px; margin: 0px; padding: 0px;"><font face="Arial, sans-serif" style="border: 0px; margin: 0px; padding: 0px;"><font style="border: 0px; margin: 0px; padding: 0px; font-size: 10pt;">Marca: Cheris Jeans</font></font></font></strong></span></span></div>

<div style="border: 0px; margin: 0px 0px 0cm; padding: 0px; line-height: 12px;"><br style="border: 0px; margin: 0px; padding: 0px;" />
<span style="font-size:22px;"><span style="color:#4B0082;"><strong><font style="border: 0px; margin: 0px; padding: 0px;"><font face="Arial, sans-serif" style="border: 0px; margin: 0px; padding: 0px;"><font style="border: 0px; margin: 0px; padding: 0px; font-size: 10pt;">Foto realizada com tamanho: 36</font></font></font></strong></span></span></div>
</div>
',
                "feature_image" => "213/213178/produto/6096097/7d0f5fed1b.jpg",
                "images" => [
                    "213/213178/produto/6096097/682bd2205d.jpg",
                    "213/213178/produto/6096097/6a3e48d152.jpg",
                    "213/213178/produto/6096097/7d863ce46b.jpg",
                    "213/213178/produto/6096097/000aeb6765.jpg",
                    "213/213178/produto/6096097/6f6c86ee59.jpg",
                    "213/213178/produto/6096097/bbec8cca4d.jpg",
                    "213/213178/produto/6096097/6841523676.jpg",
                ],
                "locale" => "sao_paulo",
            ],
            [
                "id" => "8335849",
                "sku" => "NDPU3KG3P",
                "name" => "Saia Coca-Cola Clothing",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "Roupas",
                "category_id" => "4",
                "product_nickname" => "saia-coca-cola-clothing",
                "full_description" => '<h2 class="title title-39" style="margin: 20px 0px 17px; padding: 0px; border: 0px; font-weight: inherit; font-stretch: inherit; font-size: 12px; line-height: 20px; font-family: \'Museo Sans\', arial, sans-serif; vertical-align: baseline; text-transform: uppercase;">DETALHES DO PRODUTO</h2>

<p class="product-information-description" itemprop="description" style="margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: Arial, Helvetica, sans-serif; vertical-align: baseline; color: rgb(74, 74, 74);">Saia Coca-Cola Clothing Small Mixer azul, detalhe de mix de estampas ao longo da superfície. Modelagem reta com elástico no cós, para melhor ajuste. </p>

<table cellpadding="0" cellspacing="0" class="product-informations" style="margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 13px; line-height: 22px; font-family: Arial, Helvetica, sans-serif; vertical-align: baseline; border-collapse: collapse; border-spacing: 0px; color: rgb(74, 74, 74);">
    <tbody style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">
        <tr style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">
            <td style="margin: 0px; padding: 0px 30px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Modelo</td>
            <td style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">COCA COLA JEANS 83200489</td>
        </tr>
        <tr style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">
            <td style="margin: 0px; padding: 0px 30px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Material</td>
            <td style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Poliéster</td>
        </tr>
        <tr style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">
            <td style="margin: 0px; padding: 0px 30px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Composição</td>
            <td style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">95% Poliéster/ 05% Elastano</td>
        </tr>
        <tr style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">
            <td style="margin: 0px; padding: 0px 30px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Cor</td>
            <td style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Azul</td>
        </tr>
        <tr style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">
            <td style="margin: 0px; padding: 0px 30px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Lavagem</td>
            <td style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Lavar a mão</td>
        </tr>
    </tbody>
</table>
',
                "feature_image" => "241/241968/produto/8335849/41e59b45f3.jpg",
                "images" => [
                    "241/241968/produto/8335849/0a9bdac37c.jpg",
                    "241/241968/produto/8335849/d81323a1f2.jpg",
                    "241/241968/produto/8335849/294159dbc3.jpg",
                    "241/241968/produto/8335849/cd7b0f8887.jpg",
                ],
                "locale" => "rio_grande_do_sul",
            ],
            [
                "id" => "",
                "sku" => "",
                "name" => "",
                "price" => "99,99",
                "sold_by" => "Vendido por Loja Tal&Tal",
                "highlight" => "900+ vendidos",
                "category" => "",
                "category_id" => "123",
                "product_nickname" => "",
                "full_description" => "",
                "feature_image" => "",
                "images" => [
                    "1000/1000519/produto/147227740/b22063c978.jpg",
                ],
                "locale" => "rio_de_janeiro",
            ],
        ]);
    }
}
