<?php $__env->startSection('title', 'Cadastro - '); ?>
<?php $__env->startSection('header-title', 'Formulário de cadastro'); ?>

<form wire:submit.prevent="salvar">
    <div class="row">
        <div class="col-lg-5 mb-4 mb-md-0 p-4 bg-white rounded shadow-sm" style="margin: 0 auto">
            <h5 class="mb-4 profile-title">1) Dados Básicos</h5>

            <div id="edit_profile">
                <div class="p-0">
                    <div class="form-group mb-3">
                        <label for="aaaa">*Nome</label>

                        <input wire:model.debounce.500ms="usuario.name" type="text" name="barrr" id="aaaa"
                               autofocus class="form-control <?php $__errorArgs = ['usuario.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               placeholder="*Meu Nome" autocomplete="none">

                        <?php $__errorArgs = ['usuario.name'];
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
                        <label for="userEmail">*E-mail</label>

                        <input wire:model.debounce.500ms="usuario.email" type="email" id="userEmail"
                               class="form-control <?php $__errorArgs = ['usuario.email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               placeholder="*E-mail">

                        <?php $__errorArgs = ['usuario.email'];
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
                        <label for="senha">*Senha</label>

                        <input wire:model.debounce.500ms="senha" type="password" id="senha"
                               class="form-control <?php $__errorArgs = ['senha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               placeholder="*Senha">

                        <?php $__errorArgs = ['senha'];
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
                        <label for="confirmacaoSenha">*Confirmação de Senha</label>

                        <input wire:model.debounce.500ms="senha_confirmation" type="password"
                               id="confirmacaoSenha"
                               class="form-control <?php $__errorArgs = ['senha_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               placeholder="*Confirmação de Senha">

                        <?php $__errorArgs = ['senha_confirmation'];
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
                        <label for="usuarioTelefone">*Telefone</label>

                        <input wire:model.debounce.500ms="usuario.telefone" type="text"
                               id="usuarioTelefone"
                               class="form-control <?php $__errorArgs = ['usuario.telefone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               placeholder="*Telefones">

                        <?php $__errorArgs = ['usuario.telefone'];
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

        <div class="col-lg-5 ml-md-2 p-4 bg-white rounded shadow-sm" style="margin: 0 auto">
            <h5 class="mb-4 profile-title">2) Endereço</h5>
            <a style="float: right; width: 100%; text-align: right;" href="#" data-toggle="modal"
               data-target="#enderecoNaoLocalizado">
                Não localizei meu endereço
            </a>

            <div id="edit_profile">
                <div class="p-0">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="enderecoCep">CEP</label>

                                <input wire:model.debounce.500ms="endereco.cep" type="tel" id="enderecoCep"
                                       class="form-control" placeholder="CEP" maxlength="8" autocomplete="none">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="enderecoMunicipio">*Município</label>

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
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="enderecoBairro">*Bairro</label>

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
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-6" style="margin: 0 auto">
            <button type="submit" class="btn btn-success btn-block">CADASTRAR</button>
        </div>
    </div>

    
    <div class="modal" id="enderecoNaoLocalizado" tabindex="-1" role="dialog" aria-labelledby="enderecoNaoLocalizado"
         style="background: rgba(117, 117, 117, 0.81); z-index: 9999; padding-right: 4px;" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div
                        style="font-size: 14px; text-transform: uppercase; font-weight: bold; color: #000; text-align: center">
                        Prezado cliente, caso não tenha encontrado seu endereço é porque nesse momento ainda não
                        entregamos na sua região, mas ainda assim, você pode fazer seu pedido e retirar no local.
                    </div>
                </div>

                <div class="modal-footer p-0 border-0">
                    <div class="col-12 m-0 p-0">
                        <button type="button" id="close" class="btn border-top btn-lg btn-block" data-dismiss="modal"
                                style="color: #fff; background: var(--site-cor)">CONTINUAR
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</form>
<?php /**PATH /var/www/resources/views/livewire/site/registro.blade.php ENDPATH**/ ?>