<form wire:submit.prevent="save">
    <div class="card-body">

        <div class="row mb-4">
            <div class="col-md-12">
                <!--- Titulo --->
                <div class="form-group">
                    <label for="titulo">*Título</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['titulo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="titulo"
                           wire:model.debounce.500ms="titulo">

                    <?php $__errorArgs = ['titulo'];
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
                <!-- / Titulo -->
            </div>
        </div>

        
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="foto">Foto da página (sobre nós)</label>
                    <input type="file" id="foto" class="form-control"
                           wire:model="foto"
                           accept=".jpg,.jpeg,.png">

                    <small class="text-muted">
                        Dimensão sugerida: 260 x 320px. Formatos: JPG/PNG.
                    </small>

                    <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    
                    <?php if($foto && !$errors->has('foto')): ?>
                        <div class="mt-2">
                            <img src="<?php echo e($foto->temporaryUrl()); ?>" alt="Preview"
                                 style="max-width:260px;border-radius:20px;object-fit:cover;">
                        </div>
                    <?php elseif(!empty($pagina->foto)): ?>
                        <div class="mt-2">
                            <img src="<?php echo e(Storage::disk('storage_configuracoes')->url($pagina->foto)); ?>"
                                 alt="<?php echo e($titulo); ?>"
                                 style="max-width:260px;border-radius:20px;object-fit:cover;">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        
        <div class="form-group">
            <label for="conteudo">*Conteúdo</label>

            <textarea type="text" class="form-control <?php $__errorArgs = ['conteudo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                      id="conteudo" wire:model.debounce.500ms="conteudo" hidden></textarea>

            <div wire:ignore>
                <textarea
                    rows="50"
                    x-data
                    x-ref="input"
                    x-init="
                        window.ckeditorHeight = '800px';
                        ckeditor = CKEDITOR.replace($refs.input, {
                            customConfig: '/adminlte/ckeditor-plugins/plugins.js'
                        });
                        ckeditor.on('change', function () {
                            window.livewire.find('<?php echo e($_instance->id); ?>').set('conteudo', ckeditor.getData());
                        });
                    "
                    type="text"
                ><?php echo $conteudo; ?></textarea>
            </div>

            <?php $__errorArgs = ['conteudo'];
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

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>
<?php /**PATH /var/www/resources/views/livewire/pagina.blade.php ENDPATH**/ ?>