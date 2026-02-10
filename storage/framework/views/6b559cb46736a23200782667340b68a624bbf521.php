<div class="card border-0 osahan-accor rounded shadow-sm overflow-hidden mt-3">
    <div class="card-header bg-white border-0 p-0" id="headingtwo">
        <h2 class="mb-0">
            <button type="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true"
                    class="btn d-flex align-items-center bg-white btn-block text-left btn-lg h5 px-3 py-4 m-0"
                    aria-controls="collapsetwo" wire:click="changeCard('evento')">
                <span class="c-number">2</span> Evento
            </button>
        </h2>
    </div>
    <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo" data-parent="#accordionExample">
        <div class="card-body p-0 border-top">
            <div class="osahan-order_address">
                <!-- Tipo de Evento (usando FormaEntrega) -->
     <div class="p-3 col-md-12 form-group">
    <label>*Tipo de evento</label>
    
    <select wire:model.live="pedido.forma_entrega_id" class="form-control">
        <option value="">Selecione...</option>
        <?php $__currentLoopData = $formasEntrega; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $forma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($forma->id); ?>"><?php echo e($forma->nome); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    
    <?php $__errorArgs = ['pedido.forma_entrega_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
        <div class="text-danger small mt-1"><?php echo e($message); ?></div> 
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('abrir-modal-login', event => {
        $('#usuarioNaoLogadoModal').modal('show');
    });
</script><?php /**PATH /var/www/resources/views/livewire/site/carrinho/forma_entrega/_forma_entrega.blade.php ENDPATH**/ ?>