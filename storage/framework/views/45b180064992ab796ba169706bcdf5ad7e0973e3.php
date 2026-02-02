<form wire:submit.prevent="salvar">
    <div class="card-body">
        <div class="form-group">
            <?php if($lgpdTermo->id): ?>
                <?php echo $lgpdTermo->texto; ?>

            <?php else: ?>
                <label for="descricao">*Texto</label>

                <textarea type="text" class="form-control <?php $__errorArgs = ['lgpdTermo.texto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                          id="lgpdTermo.texto" wire:model.debounce.500ms="lgpdTermo.texto" hidden></textarea>

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
                                ckeditor.on('change', function(event, data) {
                                    window.livewire.find('<?php echo e($_instance->id); ?>').set('lgpdTermo.texto', ckeditor.getData());
                                });
                            "
                    type="text"
                ><?php echo e($lgpdTermo->texto); ?></textarea>
                </div>

                <?php $__errorArgs = ['lgpdTermo.texto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <?php endif; ?>
        </div>

    </div>

    <?php if (! ($lgpdTermo->id)): ?>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    <?php endif; ?>
</form><?php /**PATH /var/www/resources/views/livewire/gestor/lgpd_termo.blade.php ENDPATH**/ ?>