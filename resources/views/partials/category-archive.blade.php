<div class="slider">
  <div class="container slider__container">
    <div class="slider__inner">
      <div class="slider__single slider__single--left">
        <h1 class="title--big slider__title slider__title--right">
          @include('partials.page-header')
        </h1>
      </div>
      <div class="slider__columns slider__single--right">
        @while (have_posts()) @php the_post() @endphp
          @include('partials.article-inside')
        @endwhile
      </div>
    </div>
  </div>
</div>
  