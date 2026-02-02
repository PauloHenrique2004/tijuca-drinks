<form wire:submit.prevent="salvar">
    <div id="edit_profile">
        <div class="p-0">

            <div class="row">
                <?php if(!$endereco->exists): ?>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="enderecoCep">CEP</label>

                            <input wire:model.debounce.500ms="endereco.cep" type="tel" id="enderecoCep"
                                   class="form-control" placeholder="CEP" maxlength="8" autocomplete="none">
                        </div>
                    </div>
                <?php endif; ?>

                <div class="col-sm-6" id="municipio">
                    <div class="form-group">
                        <label for="enderecoMunicipio">*Município</label>

                        <?php if(!$endereco->id): ?>
                            <select wire:model="municipioId" id="enderecoMunicipio"
                                    class="form-control <?php $__errorArgs = ['municipioId'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <option value=""></option>

                                <?php $__currentLoopData = $municipios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($municipio->LOC_NU); ?>">
                                        <?php echo e($municipio->nome()); ?> - <?php echo e($municipio->uf()); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <?php $__errorArgs = ['municipioId'];
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
                        <?php else: ?>
                            <input disabled type="text" id="enderecoMunicipio"
                                   class="form-control"
                                   value="<?php echo e($endereco->enderecoAtendido->municipio->nome()); ?> - <?php echo e($endereco->enderecoAtendido->uf); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="row" id="bairro">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="enderecoBairro">*Bairro</label>

                        <?php if(!$endereco->id): ?>
                            <select wire:model="endereco.endereco_atendido_id" id="enderecoBairro"
                                    class="form-control <?php $__errorArgs = ['endereco.endereco_atendido_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <option value=""></option>

                                <?php $__currentLoopData = $enderecos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $endereco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($endereco->id); ?>">
                                        <?php echo e($endereco->bairroNome()); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <?php $__errorArgs = ['endereco.endereco_atendido_id'];
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
                        <?php else: ?>
                            <input disabled type="text" id="enderecoMunicipio"
                                   class="form-control"
                                   value="<?php echo e($endereco->enderecoAtendido->bairroNome()); ?>">
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="endereco">*Endereço</label>

                        <input wire:model.debounce.500ms="endereco.endereco" type="text" id="endereco"
                               class="form-control <?php $__errorArgs = ['endereco.endereco'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               placeholder="Endereço" autocomplete="none">

                        <?php $__errorArgs = ['endereco.endereco'];
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
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="enderecoNumero">*Número</label>

                    <input wire:model.debounce.500ms="endereco.numero" type="text" id="enderecoNumero"
                           class="form-control <?php $__errorArgs = ['endereco.numero'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           placeholder="Número">

                    <?php $__errorArgs = ['endereco.numero'];
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

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="enderecoComplemento">Complemento</label>

                        <input wire:model.debounce.500ms="endereco.complemento" type="text" id="enderecoComplemento"
                               class="form-control <?php $__errorArgs = ['endereco.complemento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               placeholder="Complemento">

                        <?php $__errorArgs = ['endereco.complemento'];
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
                </div>
            </div>

        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success btn-block btn-lg">Salvar Alterações</button>
    </div>
</form>
<?php /**PATH /var/www/resources/views/livewire/user/user_endereco.blade.php ENDPATH**/ ?>