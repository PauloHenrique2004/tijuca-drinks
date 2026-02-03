<?php $__env->startSection('title', 'Busca: ' . $busca); ?>

<?php $__env->startSection('content'); ?>
    <section class="py-4 osahan-main-body" style=" min-height: 80vh;">
        <div class="container">
            <div class="d-flex align-items-center mb-5">
                <h4 class="titulo-sessoes-moderno">Resultados para: <?php echo e($busca); ?></h4>
                <div class="linha-decorativa-dourada"></div>
            </div>

            <?php if($produtos->count()): ?>
                <div class="row" style="justify-content: center">
                    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 col-md-3 mb-4">
                            <a href="<?php echo e(route('produtos.show', [$produto->slug, $produto->id])); ?>" class="card-drink-link">
                                <div class="card-drink">
                                    <div class="container-imagem">
                                        <img alt="<?php echo e($produto->nome); ?>" src="<?php echo e(asset($produto->fotoUrl())); ?>" class="img-fluid">
                                    </div>
                                    <div class="info-drink">
                                        <h6 class="nome-produto-moderno"><?php echo e($produto->nome); ?></h6>
                                        <span class="btn-ver-mais">Ver detalhes</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <div class="text-center py-5">
                    <h5 class="text-white opacity-50">Nenhum drink encontrado com o nome "<?php echo e($busca); ?>".</h5>
                    <a href="<?php echo e(route('home')); ?>" class="btn-ver-mais mt-3 d-inline-block">Voltar para a Home</a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<style>
    /* Estilo dos Títulos das Seções */
    .titulo-sessoes-moderno {
        color: #d7af51; /* Dourado */
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-right: 15px;
        font-size: 1.2rem;
    }

    .linha-decorativa-dourada {
        flex-grow: 1;
        height: 1px;
        background: linear-gradient(to right, #f1c40f, transparent);
    }

    /* O Card Moderno */
    .card-drink {
        background: #1a1a1a; /* Cinza quase preto */
        border: 1px solid #333;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
        box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }

    .card-drink:hover {
        transform: translateY(-5px);
        border-color: #f1c40f;
        box-shadow: 0 15px 30px rgba(241, 196, 15, 0.1);
    }

    .container-imagem {
        overflow: hidden;
        aspect-ratio: 1 / 1;
    }

    .container-imagem img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .card-drink:hover .container-imagem img {
        transform: scale(1.1);
    }

    /* Info e Nome */
    .info-drink {
        padding: 15px;
        text-align: center;
    }

    .nome-produto-moderno {
        color: #fff;
        font-weight: 500;
        font-size: 15px;
        margin-bottom: 8px;
        height: 40px; 
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        line-height: 1.3;
    }

    .btn-ver-mais {
        color: #f1c40f;
        font-size: 12px;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 1px;
        opacity: 0.7;
        transition: 0.3s;
        text-decoration: none;
    }

    .card-drink:hover .btn-ver-mais {
        opacity: 1;
    }

    .card-drink-link {
        text-decoration: none !important;
    }
</style>
<?php echo $__env->make('layouts.site.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/site/home/busca.blade.php ENDPATH**/ ?>