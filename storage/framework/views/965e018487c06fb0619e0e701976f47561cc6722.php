<?php $__env->startSection('title', 'Formulário Produto - '); ?>

<form wire:submit.prevent="salvar" id="produto-form">
    <div class="card-header">
        <h1 class="card-title">Formulário Grupo de Produto</h1>

        <div class="card-tools">
            <div class="float-right">
                <a class="btn btn-danger" style="color: #fff"
                   href="<?php echo e(route('gestor.produto.produto_grupos.index', $produto->id ? $produto->id : 0)); ?>">
                    <i class="nav-icon fas fa-arrow-left"></i>
                    Grupos
                </a>

                <button type="submit" class="btn btn-success">
                    <i class="nav-icon fas fa-save"></i> Salvar Grupo
                </button>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nome">*Nome</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['grupo.nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nome"
                           wire:model.debounce.500ms="grupo.nome">

                    <?php $__errorArgs = ['grupo.nome'];
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
            </div>

            <div class="col-md-3">
                <!--- Ordem --->
                <div class="form-group">
                    <label for="ordem">Ordem</label>
                    <input type="number" class="form-control <?php $__errorArgs = ['grupo.ordem'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="ordem"
                           wire:model.debounce.500ms="grupo.ordem">

                    <?php $__errorArgs = ['grupo.ordem'];
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
                <!-- / Ordem -->
            </div>

            <div class="col-md-3"></div>

            <div class="col-md-6 mt-3">
                <h5>Obrigatoriedade</h5>
                <div style="margin-top: -5px; margin-bottom: 10px; font-weight: 300">
                    Indique se essa categoria é necessária para adicionar o produto ao carrinho
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="opcional" id="opcional" value="1"
                               wire:model="grupo.tipo">
                        <label class="form-check-label" for="informar-endereco">Opcional</label>
                    </div>
                    <div style="padding-left: 19px; margin-bottom: 10px; font-weight: 300">
                        O cliente pode ou não selecionar os itens
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="obrigatorio" id="obrigatorio" value="2"
                               wire:model="grupo.tipo">
                        <label class="form-check-label" for="nao-informar-endereco">Obrigatório</label>
                    </div>
                    <div style="padding-left: 19px; font-weight: 300">
                        O cliente deve selecionar 1 ou mais itens para adicionar o pedido ao carrinho
                    </div>
                </div>
            </div>

            <div class="col-md-6"></div>

            <div class="col-md-12  mt-3">
                <h5>Quantidade</h5>
                <div style="margin-top: -5px; margin-bottom: 10px; font-weight: 300">
                    Indique quantos itens podem ser selecionados
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="minimo">*Mínimo</label>
                    <input type="number" class="form-control <?php $__errorArgs = ['grupo.quantidade_minima'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           id="minimo"
                           wire:model.debounce.500ms="grupo.quantidade_minima">

                    <?php $__errorArgs = ['grupo.quantidade_minima'];
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
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="maxima">*Máximo</label>
                    <input type="number" class="form-control <?php $__errorArgs = ['grupo.quantidade_maxima'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           id="maxima"
                           wire:model.debounce.500ms="grupo.quantidade_maxima">

                    <?php $__errorArgs = ['grupo.quantidade_maxima'];
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
            </div>

        </div>

    </div>


    <div class="card-body">
        <!--- Comeplementos --->

        <div style="border: 1px solid #8a8a8a; padding: 5px; border-radius: 5px;">
            <div class="row">
                <div class="col-md-12">
                    <div style="float: left">
                        <h5 class="animate__animated animate__lightSpeedInRight"
                            style="font-family: 'Sacramento', cursive; font-size: 2rem; padding-top: 5px; padding-left: 5px; color: #747c84;">
                            Comeplementos
                        </h5>
                    </div>

                    <?php if($grupo->id): ?>
                        <div style="float: right">
                            <button wire:click.prevent="addComplemento" class="btn btn-success mb-4">
                                <i class="nav-icon fas fa-plus"></i> Adicionar Complemento
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <?php if($grupo->id): ?>
                        <?php $__currentLoopData = $complementos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $complemento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('gestor.produto.produto-grupo-complemento', ['complemento' => $complemento,'index' => $key])->html();
} elseif ($_instance->childHasBeenRendered('complemento'.$key)) {
    $componentId = $_instance->getRenderedChildComponentId('complemento'.$key);
    $componentTag = $_instance->getRenderedChildComponentTagName('complemento'.$key);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('complemento'.$key);
} else {
    $response = \Livewire\Livewire::mount('gestor.produto.produto-grupo-complemento', ['complemento' => $complemento,'index' => $key]);
    $html = $response->html();
    $_instance->logRenderedChild('complemento'.$key, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <div class="col-md-12">
                                        <div class="card card-outline card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Necessário realizar o cadastro do Grupo.</h3>
                                            </div>
                                        </div>
                                        <!-- /.card -->
                                    </div>
                            <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- / Comeplementos -->
    </div>

</form>
<?php /**PATH /var/www/resources/views/livewire/gestor/produto/produto_grupo.blade.php ENDPATH**/ ?>