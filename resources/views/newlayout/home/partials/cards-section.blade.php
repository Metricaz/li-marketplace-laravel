<div class="c-cards-section">
  <div class="o-container">
    <h2 class="c-section-title">
      {{ $title ?? '' }}
    </h2>
  </div>

  <div class="c-cards-section__wrapper">
    <div class="c-cards-section__list-wrapper">
      <div class="o-container">
        <div class="c-cards-section__list" data-cards-section-list>
          @for($i=0;$i<4;$i++)
            @include('newlayout.partials.product-card',[
              'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent hendrerit dapibus elit at tristique. Mauris eget est ac tellus elementum',
              'price' => '129,99',
              'old_price' => '199,99',
              'image_url' => 'https://placehold.co/300x300?text=P',
              'url' => '/newlayout/produto',
            ])
          @endfor

          <div class="c-cards-section__last-card">
            <a href="#" >
              @include('newlayout.partials.svg.icons.seta-1')

              <div>
                Gostaria de ver mais itens como estes?
              </div>

              <div
                href="{{ $link ?? '' }}"
                class="c-cards-section__last-card-button"
              >
                Ver mais
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="c-cards-section__button">
      <a href="#" class="c-button c-button--secondary">
        Ver Mais
      </a>
    </div>
  </div>
</div>
