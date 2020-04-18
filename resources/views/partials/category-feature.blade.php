@php $the_query = set_category_query('feature', 3) @endphp
@while ($the_query->have_posts()) @php $the_query->the_post() @endphp
  @include('partials.horizontal-article')
@endwhile
@php wp_reset_postdata() @endphp
