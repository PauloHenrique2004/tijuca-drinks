<?php $__env->startSection('title', 'Destaques de produtos - '); ?>
<?php $__env->startSection('header-title', 'Destaques de produtos'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Seções de destaque da home</h3>
                    <div class="card-tools">
                        <?php if($destaques->total() < 3): ?>
                            <a class="btn btn-sm btn-primary" href="<?php echo e(route('gestor.produtos_destaque.create')); ?>">
                                <i class="fas fa-plus"></i> Adicionar seção
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Nome da seção</th>
                            <th style="width:100px;">Ativo</th>
                            <th style="width:120px;">Ordem</th>
                            <th style="width:220px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $destaques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destaque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($destaque->nome); ?></td>
                                <td><?php echo e($destaque->ativo ? 'Sim' : 'Não'); ?></td>
                                <td><?php echo e($destaque->ordem); ?></td>
                                <td class="text-right">
                                    <a class="btn btn-sm btn-primary" href="<?php echo e(route('gestor.produtos_destaque.edit', $destaque->id)); ?>">
                                        <i class="fas fa-pencil-alt"></i> Editar
                                    </a>
                                    <a data-confirm="Tem certeza?" class="btn btn-sm btn-danger" rel="nofollow"
                                       href="#"
                                       onclick="event.preventDefault(); if(confirm('Tem certeza que deseja excluir?')) document.getElementById('delete-form-<?php echo e($destaque->id); ?>').submit();">
                                        <i class="fas fa-trash"></i> Excluir
                                    </a>
                                    <form id="delete-form-<?php echo e($destaque->id); ?>" action="<?php echo e(route('gestor.produtos_destaque.destroy', $destaque->id)); ?>" method="POST" style="display:none;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="4">Nenhuma seção de destaque cadastrada.</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                    <?php echo e($destaques->links()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/produtos_destaque/index.blade.php ENDPATH**/ ?>