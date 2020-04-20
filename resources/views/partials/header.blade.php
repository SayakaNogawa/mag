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
          <h1 class="title header__brand-title">Mag.</h1>
        </a>
      </div>
      <div class="header__sex">
        <a href="" class="header__sex-item">Men</a>
        <a href="" class="header__sex-item">|</a>
        <a href="" class="header__sex-item">Women</a>
      </div>
    </div>
    @include('partials.site-menu')
    @include('partials.nav-category')
  </div>
</header>
