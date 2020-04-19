@php $the_query =  set_recommend_query() @endphp
@if ($the_query->have_posts())
<article class="recommend">
  <div class="container recommend__container">

    <div class="recommend__line">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="172.5px" height="172.5px"><path fill-rule="evenodd"  stroke="#bcbebf" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" fill="#bcbebf" d="M171.500,1.500 L1.500,171.500 "/></svg>
    </div>

    <div class="recommend__article-container">
      <div class="recommend__title-contsiner">
        <h1 class="title recommend__title">Recommended Content</h1>
      </div>
      <div class="recommend__posts-wrapper">
        @while($the_query->have_posts()) @php $the_query->the_post() @endphp
          <article class="recommend__post">
            @if (has_post_thumbnail())
              <div class="recommend__thumbnail">
                <a href="{{ the_permalink() }}" title="{{ the_title_attribute() }}">
                {{ the_post_thumbnail() }}
                </a>
              </div>
            @endif
            <span class="recommend__category-container">
              <ul><li class="entry-meta__category recommend__category">{{ the_category(', ') }}</li></ul>
            </span>
            <h2 class="article-title-japanese recommend__post-title" >
              <a href="{{ the_permalink() }}" title="{{ the_title_attribute() }}">
                {{ the_title() }}
              </a>
            </h2>
            <div class="discription-japanese recommend__excerpt">{{ the_excerpt() }}</div>
          </article>
        @endwhile
        @php wp_reset_postdata() @endphp
      </div>
    </div>
  </div>
</article>
@endif

