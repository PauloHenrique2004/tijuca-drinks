<?php $__env->startSection('title', $produto->nome.' - Grupos'); ?>
<?php $__env->startSection('header-title', $produto->nome.' - Grupos'); ?>

<?php $__env->startSection('card-tools'); ?>
    <a class="btn btn-default content animate__animated animate__flipInX"
       href="<?php echo e(route('gestor.produto.produto', $produto)); ?>">
        <i class="nav-icon fas fa-arrow-left"></i>
        Produto
    </a>

    <a class="btn btn-primary content animate__animated animate__flipInX"
       href="<?php echo e(route('gestor.produto.grupo', $produto)); ?>">
        <i class="fas fa-plus" aria-hidden="true"></i> Cadastrar
    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ordem</th>
                    <th>Tipo</th>
                    <th>Mínimo</th>
                    <th>Máximo</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $grupos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grupo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($grupo->nome); ?></td>
                        <td><?php echo e($grupo->ordem); ?></td>
                        <td><?php echo e($grupo->tipoNome()); ?></td>
                        <td><?php echo e($grupo->quantidade_minima); ?></td>
                        <td><?php echo e($grupo->quantidade_maxima); ?></td>

                        <!-- Ações -->
                        <td>
                            <a class="btn btn-sm btn-primary"
                               href="<?php echo e(route('gestor.produto.grupo', [$produto, $grupo])); ?>">
                                <i class="fas fa-pencil-alt" aria-hidden="true"></i> Editar
                            </a>

                            <!-- Remover -->
                            <a data-confirm="Tem certeza?" class="btn btn-sm btn-danger" rel="nofollow"
                               data-method="delete"
                               href="<?php echo e(route('gestor.produto.grupo.destroy', $grupo->id)); ?>">
                                <i class="fas fa-trash" aria-hidden="true"></i> Excluir
                            </a>
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
        <?php echo e($grupos->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/produto/produto_grupos/index.blade.php ENDPATH**/ ?>