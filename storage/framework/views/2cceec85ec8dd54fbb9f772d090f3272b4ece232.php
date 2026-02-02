
<section class="py-4 osahan-main-body c-desktop" style="padding-bottom: initial !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-principal-slider">
                    <?php $__currentLoopData = $topoBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <a href="<?php echo e($banner->link ?: '#'); ?>">
                                <img
                                    src="<?php echo e(Storage::disk('storage_topo_banners')->url($banner->imagem_desktop)); ?>"
                                    alt="<?php echo e($banner->titulo); ?>"
                                    class="w-100 d-block rounded"
                                >
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-4 osahan-main-body c-mobile">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-principal-slider">
                    <?php $__currentLoopData = $topoBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <a href="<?php echo e($banner->link ?: '#'); ?>">
                                <img
                                    src="<?php echo e(Storage::disk('storage_topo_banners')->url($banner->imagem_mobile ?: $banner->imagem_desktop)); ?>"
                                    alt="<?php echo e($banner->titulo); ?>"
                                    class="w-100 d-block rounded"
                                >
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /var/www/resources/views/site/home/_banner_principal.blade.php ENDPATH**/ ?>