<?php $__env->startSection('title', 'Login - '); ?>
<?php $__env->startSection('header-title', 'Digite seus dados para iniciar'); ?>


<?php $__env->startSection('content'); ?>
    <div class="row" style="margin-bottom: 5em">
        <div class="col-lg-4 p-4 bg-white rounded shadow-sm" style="margin: 0 auto">
            <h4 class="mb-4 profile-title">Entrar</h4>
            <div id="edit_profile">
                <div class="p-0">

                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group mb-3">
                            <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   required
                                   autofocus placeholder="E-mail" value="<?php echo e(old('email')); ?>">

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-3">
                            <input type="password" name="password"
                                   class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required
                                   placeholder="Senha">

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember"
                                           name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                    <label for="remember">
                                        Lembrar-me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-success btn-block">ENTRAR</button>
                            </div>
                            <!-- /.col -->
                        </div>

                        <?php if(Route::has('password.request')): ?>
                            <p class="mt-2 mb-1">
                                <a href="<?php echo e(route('password.request')); ?>" style="color: #7e7e7e">
                                    Esqueci minha senha
                                </a>
                            </p>
                        <?php endif; ?>

                        <p class="mt-2 mb-1">
                            <a href="<?php echo e(route('registro')); ?>" class="btn btn-success btn-block" style="color: #fff">
                                QUERO ME CADASTRAR
                            </a>
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/auth/login.blade.php ENDPATH**/ ?>