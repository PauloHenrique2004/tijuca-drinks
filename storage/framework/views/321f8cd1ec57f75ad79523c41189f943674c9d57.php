<?php $__env->startSection('title', 'LGPD Termos - '); ?>
<?php $__env->startSection('header-title', 'LGPD Termos'); ?>

<?php $__env->startSection('card-tools'); ?>
    <a class="btn btn-primary content animate__animated animate__flipInX" href="<?php echo e(route('gestor.lgpd_termo')); ?>">
        <i class="fas fa-plus" aria-hidden="true"></i> Atualizar versão atual
    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Versão</th>
                    <th>Aceite de clientes</th>
                    <th>Aceite de cookies</th>
                    <th><i class="fas fa-calendar-alt"></i> Cadastrado em</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $lgpdTermos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lgpdtermo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            Versão <?php echo e($lgpdtermo->id); ?>

                            <?php if($lgpdTermoAtual && $lgpdTermoAtual->id == $lgpdtermo->id): ?>
                                <b>(Termo atual)</b>
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($lgpdtermo->contasAceites->count()); ?></td>
                        <td><?php echo e($lgpdtermo->cookieAceites->count()); ?></td>
                        <td><?php echo e($lgpdtermo->created_at->format('d/m/Y H:i')); ?></td>

                        <!-- Ações -->
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?php echo e(route('gestor.lgpd_termo', $lgpdtermo->id)); ?>">
                                <i class="fas fa-eye" aria-hidden="true"></i> Visualizar
                            </a>
                        </td>
                        <!-- / Ações -->
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer clearfix">
        <?php echo e($lgpdTermos->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/lgpd_termos/index.blade.php ENDPATH**/ ?>