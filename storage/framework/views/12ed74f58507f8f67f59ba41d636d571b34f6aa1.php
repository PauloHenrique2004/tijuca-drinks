<form method="POST" action="<?php echo e($action); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field($method); ?>

    <div class="card-body">
        <div class="row">

            
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nome">Nome da seção</label>
                    <input type="text" class="form-control" id="nome" name="nome"
                           value="<?php echo e(old('nome', $destaque->nome)); ?>">
                    <small class="form-text text-muted">
                        Ex.: Mais vendidos, Queridinhos, Destaques da semana.
                    </small>
                </div>
            </div>

            
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="ordem">Ordem</label>
                    <input type="number" class="form-control" id="ordem" name="ordem"
                           value="<?php echo e(old('ordem', $destaque->ordem)); ?>">
                    <small class="form-text text-muted">
                        Define a posição da seção na home (1 aparece primeiro).
                    </small>
                </div>
            </div>

            
            <div class="col-sm-3 d-flex align-items-center">
                <div class="form-group mb-0">
                    <label for="ativo" class="mr-2">Ativo</label><br>
                    <input type="checkbox" id="ativo" name="ativo" value="1"
                        <?php echo e(old('ativo', $destaque->ativo ?? true) ? 'checked' : ''); ?>>
                </div>
            </div>

        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>
<?php /**PATH /var/www/resources/views/gestor/produtos_destaque/_form.blade.php ENDPATH**/ ?>