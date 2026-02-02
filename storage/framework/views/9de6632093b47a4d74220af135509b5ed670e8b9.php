




























<?php if($produto->preco_promocional): ?>
    <?php if($produto->preco_a_partir_de && $produto->preco_a_partir_de > 0): ?>
        <small>A partir de</small><br>
    <?php endif; ?>

    
    <span style="font-size: 12px; color: #87a3af;">
        <?php if($produto->preco_a_partir_de && $produto->preco_a_partir_de > 0): ?>
            <s>R$ <?php echo e(number_format($produto->preco_a_partir_de, 2, ',', '.')); ?></s>
        <?php else: ?>
            <s>R$ <?php echo e(number_format($produto->preco, 2, ',', '.')); ?></s>
        <?php endif; ?>
    </span>

    
    <span style="color: #87a3af; font-weight: 700; margin-left: 4px;">
        R$ <?php echo e(number_format($produto->preco_promocional, 2, ',', '.')); ?>

    </span>
<?php else: ?>
    <?php if($produto->preco_a_partir_de && $produto->preco_a_partir_de > 0): ?>
        A partir de
        R$ <?php echo e(number_format($produto->preco_a_partir_de, 2, ',', '.')); ?>

    <?php else: ?>
        R$ <?php echo e(number_format($produto->preco, 2, ',', '.')); ?>

    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/resources/views/shared/produto/_produto-preco.blade.php ENDPATH**/ ?>