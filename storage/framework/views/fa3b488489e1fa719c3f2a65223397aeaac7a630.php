<?php $__env->startSection('title', 'Clientes - '); ?>
<?php $__env->startSection('header-title', 'Clientes'); ?>

<?php $__env->startSection('card-tools'); ?>
    <a class="btn btn-primary content animate__animated animate__flipInX" href="<?php echo e(route('gestor.usuario')); ?>">
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
                    <th>E-mail</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($usuario->name); ?></td>
                        <td><?php echo e($usuario->email); ?></td>

                        <!-- Ações -->
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?php echo e(route('gestor.usuario', $usuario->id)); ?>">
                                <i class="fas fa-pencil-alt" aria-hidden="true"></i> Editar
                            </a>

                            <!-- Remover -->
                         
                                <?php if($usuario->pedidos()->count() == 0): ?>
                                    
                                    
                                    <a data-confirm="Tem certeza?" class="btn btn-sm btn-danger" rel="nofollow"
                                    data-method="delete" href="#"
                                    onclick="event.preventDefault(); if(confirm('Tem certeza que deseja excluir este cliente?')) { document.getElementById('delete-form-<?php echo e($usuario->id); ?>').submit(); }">
                                        <i class="fas fa-trash" aria-hidden="true"></i> Excluir
                                    </a>

                                    
                                    <form id="delete-form-<?php echo e($usuario->id); ?>"
                                        action="<?php echo e(route('gestor.usuarios.destroy', $usuario->id)); ?>" method="POST"
                                        style="display: none;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                    </form>

                                <?php else: ?>
                                    
                                    <span class="badge badge-secondary">Possui vendas concluídas</span>
                                <?php endif; ?>
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
        <?php echo e($usuarios->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/usuarios/index.blade.php ENDPATH**/ ?>