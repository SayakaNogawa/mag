<div class="single-sec">
  <div class="container single-sec__container">
    <div class="single-sec__head">
      <h1 class="title single-sec__title">Magazine collection</h1>
      <p class="discription-japanese single-sec__discription">ショップスタッフがオススメする特別なアイテムを紹介します</p>  
    </div>
    <div class="single-sec__readmore">
      @php $category_id = get_cat_ID('collection') @endphp
      @include('partials.readmore')
    </div>
  </div>
</div>