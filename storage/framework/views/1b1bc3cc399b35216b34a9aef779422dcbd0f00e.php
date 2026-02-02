
<div class="row" style="justify-content: center">
    <div class="col-lg-8">
        <div class="accordion" id="accordionExample">
            <!-- 1. Itens -->
            <?php echo $__env->make('livewire.site.carrinho.itens._itens', compact('currentCard', 'pedido', 'produtosSubTotal'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- 2. Evento (era forma_entrega) -->
            <?php echo $__env->make('livewire.site.carrinho.forma_entrega._forma_entrega', compact('currentCard', 'pedido', 'formasEntrega'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- 3. Qtd Pessoas (nova seção) -->
            <?php echo $__env->make('livewire.site.carrinho.quantidade_pessoas._quantidade_pessoas', compact('currentCard', 'pedido'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('site.carrinho.pedido-whatsapp', [])->html();
} elseif ($_instance->childHasBeenRendered('Td0Prd9')) {
    $componentId = $_instance->getRenderedChildComponentId('Td0Prd9');
    $componentTag = $_instance->getRenderedChildComponentTagName('Td0Prd9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Td0Prd9');
} else {
    $response = \Livewire\Livewire::mount('site.carrinho.pedido-whatsapp', []);
    $html = $response->html();
    $_instance->logRenderedChild('Td0Prd9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php echo $__env->make('livewire.site.carrinho.forma_entrega._nao_logado', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('script'); ?>
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
<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/resources/views/livewire/site/carrinho/pedido.blade.php ENDPATH**/ ?>