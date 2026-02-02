<?php $__env->startSection('content'); ?>
    <div class="row" style="margin-bottom: 4em">
        <div class="col-lg-4">
            <div class="osahan-account bg-white rounded shadow-sm overflow-hidden">
                <div class="p-4 profile text-center border-bottom">
                    <h6 class="font-weight-bold m-0 mt-2">
                        <?php echo e(Auth::user()->firstName()); ?>

                    </h6>
                    <p class="small text-muted m-0">
                        <?php echo e(Auth::user()->email); ?>

                    </p>
                </div>
                <div class="account-sections">
                    <ul class="list-group">
                        <a href="<?php echo e(route('user.minha-conta')); ?>" class="text-decoration-none text-dark">
                            <li class="border-bottom bg-white d-flex align-items-center p-3">
                                <i class="icofont-user osahan-icofont bg-danger"></i> Minha Conta
                                <span class="badge badge-success p-1 badge-pill ml-auto"><i
                                        class="icofont-simple-right"></i></span>
                            </li>
                        </a>

                        <a href="<?php echo e(route('user.meus-enderecos.index')); ?>" class="text-decoration-none text-dark">
                            <li class="border-bottom bg-white d-flex align-items-center p-3">
                                <i class="icofont-address-book osahan-icofont bg-dark"></i>Meus Endereços
                                <span class="badge badge-success p-1 badge-pill ml-auto">
                                    <i class="icofont-simple-right"></i>
                                </span>
                            </li>
                        </a>
                        <a href="<?php echo e(route('user.meus-enderecos.create')); ?>" class="text-decoration-none text-dark">
                            <li class="border-bottom bg-white d-flex align-items-center p-3">
                                <i class="icofont-address-book osahan-icofont bg-dark"></i>
                                Cadastrar Endereço
                                <span class="badge badge-success p-1 badge-pill ml-auto">
                                    <i class="icofont-simple-right"></i>
                                </span>
                            </li>
                        </a>

                        <a href="/" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="text-decoration-none text-dark">
                            <li class="border-bottom bg-white d-flex  align-items-center p-3">
                                <i class="icofont-lock osahan-icofont bg-danger"></i> Sair
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-lg-8 p-4 bg-white rounded shadow-sm">
            <h4 class="mb-4 profile-title"><?php echo $__env->yieldContent('header-title'); ?></h4>

            <div style="margin-top: -14px; margin-bottom: 14px">Somente digite se desejar alterar</div>

            <?php echo $__env->yieldContent('content-content'); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/resources/views/user/_user.blade.php ENDPATH**/ ?>