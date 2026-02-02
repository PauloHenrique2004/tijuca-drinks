<?php $__env->startSection('title', 'Depoimentos - '); ?>
<?php $__env->startSection('header-title', 'Depoimentos'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Depoimentos</h3>
                    <div class="card-tools">
                        <a class="btn btn-sm btn-primary" href="<?php echo e(route('gestor.depoimentos.create')); ?>">
                            <i class="fas fa-plus"></i> Adicionar
                        </a>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th style="width:80px;">Foto</th>
                            <th>Nome</th>
                            <th>Estrelas</th>
                            <th>Texto</th>
                            <th style="width:80px;">Ativo</th>
                            <th style="width:100px;">Ordem</th>
                            <th style="width:220px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $depoimentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td>
                                    <?php if($dep->foto): ?>
                                        <img style="max-width: 60px; height:60px; border-radius:50%; object-fit:cover;"
                                             src="<?php echo e(Storage::disk('storage_configuracoes')->url($dep->foto)); ?>"
                                             alt="<?php echo e($dep->nome); ?>">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($dep->nome); ?></td>
                                <td><?php echo e($dep->estrelas); ?> ★</td>
                                <td style="max-width: 350px; white-space: normal;">
                                    <?php echo e(Str::limit($dep->texto, 120)); ?>

                                </td>
                                <td><?php echo e($dep->ativo ? 'Sim' : 'Não'); ?></td>
                                <td><?php echo e($dep->ordem); ?></td>
                                <td class="text-right">
                                    <a class="btn btn-sm btn-primary" href="<?php echo e(route('gestor.depoimentos.edit', $dep->id)); ?>">
                                        <i class="fas fa-pencil-alt"></i> Editar
                                    </a>
                                    <a data-confirm="Tem certeza?" class="btn btn-sm btn-danger" rel="nofollow"
                                       href="#"
                                       onclick="event.preventDefault(); if(confirm('Tem certeza que deseja excluir?')) document.getElementById('delete-form-<?php echo e($dep->id); ?>').submit();">
                                        <i class="fas fa-trash"></i> Excluir
                                    </a>
                                    <form id="delete-form-<?php echo e($dep->id); ?>" action="<?php echo e(route('gestor.depoimentos.destroy', $dep->id)); ?>" method="POST" style="display:none;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7">Nenhum depoimento cadastrado.</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                    <?php echo e($depoimentos->links()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/depoimentos/index.blade.php ENDPATH**/ ?>