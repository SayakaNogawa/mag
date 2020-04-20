<div class="entry-meta">
  <span class="entry-meta__container">
    <ul class="entry-meta__category-container">
      <li class="entry-meta__category">{{ the_category(', ') }}</li>
    </ul>
    <time class="entry-meta__updated" datetime="{{ get_post_time('c', true) }}">{{ the_time('Y.m.d') }}</time>
    <ul class="entry-meta__tag-container">
      <li class="entry-meta__tag">{{ get_the_tags(', ') }}</li>
    </ul>
  </span>
</div>
