<?php $__env->startSection('title', 'LGPD Aceites - '); ?>
<?php $__env->startSection('header-title', 'LGPD Aceites'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card-body">
        <!----------------- Busca ----------------->
        <form class="mt-2 mb-4" accept-charset="UTF-8" method="get"
              action="<?php echo e(route('gestor.lgpd_aceites.index')); ?>">
            <div class="row">
                <div class="col-md-2">
                    <div class="input-group mb-3">
                        <input name="versao" placeholder="Número da versão" class="form-control"
                               style="min-width: 120px" type="number" value="<?php echo e(request()->query('versao')); ?>">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group mb-3">
                        <input name="email" placeholder="Pesquisa por e-mail" class="form-control"
                               style="min-width: 120px" type="text" value="<?php echo e(request()->query('email')); ?>">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group mb-3">
                        <input name="cookie" placeholder="Pesquisa por cookie" class="form-control"
                               style="min-width: 120px" type="text" value="<?php echo e(request()->query('cookie')); ?>">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group mb-3">
                        <input name="ip" placeholder="Pesquisa por IP" class="form-control"
                               style="min-width: 120px" type="text" value="<?php echo e(request()->query('ip')); ?>">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group-append">
                        <button class="btn btn-primary"><i class="fa fa-search"></i> </button>
                        <a class="btn btn-default ml-1" href="<?php echo e(route('gestor.lgpd_aceites.index')); ?>">Limpar</a>
                    </div>
                </div>

            </div>
        </form>
        <!---------------- / Busca ---------------->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Versão</th>
                    <th>E-mail</th>
                    <th>Cookie</th>
                    <th>IP</th>
                    <th>Aceito em</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $lgpdAceites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lgpdAceite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($lgpdAceite->lgpd_termo_id); ?></td>
                        <td><?php echo e($lgpdAceite->user ? $lgpdAceite->user->email : ''); ?></td>
                        <td><?php echo e($lgpdAceite->cookie); ?></td>
                        <td><?php echo e($lgpdAceite->ip); ?></td>
                        <td><?php echo e($lgpdAceite->aceito_em->format('d/m/Y H:i')); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer clearfix">
        <?php echo e($lgpdAceites->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/lgpd_aceites/index.blade.php ENDPATH**/ ?>