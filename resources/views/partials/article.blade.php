<article class="article" @php post_class() @endphp>
  <div class="article__left">
    <picture class="article__picture">
      <a href="{{ get_permalink() }}">{!! get_the_post_thumbnail() !!}</a>
    </picture>
  </div>
  <div class="article__right">
    <h2 class="article__entry-title sub-title-japanese--small"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    <div class="article__entry-summary">
      @php the_excerpt() @endphp
    </div>
    @include('partials/entry-meta')
  </div>
</article>