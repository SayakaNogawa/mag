@php $args = array('category_name' => 'features', 'posts_per_page' => 3) @endphp
@php $the_query = new WP_Query($args) @endphp
@while ($the_query->have_posts()) @php $the_query->the_post() @endphp
  @include('partials.horizontal-article')
@endwhile
@php wp_reset_postdata() @endphp
