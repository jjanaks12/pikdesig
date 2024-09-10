<header id="header">
    <div class="container">
        <a class="logo" href="<?php echo e(home_url('/home-page')); ?>">
            <img src="<?php echo wp_get_attachment_url($siteLogo); ?>" alt="<?php echo e($siteName); ?>">
        </a>
        <?php if(has_nav_menu('primary_navigation')): ?>
        <nav id="nav" aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
            <a href="#" class="nav__opener"><span></span></a>
            <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main__menu', 'echo' => false]); ?>

        </nav>
        <?php endif; ?>
    </div>
</header>
<?php /**PATH /Users/janakshrestha/Documents/2024/08 August/pikdesig/wp-content/themes/pikdesigns/resources/views/sections/header.blade.php ENDPATH**/ ?>