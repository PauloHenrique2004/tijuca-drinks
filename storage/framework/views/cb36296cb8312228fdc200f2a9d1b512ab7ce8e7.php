<?php $__env->startSection('title', 'Formulário Produto Categoria - '); ?>
<?php $__env->startSection('header-title', 'Formulário Produto Categoria'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('gestor.produto-categoria', ['id' => $id])->html();
} elseif ($_instance->childHasBeenRendered('ZksgiwH')) {
    $componentId = $_instance->getRenderedChildComponentId('ZksgiwH');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZksgiwH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZksgiwH');
} else {
    $response = \Livewire\Livewire::mount('gestor.produto-categoria', ['id' => $id]);
    $html = $response->html();
    $_instance->logRenderedChild('ZksgiwH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/produto_categorias/livewire.blade.php ENDPATH**/ ?>