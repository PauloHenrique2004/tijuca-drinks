}
<div class="card border-0 osahan-accor rounded shadow-sm overflow-hidden mt-3">
    <div class="card-header bg-white border-0 p-0" id="headingthree">
        <h2 class="mb-0">
            <button type="button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true"
                    class="btn d-flex align-items-center bg-white btn-block text-left btn-lg h5 px-3 py-4 m-0"
                    aria-controls="collapsethree" wire:click="changeCard('quantidade')">
                <span class="c-number">3</span> Qtd Pessoas
            </button>
        </h2>
    </div>
    <div id="collapsethree" class="collapse show" aria-labelledby="headingthree" data-parent="#accordionExample">
        <div class="card-body p-0 border-top">
            <div class="osahan-order_address">
              <div class="p-3 col-md-12 form-group">
                <label>*Qtd aproximada de pessoas</label>
             <input type="number" wire:model.live="quantidade_pessoas" min="1" class="form-control" placeholder="Ex: 1">

        
            @if( !filled($quantidade_pessoas) || (int)$quantidade_pessoas < 1 )
                <div class="text-danger small mt-1">Mínimo 1 pessoa</div>
            @endif


            </div>

            </div>
        </div>
    </div>

       <div class="card-body px-3 pb-3 pt-1">
            <button wire:click="comprar()"
                    @unless($pedidoValido) disabled @endunless
                    class="btn btn-success btn-lg btn-block @unless($pedidoValido) btn-disabled @endunless mt-3"
                    type="button">
                CONTINUAR
            </button>
        </div>
</div>
