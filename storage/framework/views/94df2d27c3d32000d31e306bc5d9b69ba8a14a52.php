<div class="col-md-12 mt-2 mt-2">
    <div class="color-palette-set">

        <div style="display: flex; width: 100%">
            <div wire:click.confirm.prevent="salvar" class="bg-green color-palette"
                 style="border-radius: 5px 0 0 0; cursor: pointer; width: 70%">
                <div style="width: fit-content; margin: 0 auto;">
                    <i class="nav-icon fas fa-save"></i> Salvar
                </div>
            </div>

            <div wire:click.confirm.prevent="remover" class="bg-danger color-palette"
                 style="border-radius: 0 5px 0 0; cursor: pointer; width: 30%">
                <div style="width: fit-content; margin: 0 auto;">
                    <i class="nav-icon fas fa-trash"></i> Remover
                </div>
            </div>
        </div>


        <div class="color-palette"
             style="background-color: white !important; border: 1px solid #6c757d; border-radius: 0 0 5px 5px; padding: 5px">

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="uf">*Localidade</label>
                        <select class="custom-select <?php $__errorArgs = ['endereco.endereco_atendido_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="uf" wire:model="endereco.endereco_atendido_id" required>
                            <option></option>
                            <?php $__currentLoopData = $enderecosAtendidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $endereco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($endereco->id); ?>">
                                    <?php echo e($endereco->uf); ?> - <?php echo e($endereco->municipio->nome()); ?> - <?php echo e($endereco->bairroNome()); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <?php $__errorArgs = ['endereco.endereco_atendido_id'];
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
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="endereco">*Endereço</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['endereco.endereco'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               id="endereco" wire:model.debounce.500ms="endereco.endereco">

                        <?php $__errorArgs = ['endereco.endereco'];
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
                        <label for="numero">*Número</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['endereco.numero'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               id="numero" wire:model.debounce.500ms="endereco.numero">

                        <?php $__errorArgs = ['endereco.numero'];
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
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['endereco.complemento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               id="complemento" wire:model.debounce.500ms="endereco.complemento">

                        <?php $__errorArgs = ['endereco.complemento'];
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

        </div>
    </div>
</div>
<?php /**PATH /var/www/resources/views/livewire/gestor/usuario/endereco.blade.php ENDPATH**/ ?>