<article class="horizontal-article" @php post_class() @endphp>
  <div class="horizontal-article__left">
      <h2 class="horizontal-article__entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
      <div class="horizontal-article__entry-summary">
        @php the_excerpt() @endphp
      </div>
      @include('partials/entry-meta')
    </div>
  <div class="horizontal-article__right">
    <picture class="horizontal-article__picture">
      <a href="{{ get_permalink() }}">{!! get_the_post_thumbnail() !!}</a>
    </picture>
  </div>
</article>