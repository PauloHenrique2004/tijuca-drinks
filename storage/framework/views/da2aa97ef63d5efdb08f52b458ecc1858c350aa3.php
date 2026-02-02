<?php $__env->startSection('title', 'Card - '); ?>
<?php $__env->startSection('header-title', 'Card'); ?>

<?php $__env->startSection('card-tools'); ?>
    <a class="btn btn-primary content animate__animated animate__flipInX" href="<?php echo e(route('gestor.slide')); ?>">
        <i class="fas fa-plus" aria-hidden="true"></i> Cadastrar
    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Ordem</th>
                    <th>Promocional</th>
                    <th><i class="fas fa-calendar-alt"></i> Cadastro</th>
                    <th><i class="fas fa-calendar-alt"></i> Atualização</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($slide->titulo); ?></td>
                        <td><?php echo e($slide->ordem); ?></td>
                        <td><?php echo e($slide->promocional ? 'Sim' : 'Não'); ?></td>
                        <td><?php echo e($slide->created_at->format('d/m/Y H:i')); ?></td>
                        <td><?php echo e($slide->updated_at->format('d/m/Y H:i')); ?></td>

                        <!-- Ações -->
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?php echo e(route('gestor.slide', $slide->id)); ?>">
                                <i class="fas fa-pencil-alt" aria-hidden="true"></i> Editar
                            </a>

                            <!-- Remover -->
                            <a data-confirm="Tem certeza?" class="btn btn-sm btn-danger" rel="nofollow"
                               data-method="delete"
                               href="#"
                               onclick="event.preventDefault(); document.getElementById('logout-form-<?php echo e($slide->id); ?>').submit();">
                                <i class="fas fa-trash" aria-hidden="true"></i> Excluir
                            </a>

                            <form id="logout-form-<?php echo e($slide->id); ?>"
                                  action="<?php echo e(route('gestor.slides.destroy', $slide->id)); ?>" method="POST"
                                  style="display: none;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                            </form>
                            <!-- / Remover -->
                        </td>
                        <!-- / Ações -->
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer clearfix">
        <?php echo e($slides->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/slides/index.blade.php ENDPATH**/ ?>