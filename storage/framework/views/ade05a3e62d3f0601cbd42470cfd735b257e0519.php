<?php $__env->startSection('title', 'Meus Endereços - '); ?>
<?php $__env->startSection('header-title', 'Meus Endereços'); ?>


<?php $__env->startSection('content-content'); ?>
    <?php $__currentLoopData = $enderecos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $endereco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="custom-control custom-radio px-0 mb-3 position-relative border-custom-radio">
            <label class="custom-control-label w-100" for="">
                <div class="p-3 bg-white rounded shadow-sm w-100">
                    <div class="d-flex align-items-center mb-2">
                        <p class="mb-0 h6">
                            <?php echo e($endereco->endereco); ?> <?php echo e($endereco->numero); ?>,
                            <?php echo e($endereco->enderecoAtendido->bairroNome()); ?>

                        </p>
                    </div>

                    <p class="small text-muted m-0"><?php echo e($endereco->complemento); ?></p>

                    <p class="small text-muted m-0">
                        <?php echo e($endereco->enderecoAtendido->municipio->nome()); ?> - <?php echo e($endereco->enderecoAtendido->uf); ?>

                    </p>
                    <p class="pt-2 m-0 text-right">
                    <span class="small">
                        <a href="<?php echo e(route('user.meus-enderecos.edit', $endereco)); ?>"
                           class="text-decoration-none text-success">
                            <i class="icofont-edit"></i> Editar
                        </a>
                    </span>

                        <span class="small ml-3">
                        <a href="#"
                           onclick="event.preventDefault(); document.getElementById('endereco-form-<?php echo e($endereco->id); ?>').submit();"
                           class="text-decoration-none text-danger">
                            <i class="icofont-trash"></i> Remover
                        </a>
                    </span>
                    </p>
                </div>
            </label>
        </div>

        <form id="endereco-form-<?php echo e($endereco->id); ?>" action="<?php echo e(route('user.meus-enderecos.destroy', $endereco)); ?>"
              method="POST"
              style="display: none;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user._user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.site.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/user/enderecos/index.blade.php ENDPATH**/ ?>