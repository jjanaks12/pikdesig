<?php $__env->startSection('content'); ?>
<div class="banner">
    <div class="banner__video">
        <video autoplay muted loop>
            <source src="<?= \Roots\asset('/videos/video01.mp4'); ?>" type="video/mp4">
        </video>
    </div>
    <div class="banner__content">
        <div class="container">
            <em>Personalized Ads</em>
            <h1>Good ideas deserve to be found. See how personalized ads can help.</h1>
            <a href="#">Learn more</a>
        </div>
    </div>
</div>
<section class="portfolio__section">
    <div class="container">
        <div class="portfolio__header">
            <em>Recommended</em>
            <h2>Move your business forward with inspiration, insights, and resources picked just for you.</h2>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide portfolio">
                    <figure class="portfolio__image">
                        <img src="<?php echo e($portfolio['image']); ?>" alt="<?php echo e($portfolio['title']); ?>">
                    </figure>
                    <h3><?php echo e($portfolio['title']); ?></h3>
                    <div class="portfolio__categories">
                        <?php $__currentLoopData = $portfolio['category']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <em><?php echo e($category); ?></em>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <section class="services__section">
        <h2>Grow your business across Facebook, Messenger, Instagram, WhatsApp and Quest.</h2>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide service" data-icon="icon-facebook">
                    <figure class="service">
                        <img src="" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/janakshrestha/Documents/2024/08 August/pikdesig/wp-content/themes/pikdesigns/resources/views/home.blade.php ENDPATH**/ ?>