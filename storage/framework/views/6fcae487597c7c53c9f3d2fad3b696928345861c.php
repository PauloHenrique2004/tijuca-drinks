<!-- Nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-black osahan-header py-0 container">
    <a class="navbar-brand mr-0" href="/">
        <img class="img-fluid logo-img animate__animated animate__pulse"
             src="<?php echo e(asset($configuracoes->logo)); ?>" alt="<?php echo e(config('app.name')); ?>">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="ml-3 d-flex align-items-center">
        <!-- search  -->









        <form method="GET" action="<?php echo e(route('home')); ?>" accept-charset="UTF-8">
            <div class="input-group mr-sm-2 col-lg-12">
                <input type="search"
                       class="form-control"
                       id="busca-produtos"
                       name="busca"
                       placeholder="Buscar drink..."
                       value="<?php echo e(request('busca')); ?>">
                <div class="input-group-prepend">
                    <button class="btn btn-success rounded-right" type="submit">
                        <i class="icofont-search"></i>
                    </button>
                </div>
            </div>
        </form>

    </div>

    <div class="ml-auto d-flex align-items-center">
        <?php if(Auth::check()): ?>
            <div class="dropdown mr-3">
                <a href="#" class="dropdown-toggle text-dark" id="dropdownMenuButton" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" style= "color: #fff !important">
                    Olá <?php echo e(Auth::user()->firstName()); ?>

                </a>
                <div class="dropdown-menu dropdown-menu-right top-profile-drop" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?php echo e(route('user.minha-conta')); ?>">Minha Conta</a>
                    <a class="dropdown-item" href="/"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Sair
                    </a>
                </div>
            </div>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
        <?php else: ?>
        <!-- login/signup -->
            <span style="padding-right: 5px; font-weight: bold; color: #fff">Entrar</span>
            <a href="<?php echo e(route('login')); ?>"
               class="mr-2 text-dark bg-light rounded-pill p-2 icofont-size border shadow-sm">
                <i class="icofont-login" style="color: #d7af51"></i>
            </a>
        <?php endif; ?>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('site.carrinho-header', [])->html();
} elseif ($_instance->childHasBeenRendered('Ay8KsoU')) {
    $componentId = $_instance->getRenderedChildComponentId('Ay8KsoU');
    $componentTag = $_instance->getRenderedChildComponentTagName('Ay8KsoU');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Ay8KsoU');
} else {
    $response = \Livewire\Livewire::mount('site.carrinho-header', []);
    $html = $response->html();
    $_instance->logRenderedChild('Ay8KsoU', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</nav>

<?php /**PATH /var/www/resources/views/layouts/site/includes/navbar.blade.php ENDPATH**/ ?>