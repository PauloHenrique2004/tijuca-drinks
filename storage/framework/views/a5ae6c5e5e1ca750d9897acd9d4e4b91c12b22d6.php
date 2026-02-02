<div class="card border-0 osahan-accor rounded shadow-sm overflow-hidden">
    <!-- cart header -->
    <div class="card-header bg-white border-0 p-0" id="headingOne">
        <h2 class="mb-0">
            <button
                class="btn d-flex align-items-center bg-white btn-block text-left btn-lg h5 px-3 py-4 m-0"
                type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                aria-controls="collapseOne" wire:click="changeCard('itens')">
                <span class="c-number">1</span> Itens
            </button>
        </h2>
    </div>
    <!-- body cart items -->
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
         data-parent="#accordionExample">
        <div class="card-body p-0 border-top">
            <div class="osahan-cart">
                <?php $__currentLoopData = $pedido->produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedidoProduto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('livewire.site.carrinho.itens._produto', compact('pedidoProduto'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/resources/views/livewire/site/carrinho/itens/_itens.blade.php ENDPATH**/ ?>