<div class="interview">
  <div class="interview__wrapper">
    <div class="interview__title">
      <h1 class="title">Interview</h1>
    </div>
    <div class="interview__columns">
      @php $args = array('category_name' => 'interview', 'posts_per_page' => 3) @endphp
      @php $the_query = new WP_Query($args) @endphp
      @while ($the_query->have_posts()) @php $the_query->the_post() @endphp
        @include('partials.card')
      @endwhile
      @php wp_reset_postdata() @endphp
    </div>
  </div>
</div>
