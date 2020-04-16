<div class="trend">
  <h1 class="title">Trend</h1>
  <div class="slider">
    <div class="slider__inner">
      @php $trend_query = set_query('trend', 7) @endphp
      @while ($trend_query->have_posts()) @php $trend_query->the_post() @endphp

        @if ($trend_query->current_post == 0)
          <div class="slider__single slider__single--left">
            @include('partials.article-inside')
          </div>
          <div class="slider__columns slider__single--right">
        @else
          @include('partials.article-inside')
        @endif
      
      @endwhile
      </div>
      @php wp_reset_postdata() @endphp

    </div>
  </div>
</div>
