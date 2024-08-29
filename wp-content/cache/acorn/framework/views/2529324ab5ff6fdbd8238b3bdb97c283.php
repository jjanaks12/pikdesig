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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/janakshrestha/Documents/2024/08 August/pikdesig/wp-content/themes/pikdesigns/resources/views/home.blade.php ENDPATH**/ ?>