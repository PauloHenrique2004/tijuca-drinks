<?php $__env->startSection('title', 'Formulário Página - '); ?>
<?php $__env->startSection('header-title', 'Formulário Página'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('pagina', ['id' => $id])->html();
} elseif ($_instance->childHasBeenRendered('cTJzEq0')) {
    $componentId = $_instance->getRenderedChildComponentId('cTJzEq0');
    $componentTag = $_instance->getRenderedChildComponentTagName('cTJzEq0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cTJzEq0');
} else {
    $response = \Livewire\Livewire::mount('pagina', ['id' => $id]);
    $html = $response->html();
    $_instance->logRenderedChild('cTJzEq0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/paginas/livewire.blade.php ENDPATH**/ ?>