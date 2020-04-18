<div class="blogsec">
  <div>
    @php $the_query = set_category_query('blog', 5) @endphp
    @while ($the_query->have_posts()) @php $the_query->the_post() @endphp
      @include('partials.article')
    @endwhile
    @php wp_reset_postdata() @endphp
  </div>

  @include('partials.ranking')
</div>