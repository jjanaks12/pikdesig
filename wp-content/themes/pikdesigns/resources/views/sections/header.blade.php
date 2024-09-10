<header id="header">
    <div class="container">
        <a class="logo" href="{{ home_url('/home-page') }}">
            <img src="{!! wp_get_attachment_url($siteLogo) !!}" alt="{{ $siteName }}">
        </a>
        @if (has_nav_menu('primary_navigation'))
        <nav id="nav" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            <a href="#" class="nav__opener"><span></span></a>
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main__menu', 'echo' => false]) !!}
        </nav>
        @endif
    </div>
</header>
