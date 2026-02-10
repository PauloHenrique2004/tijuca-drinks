{{-- livewire/site/carrinho/pedido.blade.php --}}
<div class="row" style="justify-content: center">
    <div class="col-lg-8">
        <div class="accordion" id="accordionExample">
            <!-- 1. Itens -->
            @include('livewire.site.carrinho.itens._itens', compact('currentCard', 'pedido', 'produtosSubTotal'))

            <!-- 2. Evento (era forma_entrega) -->
            @include('livewire.site.carrinho.forma_entrega._forma_entrega', compact('currentCard', 'pedido', 'formasEntrega'))

               <!-- 3. Evento (tipo bebidas) -->
           @include('livewire.site.carrinho.tipo_bebidas._tipo_bebidas', compact('currentCard', 'pedido'))

            <!-- 4. Qtd Pessoas (nova seção) -->
            @include('livewire.site.carrinho.quantidade_pessoas._quantidade_pessoas', compact('currentCard', 'pedido'))
        </div>
    </div>
</div>

<livewire:site.carrinho.pedido-whatsapp/>

@include('livewire.site.carrinho.forma_entrega._nao_logado')

@section('script')
    <div wire:ignore>
        <script>
            $(document).ready(function () {
                const body = $('body')[0];

                body.addEventListener('usuario-nao-logado-alerta-visualizar', () => {
                    $('#usuarioNaoLogadoModal').modal('show');
                });

                body.addEventListener('pedido-whatsapp-visualizar', () => {
                    audio = new Audio('/pay_success.mp3');
                    audio.play();
                    $('#finalizarPedidoModal').modal('toggle');
                });
            });
        </script>
    </div>
@endsection
