<?php $__env->startSection('title', "$pagina->titulo - "); ?>
<?php $__env->startSection('og:title', $pagina->titulo); ?>
<?php $__env->startSection('description', $pagina->titulo); ?>



<?php $__env->startSection('content'); ?>


    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="about-card d-flex flex-column flex-md-row align-items-stretch p-4 p-md-5">

                        
                        <?php if(!empty($pagina->foto)): ?>
                            <div class="about-photo mb-4 mb-md-0 mr-md-4 text-center">
                                <img src="<?php echo e(Storage::disk('storage_configuracoes')->url($pagina->foto)); ?>"
                                     alt="<?php echo e($pagina->titulo); ?>">
                            </div>
                        <?php endif; ?>

                        
                        <div class="about-text">
                            <h1 class="h3 mb-3 about-title" style="color: #d7af51"><?php echo e($pagina->titulo); ?></h1>

                            <div class="about-content text-justify">
                                <?php echo $pagina->conteudo; ?>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <style>
        .about-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.06);
        }

        .about-photo img {
            max-width: 260px;
            border-radius: 20px;
            object-fit: cover;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        }

        .about-title {
            color: #87a3af;
            font-weight: 600;
        }

        .about-content p {
            margin-bottom: .9rem;
            line-height: 1.7;
        }

        @media (max-width: 767.98px) {
            .about-card {
                text-align: center;
            }
            .about-photo {
                margin-right: 0 !important;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/site/paginas/show.blade.php ENDPATH**/ ?>