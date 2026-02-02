<?php $__env->startSection('title', 'Formulário Produto - '); ?>

<form wire:submit.prevent="salvar">
    <div class="card-header">
        <h1 class="card-title">Formulário Produto  </h1>
        <div class="card-tools">
            <div class="float-right">
                <a class="btn btn-default" href="<?php echo e(route('gestor.produto.produtos.index')); ?>">
                    <i class="fas fa-list"></i> Ver Todos
                </a>
                
                
                <a class="btn btn-info <?php if(!$produto->id): ?> disabled <?php endif; ?>" 
                   style="background-color: #e83e8c; border-color: #e83e8c; color: white;"
                   href="<?php echo e(route('gestor.produto.produto_grupos.index', $produto->id ?? 0)); ?>">
                    <i class="fas fa-layer-group"></i> Opções
                </a>

                
                <button type="submit" class="btn btn-success" style="background-color: #28a745; border-color: #28a745;">
                    <i class="fas fa-save"></i> Salvar Drink
                </button>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            
            <div class="col-md-4">
                <div class="form-group text-center">
                    <label for="foto" style="cursor: pointer;">
                        <img style="width: 220px; height: 220px; object-fit: cover; border-radius: 15px; border: 3px solid #eee;"
                             src="<?php echo e(($foto && !$errors->has('foto')) ? $this->foto->temporaryUrl() : $produto->thumbnailUrl()); ?>">
                    </label>
                    <input type="file" id="foto" style="display:none" wire:model="foto">
                    <p class="small text-muted mt-2">Clique na imagem para enviar (PNG/JPG)</p>
                </div>
            </div>

            
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>* Nome do Drink</label>
                        <input type="text" class="form-control" wire:model.defer="produto.nome">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>* Categoria</label>
                        <select class="custom-select" wire:model="produto.produto_categoria_id">
                            <option value="">Selecione...</option>
                            <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nome); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Subcategoria</label>
                        <select class="custom-select" wire:model="produto.produto_subcategoria_id" <?php if($subcategorias->isEmpty()): ?> disabled <?php endif; ?>>
                            <option value="">Selecione...</option>
                            <?php $__currentLoopData = $subcategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($sub->id); ?>"><?php echo e($sub->produto_subcategoria); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Destaque na Home</label>
                        <select class="custom-select" wire:model="produto.destaque_id">
                            <option value="">Nenhum</option>
                            <?php $__currentLoopData = $destaquesHome; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destaque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($destaque->id); ?>"><?php echo e($destaque->nome); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="col-md-6 form-group">
                        <label>* Disponibilidade</label>
                        <div class="mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="1" wire:model="produto.ativo" id="ativo">
                                <label class="form-check-label" for="ativo">Ativo</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="0" wire:model="produto.ativo" id="inactive">
                                <label class="form-check-label" for="inactive">Inativo</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-md-12 mt-3">
                <label>Descrição e Composição</label>
                <div wire:ignore>
                    <textarea id="descricao" class="form-control"><?php echo $produto->descricao; ?></textarea>
                </div>
            </div>

          
<div class="col-md-12" style="margin-top: 25px;">
    <h5>Galeria de Fotos Extras</h5>

    <?php if($produto->id): ?>
        
        <div class="row">
            <?php $__currentLoopData = $galeria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-2 mb-3 text-center">
                    <img style="height: 100px; border-radius: 10px; object-fit: cover; width: 100%" 
                         src="<?php echo e(asset($img->imagem)); ?>">
                    <button type="button" class="btn btn-danger btn-xs mt-1" 
                            wire:click="removerImagemGaleria(<?php echo e($img->id); ?>)">
                        Remover
                    </button>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <hr>

        
        <div class="card p-3" style="background: #f8f9fa; border: 1px solid #ddd;">
            <strong>Adicionar Novas Imagens</strong>
            
            <div class="form-group mt-2">
                <input type="file" id="input-galeria" multiple wire:model="uploads">
                <?php $__errorArgs = ['uploads.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger small"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <?php if($uploads): ?>
                <div class="row mt-2">
                    <?php $__currentLoopData = $uploads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-2 mb-2">
                            <img src="<?php echo e($file->temporaryUrl()); ?>" style="width: 100%; height: 80px; object-fit: cover; border-radius: 5px;">
                            <button type="button" class="btn btn-link btn-sm text-danger" wire:click="removerUpload(<?php echo e($index); ?>)">Remover</button>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="mt-2">
                    <button type="button" class="btn btn-primary" wire:click="salvar">
                        Adicionar a galeria
                    </button>
                </div>
            <?php endif; ?>
        </div>

    <?php else: ?>
        <div class="col-md-12" style="margin-top: 17px;">
            <div class="alert alert-success" role="alert" style="text-align: center">
                <h4 class="nav-icon fas fa">Alerta!</h4>
                <p class="mb-0">Após salvar o formulário a opção de incluir imagens aparecerá.</p>
            </div>
        </div>
    <?php endif; ?>
</div>
        </div>
    </div>
</form>

<?php $__env->startSection('script'); ?>
<script>
    $(document).ready(function() {
        if ($('#descricao').length > 0) {
            // Configuração que remove o alerta vermelho de versão
            const editor = CKEDITOR.replace('descricao', {
                versionCheck: false 
            });

            // Sincroniza o CKEditor com o Livewire
            editor.on('change', function() {
                window.livewire.find('<?php echo e($_instance->id); ?>').set('produto.descricao', editor.getData());
            });
        }
    });

    window.addEventListener('notify', e => {
        toastr.success(e.detail.message);
    });
</script>
<?php $__env->stopSection(); ?><?php /**PATH /var/www/resources/views/livewire/gestor/produto/produto.blade.php ENDPATH**/ ?>