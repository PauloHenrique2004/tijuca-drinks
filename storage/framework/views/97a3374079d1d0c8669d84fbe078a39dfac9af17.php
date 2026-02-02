<section class="py-4 osahan-main-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">

                
                <div class="position-relative mb-3 text-center">
                    <?php if($galeria && $galeria->count() > 1): ?>
                        <button type="button"
                                class="btn btn-light position-absolute"
                                style="top: 50%; left: 10px; transform: translateY(-50%); z-index: 5; background:#87a3af; color: #fff !important;"
                                wire:click="imagemAnterior">
                            ‹
                        </button>

                        <button type="button"
                                class="btn btn-success position-absolute"
                                style="top: 50%; right: 10px; transform: translateY(-50%); z-index: 5; background:#87a3af; color: #fff !important;"
                                wire:click="proximaImagem">
                            ›
                        </button>
                    <?php endif; ?>

                    <img  alt="<?php echo e($produto->nome); ?>"
                         src="<?php echo e($imagemAtiva); ?>"
                         class="img-fluid mx-auto shadow-sm rounded produto-img">

                </div>

                
                <?php if($galeria && $galeria->count()): ?>
                    <div class="d-flex justify-content-center flex-wrap">
                        <?php $__currentLoopData = $galeria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $url = asset($img->imagem); ?>
                            <div class="mx-1 mb-2" style="cursor:pointer;">
                                <img src="<?php echo e($url); ?>"
                                     alt="<?php echo e($produto->nome); ?>"
                                     style="width:70px;height:70px;object-fit:cover;border-radius:8px;
                                         border:2px solid <?php echo e($imagemAtivaIndex === $idx ? '#28a745' : '#ddd'); ?>;"
                                     wire:click="trocarImagem(<?php echo e($img->id); ?>)">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>



                
                <?php
                    // grupo obrigatório = tipo == 2
                    $temObrigatorios = $produto->grupos->where('tipo', 2)->count() > 0;
                ?>



                
                <div class="pd-f d-flex mb-3 adicionar-pedido-desktop">
                    <div class="btn-wrapper position-relative">
                        <div wire:click.prevent="fazerPedido"
                             class="btn btn-warning p-3 rounded btn-lg btn-adicionar
                    <?php if($temObrigatorios && !$pedidoProdutoGrupoValido): ?> disabled <?php endif; ?>">
                            <div style="float:left">Adicionar</div>
                       
                        </div>

                        <?php if($temObrigatorios && !$pedidoProdutoGrupoValido): ?>
                            <div class="btn-overlay" onclick="$('#modalItensObrigatorios').modal('show')"></div>
                        <?php endif; ?>
                    </div>


                    <div class="cart-items-number d-flex">
                        <input type='button' value='-' class='qtyminus btn btn-success btn-sm'
                               wire:click="alterarQuantidade('remover')"/>
                        <input type='text' maxlength="3" wire:model.debounce.15000ms="quantidade" name='quantity'
                               class='qty form-control'/>
                        <input type='button' value='+' class='qtyplus btn btn-success btn-sm'
                               wire:click="alterarQuantidade('adicionar')"/>
                    </div>
                </div>
            </div>




            <div class="col-lg-6">
                <div class="bg-white rounded shadow-sm">
                    <div style="padding-top: 15px; padding-left: 10px">
                        <h1 style="font-size: 15px" class="font-weight-bold"><?php echo e($produto->nome); ?></h1>
                    </div>

                    <!-- Descrição -->
                    <?php if($produto->descricao): ?>
                        <div class="details" style="padding-left: 10px">
                            <span class="text-muted small mb-0">
                                <?php echo $produto->descricao; ?>

                            </span>
                        </div>
                      <?php endif; ?>
                <!-- / Descrição -->

                    <div class="grupos">
                        <?php echo $__env->make('livewire.site.produto._produto_pedido_produto_grupos', compact('pedido', 'produtoGrupos'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                    <!-- Compartilhar -->
                    <div class="p-3">
                        <?php echo $__env->make('livewire.site.produto._compartilhar', compact('compartilharUrl'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <!-- / Compartilhar -->
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>

    <div class="adicionar-pedido-celular">
        <div class="pd-f d-flex align-items-center">

            <div class="btn-wrapper position-relative">
                <div wire:click.prevent="fazerPedido"
                     class="btn btn-warning p-3 rounded btn-lg btn-adicionar
                        <?php if($temObrigatorios && !$pedidoProdutoGrupoValido): ?> disabled <?php endif; ?>">
                    <div style="float:left">Adicionar</div>

                </div>

                <?php if($temObrigatorios && !$pedidoProdutoGrupoValido): ?>
                    <div class="btn-overlay" onclick="$('#modalItensObrigatorios').modal('show')"></div>
                <?php endif; ?>
            </div>

            <div class="cart-items-number d-flex">
                <input type='button' value='-' class='qtyminus btn btn-success btn-sm'
                       wire:click="alterarQuantidade('remover')"/>
                <input type="text" maxlength="3"
                       wire:model.debounce.15000ms="quantidade"
                       name="quantity"
                       class="qty form-control"/>
                <input type='button' value='+' class='qtyplus btn btn-success btn-sm'
                       wire:click="alterarQuantidade('adicionar')"/>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="modalProdutoAdicionado" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0 rounded-lg shadow-lg">
                <div class="modal-header border-0">
                    <h5 class="modal-title" style="color:#87a3af;">
                        Produto adicionado ao carrinho
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-2 font-weight-bold" id="modal-produto-nome"></p>
                    <p class="mb-0 text-muted">
                        Deseja concluir o pedido agora ou continuar comprando?
                    </p>
                </div>
                <div class="modal-footer border-0 d-flex justify-content-between">

                    <a href="<?php echo e(route('home')); ?>">
                        <button type="button"
                                class="btn btn-outline-secondary" style="background: #abc49b; border-color: #abc49b; color: #fff">
                            Continuar comprando
                        </button>
                    </a>


                    <a href="<?php echo e(route('carrinho')); ?>"
                       class="btn text-white"
                       style="background:#87a3af;">
                        Concluir pedido
                    </a>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="modalItensObrigatorios" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0 rounded-lg shadow-lg">
                <div class="modal-header border-0">






                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="mb-3">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"
                           style="font-size: 32px; color: #dc3545;"></i>
                    </div>
                    <p class="mb-2 font-weight-bold" style="font-size: 17px; text-align: center">
                        Ainda falta selecionar itens obrigatórios.
                    </p>
                </div>

                <div class="modal-footer border-0">
                    <button type="button"
                            class="btn btn-itens-obrigatorios"
                            data-dismiss="modal" style="width: 100%">
                        Ok, vou selecionar
                    </button>
                </div>
            </div>
        </div>
    </div>


</section>

<style>
    .endereco-box {
        border: 1px solid #882f30;
        padding: 5px 0 9px 7px;
        border-radius: 10px;
        margin-top: 10px;
        margin-left: -13px;
    }

    .btn-adicionar {
        max-width: 200px;
        height: 54px;
        text-align: unset;
        min-width: 200px;
        display: initial;
    }



    .cart-items-number {
        border-radius: .40rem;
        padding: 3px;
        background: #fff;
        width: fit-content;
        height: 54px;
        padding-top: 11px;
        padding-left: 20px;
        margin-left: 8px;
        padding-right: 20px;
    }

    .cart-items-number .qtyminus, .cart-items-number .qtyplus {
        border: none !important;
        box-shadow: none;
        color: #fec12a;
    }

    .cart-items-number .qtyminus:hover, .cart-items-number .qtyplus:hover, .cart-items-number .qtyminus:focus, .cart-items-number .qtyplus:focus {
        background: none !important;
        color: #c8961d !important;
    }

    .cart-items-number .qtyminus {
        font-size: 35px;
    }

    .cart-items-number .qtyplus {
        font-size: 30px;
    }

    .cart-items-number .qty {
        font-size: 27px;
        max-width: 50px;
    }

    .grupos {
        max-height: 400px;
        overflow: scroll;
        margin-top: 7px;
    }




    @media(min-width: 769px) {
        .produto-img {
            height: 500px;
            /*width: 500px;*/
            object-fit: cover
        }

    }

    @media(max-width: 768px) {
        .produto-img {
            height: 300px;
            /*width: 500px;*/
            object-fit: cover;
            margin-top: 50px !important;
        }

    }
    /*************** Adicionar Pedido ***************/
    .adicionar-pedido-celular {
        position: fixed;
        width: 100%;
        background: #fff;
        border-top: 1px solid #9c9c9c;
        padding-bottom: 5px;
        bottom: 0;
        padding-left: 10px;
        padding-top: 5px;
        z-index: 999;
    }

    .adicionar-pedido-desktop {
        width: fit-content;
        margin: 0 auto;
    }

    /* Quando Celular */
    @media (max-width: 1024px) {
        .adicionar-pedido-desktop {
            display: none !important;
        }

        <?php if($produto->grupos->count() > 0): ?>
        .recommend-slider {
            display: none;
        }

        <?php endif; ?>

        .grupos {
            max-height: unset;
        }

        #horarioFuncionamento {
            margin-bottom: 4em;
        }
    }

    /* Quando Desktop */
    @media (min-width: 1025px) {
        .adicionar-pedido-celular {
            display: none !important;
        }
    }

    /*************** / Adicionar Pedido ***************/

    .modal-content {
        border-radius: 18px;
    }

    .modal-title {
        font-weight: 600;
    }


    .btn-adicionar {
        max-width: 240px;
        min-width: 240px;
        height: 56px;
        text-align: unset;
        display: inline-flex;
        align-items: center;
        justify-content: space-between;
        font-weight: 700;
        font-size: 15px;
        text-transform: uppercase;
        letter-spacing: .06em;
        border-radius: 999px;
        border: none;
        /*background: linear-gradient(90deg, #3cb371, #2e8b57);*/
        background: #3cb371;
        color: #fff !important;
        box-shadow: 0 10px 24px rgba(0,0,0,0.22);
        transition: transform .12s ease, box-shadow .12s ease, filter .12s ease;
    }

    .btn-adicionar:hover,
    .btn-adicionar:focus {
        transform: translateY(-2px);
        box-shadow: 0 14px 30px rgba(0,0,0,0.25);
        filter: brightness(1.08);
    }

    .btn-adicionar.disabled,
    .btn-adicionar:disabled {
        cursor: not-allowed;
        opacity: .55;
        box-shadow: none;
    }




    .btn-wrapper {
        position: relative;
        display: inline-block;
    }

    /* camada transparente por cima do botão quando estiver inválido */
    .btn-overlay {
        position: absolute;
        inset: 0;
        cursor: not-allowed;
        background: transparent;
        z-index: 5;
    }

    .btn-itens-obrigatorios {
        background: #87a3af;
        color: #fff;
        border-radius: 999px;
        padding: 0.5rem 1.6rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .06em;
        border: none;
    }

    .btn-itens-obrigatorios:hover,
    .btn-itens-obrigatorios:focus {
        background: #9a7f63;
        color: #fff;
    }

  .btn-warning.disabled, .btn-warning:disabled {
         background-color: #fec12a;
         border-color: #fec12a;
     }

    .btn-warning.disabled, .btn-warning:hover {
        background-color: #fec12a;
        border-color: #fec12a;
    }

    .endereco-box {
        border: 1px solid #c8d6c1;
        padding: 5px 0 9px 7px;
        border-radius: 10px;
        margin-top: 10px;
        margin-left: -13px;
        background: #fff;
        transition: border-color .15s ease, box-shadow .15s ease, transform .12s ease;
    }

    /* estado ao passar o mouse: já sugere clique */
    .endereco-box:hover {
        border-color: #7ed957;
    }

    /* endereço selecionado */
    .endereco-box.selecionado {
        border: 3px solid #00e676;          /* verde fluorescente mais grosso */
        box-shadow: 0 0 0 3px rgba(0, 230, 118, 0.25);
        background: #f6fff9;                /* leve fundo esverdeado */
        transform: translateY(-1px);        /* pequeno destaque visual */
    }


</style>


<script>
    document.addEventListener('DOMContentLoaded', function () {

        // Já existente: produto adicionado
        window.addEventListener('produto-adicionado', function (event) {
            if (event.detail && event.detail.nome) {
                const nomeEl = document.getElementById('modal-produto-nome');
                if (nomeEl) {
                    nomeEl.textContent = event.detail.nome + ' foi adicionado ao carrinho.';
                }
            }
            $('#modalProdutoAdicionado').modal('show');
        });

        // Novo: faltam itens obrigatórios
        window.addEventListener('itens-obrigatorios-faltando', function () {
            $('#modalItensObrigatorios').modal('show');
        });
    });
</script>

















<?php /**PATH /var/www/resources/views/livewire/site/produto/produto.blade.php ENDPATH**/ ?>