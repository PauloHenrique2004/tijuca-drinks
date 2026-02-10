<div class="modal fade" id="usuarioNaoLogadoModal" tabindex="-1" role="dialog"
     aria-labelledby="usuarioNaoLogadoModal"
     aria-hidden="true" style="background: rgb(0 0 0 / 70%); z-index: 9999">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-body p-4">
                <div style="font-size: 16px; text-transform: uppercase; font-weight: 800; color: #852525; text-align: center; line-height: 1.6">
                    Atenção!<br>
                    Para continuar com seu pedido e finalizar a compra, é necessário realizar a autenticação.
                </div>
            </div>

            <div class="modal-footer p-0 border-0">
                <div class="col-6 m-0 p-0 border-right">
                    <button type="button" class="btn btn-light btn-lg btn-block text-muted" data-dismiss="modal" 
                            style="border-radius: 0; font-size: 13px; height: 55px;">VOLTAR</button>
                </div>
                <div class="col-6 m-0 p-0">
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-success btn-lg btn-block d-flex align-items-center justify-content-center" 
                       style="border-radius: 0; font-size: 13px; font-weight: bold; height: 55px;">
                        ENTRAR OU CADASTRAR
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/resources/views/livewire/site/carrinho/forma_entrega/_nao_logado.blade.php ENDPATH**/ ?>