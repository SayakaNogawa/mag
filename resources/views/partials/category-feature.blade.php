@php $the_query = set_category_query('feature', 1) @endphp
@while ($the_query->have_posts()) @php $the_query->the_post() @endphp
  @include('partials.feature')
@endwhile
@php wp_reset_postdata() @endphp
