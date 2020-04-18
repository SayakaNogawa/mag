<div class="card">
  <div class="container card__container">
    <div class="title card__title">
      <h1 class="title">Interview</h1>
    </div>
    <div class="card__columns">
      @php $the_query = set_category_query('interview', 3) @endphp
      @while ($the_query->have_posts()) @php $the_query->the_post() @endphp
        <div class="card__article-container">
          @include('partials.article-inside')
        </div>
      @endwhile
      @php wp_reset_postdata() @endphp
    </div>
  </div>
</div>
