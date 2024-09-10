
<footer id="footer">
    <div class="container">
        <?php if(has_nav_menu('footer_navigation')): ?>
        <nav id="nav" aria-label="<?php echo e(wp_get_nav_menu_name('footer_navigation')); ?>">
            <?php echo wp_nav_menu(['theme_location' => 'footer_navigation', 'echo' => false]); ?>

        </nav>
        <?php endif; ?>
    </div>
</footer>
<?php /**PATH /Users/janakshrestha/Documents/2024/08 August/pikdesig/wp-content/themes/pikdesigns/resources/views/sections/footer.blade.php ENDPATH**/ ?>