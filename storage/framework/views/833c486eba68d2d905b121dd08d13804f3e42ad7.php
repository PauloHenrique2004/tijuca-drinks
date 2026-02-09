<?php $__env->startSection('title', "Registro - "); ?>
<?php $__env->startSection('og:title', 'Registro'); ?>
<?php $__env->startSection('description', 'Registro'); ?>



<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('site.registro', [])->html();
} elseif ($_instance->childHasBeenRendered('lvKQDJ0')) {
    $componentId = $_instance->getRenderedChildComponentId('lvKQDJ0');
    $componentTag = $_instance->getRenderedChildComponentTagName('lvKQDJ0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lvKQDJ0');
} else {
    $response = \Livewire\Livewire::mount('site.registro', []);
    $html = $response->html();
    $_instance->logRenderedChild('lvKQDJ0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/site/registro/livewire.blade.php ENDPATH**/ ?>