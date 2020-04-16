<h1 class="title">Coordinate</h1>
<div class="slider">
  <div class="slider__inner">

    @php $the_query = set_query('coordinate', 7) @endphp
    @while ($the_query->have_posts()) @php $the_query->the_post() @endphp

      @if ($the_query->current_post == 0)
        <div class="slider__single slider__single--right">
          @include('partials.article-inside')
        </div>
        <div class="slider__columns slider__single--left">
      @else
        @include('partials.article-inside')
      @endif
    
    @endwhile
    </div>
    @php wp_reset_postdata() @endphp

  </div>
</div>