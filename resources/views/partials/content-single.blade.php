<article @php post_class() @endphp>
  <div class="posts">
    <div class="posts__column">
      @include('partials/entry-meta')
    </div>
    <div class="posts__container">
      <header>
        <h1 class="article-title-japanese posts__title">{!! get_the_title() !!}</h1>
        
      </header>
      <div class="posts__content">
        @php the_content() @endphp
      </div>
      <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
      </footer>
      <p class="entry-meta__author">
          {{ __('Text & Edit by', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">{{ get_the_author() }}</a>
      </p>
      @include('partials.recommend')
    </div>
  </div>
</article>
