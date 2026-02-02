<?php $__env->startSection('title', 'Cadastrar - Depoimento - '); ?>
<?php $__env->startSection('header-title', 'Cadastrar - Depoimento'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar Depoimento</h3>
                </div>
                <?php echo $__env->make('gestor.depoimentos._form', [
                    'action' => route('gestor.depoimentos.store'),
                    'method' => 'POST'
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/depoimentos/create.blade.php ENDPATH**/ ?>