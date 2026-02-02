<meta property="og:locale" content="pt_br"/>
<meta property='og:type' content='website'>
<meta property="og:site_name" content="<?php echo e(config('app.name')); ?>"/>

<?php if (! empty(trim($__env->yieldContent('og:title')))): ?>
    <meta property="og:title" content="<?php echo $__env->yieldContent('og:title'); ?>"/>
<?php else: ?>
    <meta property="og:title" content="<?php echo e(config('app.name')); ?>"/>
<?php endif; ?>

<?php if (! empty(trim($__env->yieldContent('og:image')))): ?>
    <meta property="og:image" content="<?php echo $__env->yieldContent('og:image'); ?>"/>
<?php else: ?>
    <meta property="og:image" content="<?php echo e(asset('images/logo.png')); ?>"/>
<?php endif; ?>

<?php if (! empty(trim($__env->yieldContent('description')))): ?>
    <meta property="og:description" content="<?php echo $__env->yieldContent('description'); ?>"/>
<?php else: ?>
    <meta property="og:description" content="<?php echo e(config('app.name')); ?>"/>
<?php endif; ?>
<?php /**PATH /var/www/resources/views/layouts/site/includes/share-tags.blade.php ENDPATH**/ ?>