<section>
    <div class="grupo-header">
        <span class="grupo-header-wrapper">
            <p class="grupo-header-name">
                <?php echo e($carga['produtoGrupo']['nome']); ?>


                <span class="grupo-header-description">
                <?php if($carga['produtoGrupo']['tipo'] == 1): ?>
                        <?php if($carga['produtoGrupo']['quantidade_minima'] > 0): ?>
                            Mínimo <?php echo e($carga['produtoGrupo']['quantidade_minima']); ?> até <?php echo e($carga['produtoGrupo']['quantidade_maxima']); ?>

                        <?php else: ?>
                            Escolha até <?php echo e($carga['produtoGrupo']['quantidade_maxima']); ?>

                        <?php endif; ?>

                        <?php echo e($carga['produtoGrupo']['quantidade_maxima'] > 1 ? 'opções' : 'opção'); ?>.
                    <?php else: ?>
                        Escolha <?php echo e($carga['produtoGrupo']['quantidade_minima']); ?>

                        <?php echo e($carga['produtoGrupo']['quantidade_minima'] > 1 ? 'opções' : 'opção'); ?>.
                    <?php endif; ?>
                 </span>
            </p>

            <?php if($carga['valido'] || $carga['produtoGrupo']['tipo'] == 1): ?>
                <span class="grupo-valido">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path fill-rule="evenodd"
                              d="M2.59 6.57A1 1 0 0 0 1.19 8l5.16 5.09L16.72 2.36A1 1 0 1 0 15.28.97l-8.96 9.28-3.73-3.68z"
                              clip-rule="evenodd"></path>
                    </svg>
                </span>
            <?php else: ?>
                <div>
                    <?php if($carga['produtoGrupo']['quantidade_maxima'] > 1): ?>
                        <span class="grupo-required">
                            <span
                                class="grupo-required-name"><?php echo e($quantidadeUtilizada); ?>/<?php echo e($carga['produtoGrupo']['quantidade_maxima']); ?></span>
                         </span>
                    <?php endif; ?>

                    <span class="grupo-required">
                        <span class="grupo-required-name">OBRIGATÓRIO</span>
                    </span>
                </div>
            <?php endif; ?>
        </span>
    </div>

    <?php $__currentLoopData = $carga['pedidoProdutoGrupoComplementos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $complemento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('livewire.site.produto._pedido_produto_grupo_complemento', compact('index', 'complemento'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</section>
<?php /**PATH /var/www/resources/views/livewire/site/produto/pedido_produto_grupo.blade.php ENDPATH**/ ?>