<?php $__env->startSection('before-content'); ?>
    <?php echo $__env->make('site.home._banner_principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <!-- home page -->
            <div class="osahan-home-page">
                <!-- body -->
                <div class="osahan-body">
                    <?php echo $__env->make('site.home._beneficios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('site.home._categorias', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('site.home._slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('site.home._produtos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('site.home._depoimentos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>

        <?php echo $__env->make('site.home._whatsapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <style>
        .osahan-master-body {
            margin-top: 0;
            padding-top: 0 !important
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/site/home/index.blade.php ENDPATH**/ ?>