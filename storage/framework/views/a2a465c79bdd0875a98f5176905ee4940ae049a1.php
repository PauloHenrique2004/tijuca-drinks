<?php echo \Livewire\Livewire::scripts(); ?>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js?"></script>

<script src="<?php echo e(asset('site/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('site/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- slick Slider JS-->
<script src="<?php echo e(asset('site/vendor/slick/slick.min.js')); ?>"></script>
<!-- Sidebar JS-->
<script src="<?php echo e(asset('site/vendor/sidebar/hc-offcanvas-nav.js')); ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo e(asset('site/js/osahan.js')); ?>"></script>

<script src="<?php echo e(asset('adminlte/plugins/toastr/toastr.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/notify.js')); ?>"></script>
<?php if(Session::has('notify') || Session::has('error')): ?>
    <script>
        $(document).ready(function () {
            <?php if(Session::has('notify')): ?>
            notificar({type: 'success', message: "<?php echo e(Session::get('notify')); ?>"});
            <?php elseif(Session::has('error')): ?>
            notificar({type: 'error', message: "<?php echo e(Session::get('error')); ?>"});
            <?php endif; ?>
        })
    </script>
<?php endif; ?>

<?php echo $configuracoes->google_analytics; ?>


<?php echo $__env->yieldContent('script'); ?>


    <script>
        $(function () {
            $('.categories-slider').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
                infinite: false,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });
        });
    </script>

<?php /**PATH /var/www/resources/views/layouts/site/includes/js.blade.php ENDPATH**/ ?>