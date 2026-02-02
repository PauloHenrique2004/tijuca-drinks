<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?php echo e(asset('images/favicon.ico')); ?>" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
    <link href="<?php echo e(asset('images/favicon.ico')); ?>" rel="apple-touch-icon" type="image/png"/>

    <title><?php echo $__env->yieldContent('title'); ?>Gestor - <?php echo e(config('app.name')); ?></title>

    <?php echo $__env->make('layouts.gestor.includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body class="sidebar-mini control-sidebar-slide-open accent-info">

<div class="wrapper">
    <?php echo $__env->make('layouts.gestor.includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.gestor.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content-wrapper" style="min-height: 1244.06px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <section class="content animate__animated animate__fadeIn">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="card">
                                    <?php if(View::hasSection('header-title')): ?>
                                        <div class="card-header">
                                            <h1 class="card-title"><?php echo $__env->yieldContent('header-title'); ?></h1>

                                            <div class="card-tools">
                                                <div class="float-right">
                                                    <?php echo $__env->yieldContent('card-tools'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php echo $__env->yieldContent('content'); ?>

                                    <!-- Slot usado para Livewire Route Binding -->
                                    <?php echo e($slot?? ''); ?>

                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <?php echo $__env->make('layouts.gestor.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php echo \Livewire\Livewire::scripts(); ?>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js?"></script>

<?php echo $__env->make('layouts.gestor.includes.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /var/www/resources/views/layouts/gestor/gestor.blade.php ENDPATH**/ ?>