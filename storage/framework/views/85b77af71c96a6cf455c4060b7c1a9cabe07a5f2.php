<form method="POST" action="<?php echo e($action); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field($method); ?>

    <div class="card-body">

        
        <div class="form-group mb-0">
            <label for="home_podcast_imagem">Logo</label>
            <div class="alert alert-warning py-2" role="alert" style="margin-bottom:8px;">
                Dimensão recomendada: 579 × 432 px. Formatos: JPG/PNG/WebP.
            </div>
            <input type="file" class="form-control" id="logo" name="logo" accept=".jpg,.jpeg,.png,.webp">
            <?php if(!empty($configuracao->logo)): ?>
                <div class="mt-2">
                    <img src="<?php echo e(asset('/'.$configuracao->logo)); ?>" alt="Logo" style="max-height:50px; margin-bottom:20px">
                </div>
            <?php endif; ?>
        </div>

        
        <hr>
        <h5 class="mt-4 mb-2">Imagens dos benefícios</h5>











        <div class="form-group mb-3">
            <label for="beneficio1">Benefício 1</label>
            <input type="file" class="form-control" id="beneficio1" name="beneficio1" accept=".jpg,.jpeg,.png,.webp">

            <?php if(!empty($configuracao->beneficio1)): ?>
                <div class="mt-2 d-flex align-items-center">
                    <img src="<?php echo e(asset('/'.$configuracao->beneficio1)); ?>" alt="Benefício 1" style="max-height:60px;">

                    <button type="submit"
                            name="remove_beneficio1"
                            value="1"
                            class="btn btn-outline-danger btn-sm ml-3">
                        Remover
                    </button>
                </div>
            <?php endif; ?>
        </div>


        <div class="form-group mb-3">
            <label for="beneficio2">Benefício 2</label>
            <input type="file" class="form-control" id="beneficio2" name="beneficio2" accept=".jpg,.jpeg,.png,.webp">
            <?php if(!empty($configuracao->beneficio2)): ?>
                <div class="mt-2 d-flex align-items-center">
                    <img src="<?php echo e(asset('/'.$configuracao->beneficio2)); ?>" alt="Benefício 2" style="max-height:60px;">

                    <button type="submit"
                            name="remove_beneficio2"
                            value="1"
                            class="btn btn-outline-danger btn-sm ml-3">
                        Remover
                    </button>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group mb-3">
            <label for="beneficio3">Benefício 3</label>
            <input type="file" class="form-control" id="beneficio3" name="beneficio3" accept=".jpg,.jpeg,.png,.webp">
            <?php if(!empty($configuracao->beneficio3)): ?>
                <div class="mt-2 d-flex align-items-center">
                    <img src="<?php echo e(asset('/'.$configuracao->beneficio3)); ?>" alt="Benefício 3" style="max-height:60px;">

                    <button type="submit"
                            name="remove_beneficio3"
                            value="1"
                            class="btn btn-outline-danger btn-sm ml-3">
                        Remover
                    </button>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group mb-4">
            <label for="beneficio4">Benefício 4</label>
            <input type="file" class="form-control" id="beneficio4" name="beneficio4" accept=".jpg,.jpeg,.png,.webp">
            <?php if(!empty($configuracao->beneficio4)): ?>
                <div class="mt-2 d-flex align-items-center">
                    <img src="<?php echo e(asset('/'.$configuracao->beneficio4)); ?>" alt="Benefício 4" style="max-height:60px;">

                    <button type="submit"
                            name="remove_beneficio4"
                            value="1"
                            class="btn btn-outline-danger btn-sm ml-3">
                        Remover
                    </button>
                </div>
            <?php endif; ?>
        </div>


        
        <div class="form-group mb-0">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control" id="facebook" name="facebook"
                   value="<?php echo e(old('facebook', $configuracao->facebook)); ?>">
        </div>

        <div class="form-group mb-0">
            <label for="twitter">Twitter</label>
            <input type="text" class="form-control" id="twitter" name="twitter"
                   value="<?php echo e(old('twitter', $configuracao->twitter)); ?>">
        </div>

        <div class="form-group mb-0">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" id="instagram" name="instagram"
                   value="<?php echo e(old('instagram', $configuracao->instagram)); ?>">
        </div>

        <div class="form-group mt-5">
            <label for="whatsapplink">Whatsapp Link</label>
            <input type="text" class="form-control" id="whatsapplink" name="whatsapp_link"
                   value="<?php echo e(old('whatsapp_link', $configuracao->whatsapp_link)); ?>">
        </div>

        <div class="form-group mt-0">
            <label for="intagramiframe">Maps Iframe</label>
            <input type="text" class="form-control" id="maps_iframe" name="maps_iframe"
                   value="<?php echo e(old('maps_iframe', $configuracao->maps_iframe)); ?>">
        </div>

        <div class="form-group mt-0">
            <label for="googleanalytics">Google Analytics</label>
            <input type="text" class="form-control" id="googleanalytics" name="google_analytics"
                   value="<?php echo e(old('google_analytics', $configuracao->google_analytics)); ?>">
        </div>

        <div class="form-group mt-5">
            <label for="telefone1">Telefone 1</label>
            <input type="text" class="form-control" id="telefone1" name="telefone1"
                   value="<?php echo e(old('telefone1', $configuracao->telefone1)); ?>">
        </div>

        <div class="form-group mt-0">
            <label for="telefone2">Telefone 2</label>
            <input type="text" class="form-control" id="telefone2" name="telefone2"
                   value="<?php echo e(old('telefone2', $configuracao->telefone2)); ?>">
        </div>

        <div class="form-group mt-5">
            <label for="email1">E-mail 1</label>
            <input type="text" class="form-control" id="email1" name="email1"
                   value="<?php echo e(old('email1', $configuracao->email1)); ?>">
        </div>

        <div class="form-group mt-0">
            <label for="email2">E-mail 2</label>
            <input type="text" class="form-control" id="email2" name="email2"
                   value="<?php echo e(old('email2', $configuracao->email2)); ?>">
        </div>

        <div class="row mt-5">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="rua">Rua</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['rua'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="rua" name="rua"
                           value="<?php echo e(old('rua', $configuracao->rua)); ?>">
                    <?php $__errorArgs = ['rua'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['bairro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="bairro"
                           name="bairro"
                           value="<?php echo e(old('bairro', $configuracao->bairro)); ?>">
                    <?php $__errorArgs = ['bairro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['cidade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="cidade"
                           name="cidade"
                           value="<?php echo e(old('cidade', $configuracao->cidade)); ?>">
                    <?php $__errorArgs = ['cidade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['estado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="estado"
                           name="estado"
                           value="<?php echo e(old('estado', $configuracao->estado)); ?>">
                    <?php $__errorArgs = ['estado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="horario_funcionamento">Horário de Funcionamento</label>
            <input type="text" class="form-control" id="horario_funcionamento" name="horario_funcionamento"
                   value="<?php echo e(old('horario_funcionamento', $configuracao->horario_funcionamento)); ?>">
        </div>

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>
<?php /**PATH /var/www/resources/views/gestor/configuracoes/_form.blade.php ENDPATH**/ ?>