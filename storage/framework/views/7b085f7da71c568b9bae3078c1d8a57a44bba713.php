<?php $__env->startSection('title', 'Editar - Destaque de produtos - '); ?>
<?php $__env->startSection('header-title', 'Editar - Destaque de produtos'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar seção de destaque</h3>
                </div>
                <?php echo $__env->make('gestor.produtos_destaque._form', [
                    'action' => route('gestor.produtos_destaque.update', $destaque),
                    'method' => 'PUT'
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/produtos_destaque/edit.blade.php ENDPATH**/ ?>