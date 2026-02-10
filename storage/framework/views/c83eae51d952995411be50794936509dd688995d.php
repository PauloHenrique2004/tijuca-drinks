<form method="POST" action="<?php echo e($action); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field($method); ?>

    <div class="card-body">
        <div class="row">

            
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo"
                           value="<?php echo e(old('titulo', $topoBanner->titulo)); ?>">
                </div>
            </div>

            
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="link">Link (opcional)</label>
                    <input type="text" class="form-control" id="link" name="link"
                           value="<?php echo e(old('link', $topoBanner->link)); ?>">
                </div>
            </div>

            
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="ordem">Ordem</label>
                    <input type="number" class="form-control" id="ordem" name="ordem" required
                           value="<?php echo e(old('ordem', $topoBanner->ordem)); ?>">
                </div>
            </div>

            













            
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="imagem_desktop">Imagem Desktop</label>
                    <div class="alert alert-warning py-2" role="alert" style="margin-bottom:8px;">
                        Dimensão recomendada: 1700 × 578px. Formatos: JPG/PNG/WebP.
                    </div>
                    <input type="file" class="form-control" id="imagem_desktop" name="imagem_desktop" accept=".png,.jpg,.jpeg,.webp">
                    <?php if(!empty($topoBanner->imagem_desktop)): ?>
                        <div class="mt-2">
                            <img src="<?php echo e(Storage::disk('storage_configuracoes')->url($topoBanner->imagem_desktop)); ?>"
                                 alt="Desktop" style="max-height: 80px;">
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="imagem_mobile">Imagem Mobile</label>
                    <div class="alert alert-warning py-2" role="alert" style="margin-bottom:8px;">
                        Dimensão recomendada: 773 × 1013px. Formatos: JPG/PNG/WebP.
                    </div>
                    <input type="file" class="form-control" id="imagem_mobile" name="imagem_mobile" accept=".png,.jpg,.jpeg,.webp">
                    <?php if(!empty($topoBanner->imagem_mobile)): ?>
                        <div class="mt-2">
                            <img src="<?php echo e(Storage::disk('storage_configuracoes')->url($topoBanner->imagem_mobile)); ?>"
                                 alt="Mobile" style="max-height: 80px;">
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>
<?php /**PATH /var/www/resources/views/gestor/topo_banners/_form.blade.php ENDPATH**/ ?>