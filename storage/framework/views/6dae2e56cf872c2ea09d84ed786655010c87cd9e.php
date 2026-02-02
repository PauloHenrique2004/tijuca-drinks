<?php $__env->startSection('title', 'Home - '); ?>
<?php $__env->startSection('header-title', 'Configurações - Editar'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('gestor.configuracoes._form', ['action' => route('gestor.configuracoes.update', 1), 'method' => 'PUT'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/configuracoes/edit.blade.php ENDPATH**/ ?>