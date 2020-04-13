<header class="header">  
  <div class="header__container">
    <div class="header__top">
      <div class="header__logo">
        <button class="hamburger hamburger--vortex" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <a class="header__brand" href="{{ home_url('/') }}">
          <h1 class="header__brand-title">Mag.</h1>
        </a>
      </div>
      <div class="header__sex">
        <a href="">Men</a> | <a href="">Women</a>
      </div>
    </div>
    <!--
    <div class="header__button-wrapper">
      <button class="button">login</button>
      <button class="button japanese">出店する</button>
    </div>      
    <nav class="header__sitemap" id="siteNavBar">
      <ul class="header__sitemap-item">
        <li><a href="">Q&A</a></li>
        <li><a href="">Items</a></li>
        <li><a href="">Ranking</a></li>
        <li><a href="">Articles</a></li>
        <li><a href="">Shops</a></li>
      </ul>
    </nav>
    -->
    <nav class="nav-primary">
      <h2 class="nav-title">magazine</h2>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
