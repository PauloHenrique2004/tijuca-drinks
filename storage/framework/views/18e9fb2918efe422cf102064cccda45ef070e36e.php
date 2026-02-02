<?php $__env->startSection('title', ($tituloPagina ?? $categoria->nome) . ' - '); ?>

<?php $__env->startSection('content'); ?>
    <section class="py-5 osahan-main-body">
        <div class="container">
            
            <div class="d-flex align-items-center mb-5">
                <h1 class="titulo-paginas-internas-moderno mb-0">
                    <?php echo e($tituloPagina ?? $categoria->nome); ?>

                </h1>
                <div class="linha-decorativa-dourada-interna"></div>
            </div>

            <?php if($produtos->count()): ?>
                <div class="row" style="justify-content: center">
                    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 col-md-3 mb-4">
                            <a href="<?php echo e(route('produtos.show', [$produto->slug, $produto->id])); ?>" class="card-drink-link">
                                <div class="card-drink">
                                    <div class="container-imagem">
                                        <img alt="<?php echo e($produto->nome); ?>" 
                                             src="<?php echo e(asset($produto->fotoUrl())); ?>" 
                                             class="img-fluid">
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

                
                <div class="mt-5 d-flex justify-content-center pagination-moderna">
                    <?php echo e($produtos->links()); ?>

                </div>
            <?php else: ?>
                <div class="text-center py-5">
                    <i class="icofont-search-document text-muted display-1"></i>
                    <p class="mt-3 text-muted">Não há produtos nesta categoria no momento.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <style>
        /* Ajuste do Título Interno */
        .titulo-paginas-internas-moderno {
            color: #f1c40f; /* Dourado */
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 1.5rem;
            margin-right: 20px;
        }

        .linha-decorativa-dourada-interna {
            flex-grow: 1;
            height: 2px;
            background: linear-gradient(to right, #f1c40f, transparent);
        }

        /* Estrutura do Card (Igual à Home) */
        .card-drink {
            background: #1a1a1a; 
            border: 1px solid #333;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
            box-shadow: 0 10px 20px rgba(0,0,0,0.4);
        }

        .card-drink:hover {
            transform: translateY(-8px);
            border-color: #f1c40f;
            box-shadow: 0 15px 30px rgba(241, 196, 15, 0.15);
        }

        .container-imagem {
            overflow: hidden;
            aspect-ratio: 1 / 1; /* Mantém a imagem sempre quadrada */
            background: #000;
        }

        .container-imagem img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .card-drink:hover .container-imagem img {
            transform: scale(1.15);
        }

        /* Nome do Produto */
        .info-drink {
            padding: 18px 12px;
            text-align: center;
        }

        .nome-produto-moderno {
            color: #ffffff;
            font-weight: 500;
            font-size: 15px;
            margin-bottom: 10px;
            height: 40px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.3;
        }

        .btn-ver-mais {
            color: #f1c40f;
            font-size: 11px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1.5px;
            display: block;
            margin-top: 5px;
        }

        .card-drink-link {
            text-decoration: none !important;
        }

        /* Ajuste para Mobile */
        @media (max-width: 992px) {
            .osahan-main-body { margin-top: 7em !important; }
        }

        @media (max-width: 768px) {
            .titulo-paginas-internas-moderno { font-size: 1.1rem; }
            .info-drink { padding: 12px 8px; }
            .nome-produto-moderno { font-size: 13px; height: 35px; }
        }

        /* Estilização básica para Paginação do Laravel não sumir no fundo escuro */
        .pagination-moderna .page-link {
            background-color: #1a1a1a;
            border-color: #333;
            color: #fff;
        }
        .pagination-moderna .page-item.active .page-link {
            background-color: #f1c40f;
            border-color: #f1c40f;
            color: #000;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/site/categoria/show.blade.php ENDPATH**/ ?>