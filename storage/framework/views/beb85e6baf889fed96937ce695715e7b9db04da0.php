<!-- jQuery -->
<script src="<?php echo e(asset('adminlte/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<script src="<?php echo e(asset('adminlte/plugins/toastr/toastr.min.js')); ?>"></script>

<!-- ChartJS -->

<!-- Sparkline -->

<!-- JQVMap -->


<!-- jQuery Knob Chart -->

<!-- daterangepicker -->
<script src="<?php echo e(asset('adminlte/plugins/moment/moment.min.js')); ?>"></script>

<!-- Tempusdominus Bootstrap 4 -->

<!-- Summernote -->


<!-- overlayScrollbars -->
<script src="<?php echo e(asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('adminlte/js/adminlte.js')); ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css">

<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/messages/messages.pt-br.js" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('adminlte/js/demo.js')); ?>"></script>

<script src="<?php echo e(asset('adminlte/plugins/data-confirm/data-confirm.js')); ?>"></script>

<script src="<?php echo e(asset('js/jquery_mask_money.js')); ?>"></script>

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


<?php echo $__env->yieldContent('script'); ?>
<?php /**PATH /var/www/resources/views/layouts/gestor/includes/js.blade.php ENDPATH**/ ?>