<form wire:submit.prevent="salvar">
    <div class="card-body">

        <div class="row">
            <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="seg" wire:model="horario.seg">
                    <label class="form-check-label" for="seg">Seg</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="ter" wire:model="horario.ter">
                    <label class="form-check-label" for="ter">Ter</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="qua" wire:model="horario.qua">
                    <label class="form-check-label" for="qua">Qua</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="qui" wire:model="horario.qui">
                    <label class="form-check-label" for="qui">Qui</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="sex" wire:model="horario.sex">
                    <label class="form-check-label" for="sex">Sex</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="sab" wire:model="horario.sab">
                    <label class="form-check-label" for="sab">Sáb</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="dom" wire:model="horario.dom">
                    <label class="form-check-label" for="dom">Dom</label>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="de">*De</label>
                    <input type="time" class="form-control <?php $__errorArgs = ['horario.de'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           id="de" wire:model="horario.de">

                    <?php $__errorArgs = ['horario.de'];
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
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="de">*Até</label>
                    <input type="time" class="form-control <?php $__errorArgs = ['horario.ate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           id="ate" wire:model="horario.ate">

                    <?php $__errorArgs = ['horario.ate'];
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

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="<?php echo e(route('gestor.horarios.index')); ?>" class="btn btn-default">Voltar</a>
    </div>
</form>
<?php /**PATH /var/www/resources/views/livewire/gestor/horario.blade.php ENDPATH**/ ?>