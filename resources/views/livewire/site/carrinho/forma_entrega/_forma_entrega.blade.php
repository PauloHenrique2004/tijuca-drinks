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
                        @foreach($formasEntrega as $forma)
                            <option value="{{ $forma->id }}">{{ $forma->nome }}</option>
                        @endforeach
                    </select>
                    @error('pedido.forma_entrega_id') 
                        <div class="text-danger small mt-1">{{ $message }}</div> 
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
