<div class="blogsec">
  <div>
    @php $args = array('category_name' => 'blog', 'posts_per_page' => 5) @endphp
    @php $the_query = new WP_Query($args) @endphp
    @while ($the_query->have_posts()) @php $the_query->the_post() @endphp
      @include('partials.article')
    @endwhile
    @php wp_reset_postdata() @endphp
  </div>

  @include('partials.ranking')
</div>