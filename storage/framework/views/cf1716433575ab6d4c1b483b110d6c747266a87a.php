<div class="card border-0 osahan-accor rounded shadow-sm overflow-hidden mt-3">
    <div class="card-header bg-white border-0 p-0" id="headingThree">
        <h2 class="mb-0">
            
            <div class="d-flex align-items-center bg-white btn-block text-left btn-lg h5 px-3 py-4 m-0" style="cursor: default;">
                <span class="c-number">3</span> Tipo de Bebida
            </div>
        </h2>
    </div>

    
    <div id="collapseThree" class="show" aria-labelledby="headingThree">
        <div class="card-body p-0 border-top">
            <div class="osahan-order_address p-3">
                <div class="form-group">
                    <label>*Selecione o pacote de bebidas</label>
                    <select wire:model.live="pedido.tipo_bebida" class="form-control">
                        <option value="">Selecione...</option>
                        <option value="Premium">Premium</option>
                        <option value="Intermediário">Intermediário</option>
                        <option value="Popular">Popular</option>
                    </select>
                    
            <!-- <?php if(!filled($pedido->tipo_bebida)): ?>
                 <div class="text-danger small mt-1">Obrigatório selecionar uma opção</div>
             <?php endif; ?> -->
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/resources/views/livewire/site/carrinho/tipo_bebidas/_tipo_bebidas.blade.php ENDPATH**/ ?>