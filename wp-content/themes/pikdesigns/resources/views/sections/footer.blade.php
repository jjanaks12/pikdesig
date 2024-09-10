{{-- @php(dynamic_sidebar('sidebar-footer')) --}}
<footer id="footer">
    <div class="container">
        @if (has_nav_menu('footer_navigation'))
        <nav id="nav" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
            {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'echo' => false]) !!}
        </nav>
        @endif
    </div>
</footer>
