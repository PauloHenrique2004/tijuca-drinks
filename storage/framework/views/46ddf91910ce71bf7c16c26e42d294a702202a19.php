<?php $__env->startSection('title', "Carrinho - "); ?>
<?php $__env->startSection('og:title', 'Carrinho'); ?>
<?php $__env->startSection('description', 'Carrinho'); ?>



<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('site.carrinho.pedido', [])->html();
} elseif ($_instance->childHasBeenRendered('8McOTc2')) {
    $componentId = $_instance->getRenderedChildComponentId('8McOTc2');
    $componentTag = $_instance->getRenderedChildComponentTagName('8McOTc2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8McOTc2');
} else {
    $response = \Livewire\Livewire::mount('site.carrinho.pedido', []);
    $html = $response->html();
    $_instance->logRenderedChild('8McOTc2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/site/carrinho/livewire.blade.php ENDPATH**/ ?>