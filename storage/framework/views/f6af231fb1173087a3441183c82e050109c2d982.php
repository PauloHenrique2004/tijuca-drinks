<div class="py-3 osahan-promos banner-secundario" id="slides">
    <div class="promo-slider pb-0 mb-0">
        <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="osahan-slider-item mx-2">
                <a href="<?php echo e($slide->promocional ? route('promocoes') : $slide->link); ?>">
                    <img src="<?php echo e(asset($slide->fotoUrl())); ?>" class="img-fluid mx-auto rounded"
                         alt="<?php echo e($slide->titulo); ?>">
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>



<?php /**PATH /var/www/resources/views/site/home/_slide.blade.php ENDPATH**/ ?>