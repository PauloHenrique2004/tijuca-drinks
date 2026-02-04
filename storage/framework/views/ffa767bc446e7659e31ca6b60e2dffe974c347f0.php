<!-- Menu bar -->
<div class="bg-header-dark">
    <div class="container menu-bar d-flex align-items-center">

        <ul class="list-unstyled form-inline mb-0">
            <li class="nav-item">
                <a class="nav-link text-menu pl-0" href="/">
                    Início <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-menu pl-0" href="/paginas/sobre-nos/1">Sobre nós</a>
            </li>

            <?php $__currentLoopData = $menuCategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $temSub = $cat->subcategorias->count() > 0; ?>

                <li class="nav-item <?php echo e($temSub ? 'dropdown' : ''); ?>">
                    <?php if($temSub): ?>
                        <a class="nav-link text-menu pl-0 dropdown-toggle"
                           href="<?php echo e(route('categoria', [$cat->slug, $cat->id])); ?>"
                           id="cat<?php echo e($cat->id); ?>Dropdown"
                           role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">
                            <?php echo e($cat->nome); ?>

                        </a>

                        <div class="dropdown-menu dropdown-menu-dark"
                             aria-labelledby="cat<?php echo e($cat->id); ?>Dropdown">
                            <?php $__currentLoopData = $cat->subcategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="dropdown-item"
                                   href="<?php echo e(route('subcategoria', [\Str::slug($sub->produto_subcategoria), $sub->id])); ?>">
                                    <?php echo e($sub->produto_subcategoria); ?>

                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php else: ?>
                        <a class="nav-link text-menu pl-0"
                           href="<?php echo e(route('categoria', [$cat->slug, $cat->id])); ?>">
                            <?php echo e($cat->nome); ?>

                        </a>
                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <div class="list-unstyled form-inline mb-0 ml-auto flex-nowrap">
            <a href="#contato" 
            class="btn-cardapio d-inline-flex align-items-center ml-2 px-3 py-2">
            <i class="icofont-envelope mr-2"></i>   
                <span>Contato</span>
            </a>
        </div>

    </div>
</div>

<style>
    .btn-cardapio {
        background-color: #d7af51; /* Dourado */
        color: #000 !important;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none !important;
        transition: 0.3s;
        white-space: nowrap;
    }

    .btn-cardapio:hover {
        background-color: #d4ac0d;
        transform: translateY(-1px);
    }

    /* Força o ícone a não ter margens extras e ficar centralizado */
    .btn-cardapio i {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem; /* Tamanho do ícone proporcional ao texto */
        margin-top: 0;
        margin-bottom: 0;
    }

    /* Garante que o texto também esteja no eixo central */
    .btn-cardapio span {
        line-height: 1;
        display: inline-block;
    }
</style><?php /**PATH /var/www/resources/views/layouts/site/includes/menubar.blade.php ENDPATH**/ ?>