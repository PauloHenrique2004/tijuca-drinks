<?php $__env->startSection('title', 'Formulário Cliente - '); ?>

<form wire:submit.prevent="salvar" id="usuario-form">
    <div class="card-header">
        <h1 class="card-title">Formulário Cliente</h1>

        <div class="card-tools">
            <div class="float-right">
                <a href="<?php echo e(route('gestor.usuarios.index')); ?>" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-success">
                    <i class="nav-icon fas fa-save"></i> Salvar Usuário
                </button>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-6">
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
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['telefone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="telefone"
                           wire:model.debounce.500ms="telefone">

                    <?php $__errorArgs = ['telefone'];
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

        <div class="row mb-4">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email">*E-mail</label>
                    <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email"
                           wire:model.debounce.500ms="email">

                    <?php $__errorArgs = ['email'];
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

        <div class="row mb-4">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control <?php $__errorArgs = ['senha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="senha"
                           wire:model.debounce.500ms="senha">

                    <?php $__errorArgs = ['senha'];
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
        <!--- Endereços --->

        <div style="border: 1px solid #8a8a8a; padding: 5px; border-radius: 5px;">
            <div class="row">
                <div class="col-md-12">
                    <div style="float: left">
                        <h5 class="animate__animated animate__lightSpeedInRight"
                            style="font-family: 'Sacramento', cursive; font-size: 2rem; padding-top: 5px; padding-left: 5px; color: #747c84;">
                            Endereços
                        </h5>
                    </div>

                    <?php if($usuario->id): ?>
                        <div style="float: right">
                            <button wire:click.prevent="addEndereco" class="btn btn-success mb-4">
                                <i class="nav-icon fas fa-plus"></i> Adicionar Enderecço
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <?php if($usuario->id): ?>
                        <?php $__currentLoopData = $enderecos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $endereco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('gestor.usuario.endereco', ['endereco' => $endereco,'index' => $key])->html();
} elseif ($_instance->childHasBeenRendered('endereco'.$key)) {
    $componentId = $_instance->getRenderedChildComponentId('endereco'.$key);
    $componentTag = $_instance->getRenderedChildComponentTagName('endereco'.$key);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('endereco'.$key);
} else {
    $response = \Livewire\Livewire::mount('gestor.usuario.endereco', ['endereco' => $endereco,'index' => $key]);
    $html = $response->html();
    $_instance->logRenderedChild('endereco'.$key, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <div class="col-md-12">
                            <div class="card card-outline card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Necessário realizar o cadastro do usuário.</h3>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- / Endereços -->
    </div>
</form>
<?php /**PATH /var/www/resources/views/livewire/gestor/usuario/usuario.blade.php ENDPATH**/ ?>