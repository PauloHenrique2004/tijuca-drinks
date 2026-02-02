<?php $__currentLoopData = $pedidoProdutoGrupoCargas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pedidoProdutoGrupoCarga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('site.produto.pedido-produto-grupo', ['carga' => $pedidoProdutoGrupoCarga,'index' => $key])->html();
} elseif ($_instance->childHasBeenRendered('produtoGrupo'.$key)) {
    $componentId = $_instance->getRenderedChildComponentId('produtoGrupo'.$key);
    $componentTag = $_instance->getRenderedChildComponentTagName('produtoGrupo'.$key);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('produtoGrupo'.$key);
} else {
    $response = \Livewire\Livewire::mount('site.produto.pedido-produto-grupo', ['carga' => $pedidoProdutoGrupoCarga,'index' => $key]);
    $html = $response->html();
    $_instance->logRenderedChild('produtoGrupo'.$key, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<link rel="stylesheet" href="<?php echo e(asset('site/css/produto-complemento.css')); ?>">
<?php /**PATH /var/www/resources/views/livewire/site/produto/_produto_pedido_produto_grupos.blade.php ENDPATH**/ ?>