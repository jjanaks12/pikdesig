{{-- @php(dynamic_sidebar('sidebar-footer')) --}}
<footer id="footer" class="text-white pt-c70 pb-[7.5rem]">
    <div class="container">
        @if (has_nav_menu('footer_navigation'))
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'echo' => false, 'menu_class' => 'footer__nav']) !!}
        @endif
    </div>
</footer>
