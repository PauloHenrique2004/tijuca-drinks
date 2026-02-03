<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="author" content="wetech.com.br">
    <link href="<?php echo e(asset('images/icone2.jpeg')); ?>" rel="icon" type="image/png"/>

    <title><?php echo $__env->yieldContent('title'); ?><?php echo e(config('app.name')); ?></title>

    <?php echo $__env->make('layouts.site.includes.share-tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.site.includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="fixed-bottom-padding">
    
<?php if (! ($lojaAberta)): ?>
    <div
        style=" width: 100%; background: #000; text-align: center; font-weight: bold; text-transform: uppercase; color: #fff; height: 30px; padding-top: 6px; ">
        Loja Fechada
    </div>
<?php endif; ?>

<?php echo $__env->make('layouts.site.includes.navbar-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="bg-black shadow-sm osahan-main-nav">
    <?php echo $__env->make('layouts.site.includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.site.includes.menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php echo $__env->yieldContent('before-content'); ?>

<?php if (! empty(trim($__env->yieldContent('content')))): ?>
    <section class="py-4 osahan-main-body osahan-master-body">
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <?php echo $__env->yieldContent('content-out'); ?>
    </section>
<?php endif; ?>

<?php echo $__env->make('layouts.site.includes.menubar-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.site.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.site.includes.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /var/www/resources/views/layouts/site/site.blade.php ENDPATH**/ ?>