<?php $__env->startSection('title', ($id ? 'Visualizar Termo - ' : 'Atualizar Termo - ')); ?>
<?php $__env->startSection('header-title', ($id ? 'Visualizar Termo' : 'Atualizar Termo')); ?>

<?php $__env->startSection('card-tools'); ?>
    <a class="btn btn-default content animate__animated animate__flipInX"
       href="<?php echo e(route('gestor.lgpd_termos.index')); ?>">
        <i class="nav-icon fas fa-arrow-left"></i>
        Voltar
    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('gestor.lgpd-termo', ['id' => $id])->html();
} elseif ($_instance->childHasBeenRendered('sLjmMcC')) {
    $componentId = $_instance->getRenderedChildComponentId('sLjmMcC');
    $componentTag = $_instance->getRenderedChildComponentTagName('sLjmMcC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('sLjmMcC');
} else {
    $response = \Livewire\Livewire::mount('gestor.lgpd-termo', ['id' => $id]);
    $html = $response->html();
    $_instance->logRenderedChild('sLjmMcC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/lgpd_termos/livewire.blade.php ENDPATH**/ ?>