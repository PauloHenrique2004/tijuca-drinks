<div class="border-bottom p-3 d-none mobile-nav">
    <div class="title d-flex align-items-center">
        <a href="/" class="text-decoration-none text-dark d-flex align-items-center">
            <img class="osahan-logo mr-2" src="<?php echo e(asset($configuracoes->logo)); ?>" alt="<?php echo e(config('app.name')); ?>" style="height: 120px">
        </a>
        <p class="ml-auto m-0">
        </p>
        <a class="toggle ml-3" href="#"><i class="icofont-navigation-menu"></i></a>
    </div>

    <div style="display: flex">
        <form accept-charset="UTF-8" style="width: 100%" method="GET" action="/">
            <div class="input-group mt-3 rounded shadow-sm overflow-hidden bg-white">
                <div class="input-group-prepend">
                    <button class="border-0 btn btn-outline-secondary text-success bg-white"><i
                            class="icofont-search"></i>
                    </button>
                </div>

                <input type="text" class="shadow-none border-0 form-control pl-0" placeholder="Buscar..." name="busca"
                       value="<?php echo e(request()->query('busca')); ?>">
            </div>
        </form>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('site.carrinho-header-mobile', [])->html();
} elseif ($_instance->childHasBeenRendered('Z1Vu5eH')) {
    $componentId = $_instance->getRenderedChildComponentId('Z1Vu5eH');
    $componentTag = $_instance->getRenderedChildComponentTagName('Z1Vu5eH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Z1Vu5eH');
} else {
    $response = \Livewire\Livewire::mount('site.carrinho-header-mobile', []);
    $html = $response->html();
    $_instance->logRenderedChild('Z1Vu5eH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>

    <?php if (! ($lojaAberta)): ?>
        <div
            style=" width: 100%; background: #000; text-align: center; font-weight: bold; text-transform: uppercase; color: #fff; height: 30px; padding-top: 6px; margin-top: 5px; ">
            Loja Fechada
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/resources/views/layouts/site/includes/navbar-mobile.blade.php ENDPATH**/ ?>