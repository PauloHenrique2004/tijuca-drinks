<?php $__env->startSection('title', "{$produto->nome} - "); ?>
<?php $__env->startSection('og:title', $produto->nome); ?>
<?php $__env->startSection('og:image', asset($produto->thumbnailUrl())); ?>
<?php $__env->startSection('description', $produto->nome); ?>



<?php $__env->startSection('before-content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('site.produto.produto', ['id' => $produto->id])->html();
} elseif ($_instance->childHasBeenRendered('j5KujEx')) {
    $componentId = $_instance->getRenderedChildComponentId('j5KujEx');
    $componentTag = $_instance->getRenderedChildComponentTagName('j5KujEx');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('j5KujEx');
} else {
    $response = \Livewire\Livewire::mount('site.produto.produto', ['id' => $produto->id]);
    $html = $response->html();
    $_instance->logRenderedChild('j5KujEx', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/site/produtos/show.blade.php ENDPATH**/ ?>