<?php $attributes = $attributes->exceptProps([
'id',
'label',
'wireModel',
'value'
]); ?>
<?php foreach (array_filter(([
'id',
'label',
'wireModel',
'value'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($label): ?>
    <label for="<?php echo e($id); ?>"><?php echo e($label); ?></label>
<?php endif; ?>

<!-- Campo de Cobaia somente para armazenar o valor formatado -->
<input
    id="<?php echo e($id); ?>"
    type="text"
    class="form-control valor <?php $__errorArgs = [$wireModel];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
    value="<?php echo e(number_format(floatval($value), 2, ',', '.')); ?> "
    wire:ignore
>

<input
    type="hidden"
    class="<?php $__errorArgs = [$wireModel];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"

    wire:model="<?php echo e($wireModel); ?>"
    x-data
    x-init="
                valorInput = $( $($el).parent().find('.valor')[0] );

                valorInput.on('keyup change', function() {
                    valorFloat = removeJqueryMaskMoney( $(this).val() );
                    window.livewire.find('<?php echo e($_instance->id); ?>').set('<?php echo e($wireModel); ?>', valorFloat);
                });

                setTimeout(() => { maskMoney(); }, 100);
            "
>

<?php $__errorArgs = [$wireModel];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php /**PATH /var/www/resources/views/components/jquery-mask-money.blade.php ENDPATH**/ ?>