<article class="feature" @php post_class() @endphp>
  <div class="container feature__container">
    <div class="feature__right">
      <picture class="feature__picture">
        <a href="{{ get_permalink() }}">{!! get_the_post_thumbnail() !!}</a>
      </picture>
    </div>
    <div class="feature__left">
      <div class="feature__entry-meta">
        <div class="entry-meta">
          <span class="entry-meta__container">
            <ul class="entry-meta__category-container">
              <li class="entry-meta__category">{{ the_category(', ') }}</li>
            </ul>
          </span>
        </div>
      </div>
      <h2 class="article-title-japanese feature__entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
      <div class="feature__entry-summary">
        @php the_excerpt() @endphp
      </div>
    </div>
  </div>
</article>
