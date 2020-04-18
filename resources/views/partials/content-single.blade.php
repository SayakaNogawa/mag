<article @php post_class() @endphp>
  <div class="posts">
    <div class="posts__column"></div>
    <div class="posts__container">
      <header>
      <h1 class="article-title-japanese posts__title">{!! get_the_title() !!}</h1>
      @include('partials/entry-meta')
      </header>
      <div class="posts__content">
        @php the_content() @endphp
      </div>
      <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
      </footer>
      @include('partials.recommend')
    </div>
  </div>
</article>
