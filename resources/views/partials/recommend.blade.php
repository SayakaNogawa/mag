@php $the_query =  set_recommend_query() @endphp
@if ($the_query->have_posts())
<article class="recommend">
  <div class="container recommend__container">

    <div class="recommend__line">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="172.5px" height="172.5px"><path fill-rule="evenodd"  stroke="rgb(0, 0, 0)" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" fill="rgb(0, 0, 0)" d="M171.500,1.500 L1.500,171.500 "/></svg>
    </div>

    <div class="recommend__article-container">
      <div class="recommend__section-title">
        <h1 class="title recommend__title">Recommended Content</h1>
        <h2 class="title--small recommend__subtitle">
          Recommended article<br >
          based on the article you red
        </h2>
      </div>
      <div class="recommend__posts-wrapper">
        @while($the_query->have_posts()) @php $the_query->the_post() @endphp
          <ul>
            <li class="recommend__post">
              @include('partials.entry-meta')
                @if (has_post_thumbnail())
                  <div class="recommend__post_thumbnail">
                    <a href="{{ the_permalink() }}" title="{{ the_title_attribute() }}">
                    {{ the_post_thumbnail() }}
                    </a>
                  </div>
                @endif
                <h3 class="recommend__post-title" >
                  <a href="{{ the_permalink() }}" title="{{ the_title_attribute() }}">
                    {{ the_title() }}
                  </a>
                </h3>
            </li>
          </ul>
        @endwhile
        @php wp_reset_postdata() @endphp
      </div>  
    </div>
  </div>
</article>
@endif

