<div class="blog-archive">
  <div class="container blog-archive__container">
    <div class="blog-archive__inner">
      @php $the_query = set_category_query('blog', 6) @endphp
      @while ($the_query->have_posts()) @php $the_query->the_post() @endphp
        @include('partials.article')
      @endwhile
    </div>
    @php wp_reset_postdata() @endphp
  </div>
</div>