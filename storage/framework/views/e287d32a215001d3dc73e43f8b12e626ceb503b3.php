
<?php if($depoimentos->count()): ?>
    <section class="py-5" id="depoimentos">
        <div class="container">

     <div class="d-flex align-items-center mb-4 mt-5">
    <h4 class="titulo-sessoes-moderno mb-0">Depoimentos</h4>
    <div class="linha-decorativa-dourada"></div>
</div>

            <div id="depoimentosCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <?php $__currentLoopData = $depoimentos->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunkIndex => $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item <?php echo e($chunkIndex === 0 ? 'active' : ''); ?>">
                            <div class="row justify-content-center">

                                <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-12 col-md-4 mb-3">
                                        <div class="depo-card text-center p-4 h-100">
                                            <div class="mb-3">


                                                <img src="<?php echo e(Storage::disk('storage_configuracoes')->url($dep->foto)); ?>"
                                                     alt="<?php echo e($dep->nome); ?>"
                                                     class="rounded-circle"
                                                     style="width:70px;height:70px;object-fit:cover;">

                                            </div>
                                            <h5 class="mb-1"><?php echo e($dep->nome); ?></h5>

                                            <div class="mb-2" style="color:#f5b400;">
                                                <?php for($i = 1; $i <= 5; $i++): ?>
                                                    <?php echo e($i <= $dep->estrelas ? '★' : '☆'); ?>

                                                <?php endfor; ?>
                                            </div>

                                            <p class="mb-0 text-muted small">
                                                <?php echo e($dep->texto); ?>

                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <!-- Controles estilo bolinha -->
                <button class="depo-control depo-control-prev"
                        type="button"
                        data-target="#depoimentosCarousel"
                        data-slide="prev">
                    ‹
                </button>

                <button class="depo-control depo-control-next"
                        type="button"
                        data-target="#depoimentosCarousel"
                        data-slide="next">
                    ›
                </button>

            </div>
        </div>
    </section>
<?php endif; ?>


<style>
    .depo-card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    }

    @media (max-width: 767.98px) {
        /* no mobile cada slide já vira 1 por linha pelo col-12,
           então mantém o layout, ocupando a tela inteira */
    }

    .depo-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        border: none;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #fff;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
    }

    .depo-control-prev {
        left: 0;
    }

    .depo-control-next {
        right: 0;
    }

    .depo-control:hover {
        background: #f5f5f5;
    }

</style>
<?php /**PATH /var/www/resources/views/site/home/_depoimentos.blade.php ENDPATH**/ ?>