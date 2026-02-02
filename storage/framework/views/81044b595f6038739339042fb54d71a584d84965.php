<?php $__env->startSection('title', 'Resultado da busca - '); ?>

<?php $__env->startSection('content'); ?>
    <section class="py-4 osahan-main-body">
        <div class="container">
            <h1 class="h5 mb-4 titulo-paginas-internas">
                Resultado da busca por: "<?php echo e($busca); ?>"
            </h1>

            <?php if($produtos->count()): ?>
                <div class="row">
                    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 col-md-3 mb-3">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                <div class="list-card-image produto">
                                    <a href="<?php echo e(route('produtos.show', [$produto->slug, $produto])); ?>"
                                       class="color-titulo-lista-produtos">
                                        <img alt="<?php echo e($produto->nome); ?>"
                                             src="<?php echo e(asset($produto->fotoUrl())); ?>"
                                             class="img-fluid item-img w-100 mb-3">

                                        <h6 class="produto-nome "><?php echo e($produto->nome); ?></h6>

                                        <h6 class="produto-valor" style="font-size: 17px;font-weight: 800; color: #87a3af;">
                                            <?php echo $__env->make('shared.produto._produto-preco', compact('produto'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <p>Nenhum produto encontrado para esta busca.</p>
            <?php endif; ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<style>
    .produto h6 {
        font-weight: 400;
        font-size: 14px;
        margin-left: 7px;
    }
</style>

<?php echo $__env->make('layouts.site.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/site/home/busca.blade.php ENDPATH**/ ?>