<?php $__env->startSection('title', 'Horário Configurar Disponibilidade - '); ?>
<?php $__env->startSection('header-title', 'Configurar Horário de Disponibilidade de Pedidos'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card-body">
        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('gestor.horario', ['id' => $id])->html();
} elseif ($_instance->childHasBeenRendered('vXROhRw')) {
    $componentId = $_instance->getRenderedChildComponentId('vXROhRw');
    $componentTag = $_instance->getRenderedChildComponentTagName('vXROhRw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vXROhRw');
} else {
    $response = \Livewire\Livewire::mount('gestor.horario', ['id' => $id]);
    $html = $response->html();
    $_instance->logRenderedChild('vXROhRw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/horarios/livewire.blade.php ENDPATH**/ ?>