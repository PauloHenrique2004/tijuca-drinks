<?php $__env->startSection('title', 'Cadastrar - Topo Banner - '); ?>
<?php $__env->startSection('header-title', 'Cadastrar - Banner principal'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cadastrar Banner principal</h3>
                </div>
                <?php echo $__env->make('gestor.topo_banners._form', [
                    'action' => route('gestor.topo_banners.store'),
                    'method' => 'POST'
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/topo_banners/create.blade.php ENDPATH**/ ?>