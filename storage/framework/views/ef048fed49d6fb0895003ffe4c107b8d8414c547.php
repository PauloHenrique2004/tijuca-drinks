<form wire:submit.prevent="save">
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-12">
                <div style="margin: 0 auto; display: block; width: fit-content">
                    <!--- Icone --->
                    <label for="icone" style="width: fit-content; margin: 0 auto; display: block;">
                        <img
                            style="width: 120px; height: 93px; cursor: pointer; object-fit: cover; border-radius: 10%;"
                            class="direct-chat-img"
                            src="<?php echo e(($icone && !$errors->has('icone')) ? $this->icone->temporaryUrl() : $categoria->iconeUrl()); ?>"
                            alt="Ícone categoria">
                    </label>

                    <input type="file" id="icone" style="visibility: collapse"
                           class="form-control <?php $__errorArgs = ['icone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           wire:model="icone">

                    <?php if (! ($errors->has('icone'))): ?>
                        <div style="text-align: center; border: 1px solid #fff;">
                            <i class="fas fa-info-circle"></i> Tamanho máximo 512KB (JPEG ou PNG)
                        </div>
                        <div style="text-align: center; border: 1px solid #fff;">
                            Resolução requerida 400 x 400px
                        </div>
                    <?php endif; ?>

                    <?php $__errorArgs = ['icone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div style="text-align: center; color: #a02525;">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <!-- / Icone -->
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-12">
                <!--- Nome --->
                <div class="form-group">
                    <label for="nome">*Nome</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nome"
                           wire:model.debounce.500ms="nome">

                    <?php $__errorArgs = ['nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <!-- / Nome -->
            </div>
        </div>

        <hr class="mb-3">

        
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox"
                               class="form-check-input"
                               id="exibir_topo"
                               wire:model="exibir_topo">
                        <label class="form-check-label" for="exibir_topo">
                            Exibir esta categoria no menu do topo
                        </label>
                    </div>

                    <small class="form-text text-muted">
                        Quando marcada, esta categoria aparecerá como item do menu superior.
                        Após salvar, será possível criar subcategorias (submenus) para ela.
                    </small>
                </div>

                <?php if($exibir_topo && !$categoria->id): ?>
                    <div class="alert alert-info mt-2" role="alert">
                        Após salvar a categoria, a opção de adicionar subcategorias (submenus) será exibida abaixo.
                    </div>
                <?php endif; ?>
            </div>
        </div>

        
        <?php if($categoria->id && $exibir_topo): ?>
            <hr class="mb-3">
            <h5 class="mb-3">Gerenciar Subcategorias (Menus Internos)</h5>

            <div class="alert alert-info">
                <strong>Como funciona:</strong><br>
                - Aqui você cria as subcategorias que ficarão dentro desta categoria no menu do site.<br>
                - Para adicionar uma nova, clique em <strong>"+ Adicionar subcategoria"</strong>, preencha o nome e a ordem
                e clique em <strong>"Adicionar esta subcategoria ao grupo"</strong>.<br>
                - Para alterar uma subcategoria já cadastrada, basta mudar o <strong>nome</strong> ou a <strong>ordem</strong>
                diretamente nos campos da lista.<br>
                - Para remover, use o botão <strong>"Remover"</strong> ao lado de cada linha.<br><br>
                <strong>Importante:</strong> Tudo só é gravado no banco quando você clicar em
                <strong>"✔ Salvar subcategorias"</strong> abaixo.
            </div>

            <div class="alert alert-info mb-3">
                <strong>Passo a passo rápido:</strong><br>
                • Clique em <strong>"+ Adicionar subcategoria"</strong> e preencha os campos.<br>
                • Clique em <strong>"Adicionar esta subcategoria ao grupo"</strong> para ela entrar na lista.<br>
                • Se precisar, edite direto nos campos de nome e ordem ou clique em <strong>"Remover"</strong> para excluir.<br>
                • No final, clique em <strong>"✔ Salvar subcategorias"</strong> para gravar tudo.
            </div>


            

            <h6 class="mt-3">Subcategorias já cadastradas</h6>

            <?php $__currentLoopData = $subcategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-row align-items-center mb-2 p-2 border rounded bg-light">
                    <div class="col-md-6">
                        <label>Nome da subcategoria</label>
                        <input type="text"
                               class="form-control"
                               wire:model="subcategorias.<?php echo e($index); ?>.produto_subcategoria">
                    </div>

                    <div class="col-md-2">
                        <label>Ordem</label>
                        <input type="number"
                               class="form-control"
                               wire:model="subcategorias.<?php echo e($index); ?>.ordem">
                    </div>

                    <div class="col-md-3 mt-3">
                        <button type="button" class="btn btn-danger btn-sm"
                                wire:click="removerSubcategoria(<?php echo e($sub['id']); ?>)">
                            Remover
                        </button>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            
            <?php if($showNovaLinha): ?>
                <div class="form-row align-items-center mb-3 p-3 border rounded bg-white">

                    <h6 class="col-12 mb-2">Adicionar nova subcategoria</h6>

                    <div class="col-md-6">
                        <label>Nome da nova subcategoria</label>
                        <input type="text"
                               class="form-control"
                               placeholder="Digite o nome"
                               wire:model="nova_sub.produto_subcategoria">
                    </div>

                    <div class="col-md-2">
                        <label>Ordem</label>
                        <input type="number"
                               class="form-control"
                               placeholder="Ex: 1"
                               wire:model="nova_sub.ordem">
                    </div>

                    <div class="col-md-3 mt-3">
                        <p class="text-muted" style="font-size:13px;margin-bottom:6px;">
                            Clique para adicionar esta subcategoria na lista abaixo.
                        </p>
                        <button type="button"
                                class="btn btn-info btn-sm w-100"
                                wire:click="confirmarNovaSubcategoria">
                            ✔ Adicionar esta subcategoria ao grupo
                        </button>
                    </div>
                </div>
            <?php endif; ?>

            
            <?php if(!$showNovaLinha): ?>
                <button type="button" class="btn btn-success btn-sm mb-3" wire:click="mostrarNovaLinha">
                    + Adicionar subcategoria
                </button>
            <?php endif; ?>

            <br>

            
            <button type="button" class="btn btn-primary btn-lg mt-3" wire:click="salvarSubcategorias">
                ✔ Salvar subcategorias
            </button>
        <?php endif; ?>





    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="<?php echo e(route('gestor.produto_categorias.index')); ?>" class="btn btn-default">Voltar</a>
    </div>
</form>
<?php /**PATH /var/www/resources/views/livewire/gestor/produto_categoria.blade.php ENDPATH**/ ?>