<div class="entry-meta">
  <span>
    <ul class="entry-meta__category-container">
      <li class="entry-meta__category">{{ the_category(', ') }}</li>
    </ul>
    <time class="entry-meta__updated" datetime="{{ get_post_time('c', true) }}">{{ the_time('Y.m.d') }}</time>
    <p class="entry-meta__author">
    {{ __('記事を書いた人：', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
      {{ get_the_author() }}
    </a>
    </p>
    <ul class="entry-meta__tag-container">
      <li class="entry-meta__tag">{{ get_the_tags(', ') }}</li>
    </ul>
  </span>
</div>
