<?php $__env->startSection('title', 'Banners principais - '); ?>
<?php $__env->startSection('header-title', 'Banners principais'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Banners principais</h3>
                    <div class="card-tools">
                        <a class="btn btn-sm btn-primary" href="<?php echo e(route('gestor.topo_banners.create')); ?>">
                            <i class="fas fa-plus"></i> Adicionar
                        </a>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th style="width:160px;">Desktop</th>
                            <th style="width:120px;">Mobile</th>
                            <th>Título</th>
                            <th>Link</th>

                            <th style="width:120px;">Ordem</th>
                            <th style="width:220px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $topoBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td>
                                    <?php if($banner->imagem_desktop): ?>
                                        <img style="max-width: 140px; height:auto;"
                                             src="<?php echo e(Storage::disk('storage_configuracoes')->url($banner->imagem_desktop)); ?>"
                                             alt="Desktop <?php echo e($banner->titulo); ?>">
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($banner->imagem_mobile): ?>
                                        <img style="max-width: 100px; height:auto;"
                                             src="<?php echo e(Storage::disk('storage_configuracoes')->url($banner->imagem_mobile)); ?>"
                                             alt="Mobile <?php echo e($banner->titulo); ?>">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($banner->titulo); ?></td>
                                <td><?php echo e($banner->link); ?></td>

                                <td><?php echo e($banner->ordem); ?></td>
                                <td class="text-right">
                                    <a class="btn btn-sm btn-primary" href="<?php echo e(route('gestor.topo_banners.edit', $banner->id)); ?>">
                                        <i class="fas fa-pencil-alt"></i> Editar
                                    </a>
                                    <a data-confirm="Tem certeza?" class="btn btn-sm btn-danger" rel="nofollow"
                                       href="#"
                                       onclick="event.preventDefault(); if(confirm('Tem certeza que deseja excluir?')) document.getElementById('delete-form-<?php echo e($banner->id); ?>').submit();">
                                        <i class="fas fa-trash"></i> Excluir
                                    </a>
                                    <form id="delete-form-<?php echo e($banner->id); ?>" action="<?php echo e(route('gestor.topo_banners.destroy', $banner->id)); ?>" method="POST" style="display:none;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7">Nenhum topo banner cadastrado.</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                    <?php echo e($topoBanners->links()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/topo_banners/index.blade.php ENDPATH**/ ?>