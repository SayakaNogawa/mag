<div class="single-sec">
  <div class="container single-sec__container">
    <div class="single-sec__head">
      <h1 class="title single-sec__title">Magazine collection</h1>
      <p class="discription-japanese single-sec__discription">ショップスタッフがオススメする特別なアイテムを紹介します</p>  
    </div>
    <div class="single-sec__readmore-container">
      @php $category_id = get_cat_ID('collection') @endphp
      <a href="{{ get_category_link($category_id) }}">
        <span href="" class="single-sec__readmore" type="button">Read More</span>
        <img src="@asset('images/arrow-right.png')" alt="arrow-right" class="single-sec__icon">
      </a>
    </div>
  </div>
</div>