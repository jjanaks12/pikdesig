

<html>
<head>
    <?php wp_head()?>
</head>
<body>
    <div id="wrapper">
        <main id="main">
            <section class="under_construction">
                <div class="holder">
                    <div class="logo">
                        <a href="<?php echo e(home_url('home-page')); ?>">
                            <img src="<?php echo wp_get_attachment_url($siteLogo); ?>" alt="<?php echo e($siteName); ?>">
                        </a>
                    </div>
                    <h1>We are under construction!</h1>
                    <p>We are proud to announce we are developing our own website. We will come through.</p>
                </div>
            </section>
        </main>
    </div>
    <?php wp_footer() ?>
</body>
</html>
<?php /**PATH /Users/janakshrestha/Documents/2024/08 August/pikdesig/wp-content/themes/pikdesigns/resources/views/underConstruction.blade.php ENDPATH**/ ?>