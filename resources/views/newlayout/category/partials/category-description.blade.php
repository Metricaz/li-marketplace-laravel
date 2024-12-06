<div class="c-category-description">
  <div class="o-container">
    <h1 class="c-category-description__title">
      @if ($categoryText)
        {{ $categoryText->top_text_title }}
      @else
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      @endif
    </h1>

    <p class="c-category-description__text">
      @if ($categoryText)
        {{ $categoryText->top_text }}
      @else
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Praesent hendrerit dapibus elit at tristique. Mauris eget est ac tellus elementum venenatis. Aliquam sodales, ipsum in viverra vulputate, neque nisi dictum ante, eu cursus eros est eget ex.
      @endif
    </p>
  </div>
</div>
