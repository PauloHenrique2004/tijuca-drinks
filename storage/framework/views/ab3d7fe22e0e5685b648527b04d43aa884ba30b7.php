<div class="cart-items bg-white position-relative border-bottom">
    <div class="d-flex  align-items-center p-3">
        <a href="<?php echo e(route('produtos.show', [$pedidoProduto->produto->slug, $pedidoProduto->produto])); ?>">
            <img src="<?php echo e(asset($pedidoProduto->produto->fotoUrl())); ?>" alt="<?php echo e($pedidoProduto->produto->nome); ?>"
                 class="img-fluid">
        </a>

        <a href="<?php echo e(route('produtos.show', [$pedidoProduto->produto->slug, $pedidoProduto->produto])); ?>"
           class="ml-3 text-dark text-decoration-none w-100">

            <h6 class="mb-1" style="font-size: 14px"><?php echo e($pedidoProduto->nome); ?></h6>

        </a>

        <!----------- Item opções/ações desktop ----------->


        <div wire:click="removerPedidoProduto(<?php echo e($pedidoProduto->id); ?>)" class="d-flex ml-auto item-opcoes-desktop"
             style="font-size: 20px; color: #797979; padding-left: 7px">
            <i class="icofont-trash"></i>
        </div>
        <!----------- / Item opções/ações desktop ----------->
    </div>

    <!----------- Item opções/ações mobile ----------->
    <div class="d-flex align-items-center p-3 item-opcoes-mobile">
      

      

        <div wire:click="removerPedidoProduto(<?php echo e($pedidoProduto->id); ?>)" class="d-flex ml-auto"
             style="font-size: 20px; color: #797979; padding-left: 7px">
            <i class="icofont-trash"></i>
        </div>
    </div>
    <!----------- / Item opções/ações mobile ----------->
</div>

<style>
    .item-opcoes-desktop {
        display: none !important;
    }
    .item-opcoes-mobile {
        display: none !important;
    }
    @media  only screen and (max-width: 600px) {
        .item-opcoes-mobile {
            display: flex !important;
        }
    }
    @media  only screen and (min-width: 601px) {
        .item-opcoes-desktop {
            display: flex !important;
        }
    }
</style>
<?php /**PATH /var/www/resources/views/livewire/site/carrinho/itens/_produto.blade.php ENDPATH**/ ?>