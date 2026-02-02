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
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="nome">*Nome</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['complemento.nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nome"
                               wire:model.debounce.500ms="complemento.nome">

                        <?php $__errorArgs = ['complemento.nome'];
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

                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['complemento.descricao'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="descricao"
                               wire:model.debounce.500ms="complemento.descricao">

                        <?php $__errorArgs = ['complemento.descricao'];
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
<?php /**PATH /var/www/resources/views/livewire/gestor/produto/produto_grupo_complemento.blade.php ENDPATH**/ ?>