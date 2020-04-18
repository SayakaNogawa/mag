<article @php post_class() @endphp>
  <div>
    <picture>
      <a href="{{ get_permalink() }}">{!! get_the_post_thumbnail() !!}</a>
    </picture>
  </div>
  <div>
    <h2><a href="{{ get_permalink() }}" class="sub-title-japanese">{!! get_the_title() !!}</a></h2>
    <div>
      @php the_excerpt() @endphp
      @include('partials/entry-meta')
    </div>
  </div>
</article>