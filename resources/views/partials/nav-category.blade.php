<nav class="nav-category container">
  <h2 class="nav-category__title">magazine</h2>
  <div class="nav-category__container">
    @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </div>
</nav>