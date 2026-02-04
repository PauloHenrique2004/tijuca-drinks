<nav id="main-nav">
    <ul class="second-nav">
        <li>
            <a href="/"><i class="icofont-home mr-2"></i> Início</a>
        </li>

        <li>
            <a href="/paginas/sobre-nos/1">
                <i class="icofont-info-circle mr-2"></i> Sobre nós
            </a>
        </li>

        
        <?php $__currentLoopData = $menuCategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $temSub = $cat->subcategorias->count() > 0; ?>

            <?php if($temSub): ?>
                <li>
                    <span>
                        <i class="icofont-ui-folder mr-2"></i> <?php echo e($cat->nome); ?>

                    </span>
                    <ul>
                        
                        <li>
                            <a href="<?php echo e(route('categoria', [$cat->slug, $cat->id])); ?>">
                                Todos em <?php echo e($cat->nome); ?>

                            </a>
                        </li>

                        
                        <?php $__currentLoopData = $cat->subcategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(route('subcategoria', [\Str::slug($sub->produto_subcategoria), $sub->id])); ?>">
                                    <?php echo e($sub->produto_subcategoria); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
            <?php else: ?>
                <li>
                    <a href="<?php echo e(route('categoria', [$cat->slug, $cat->id])); ?>">
                        <i class="icofont-ui-folder mr-2"></i> <?php echo e($cat->nome); ?>

                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <li>
            <a href="#contato"><i class="icofont-email mr-2"></i> Contato</a>
        </li>

        <?php if(Auth::check()): ?>
            <li>
                <a href="<?php echo e(route('user.minha-conta')); ?>">
                    <i class="icofont-ui-user mr-2"></i> Minha Conta
                </a>
            </li>
            <li>
                <a href="/"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="icofont-logout mr-2"></i> Sair
                </a>
            </li>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display:none;">
                <?php echo csrf_field(); ?>
            </form>
        <?php else: ?>
            <li>
                <a href="<?php echo e(route('login')); ?>">
                    <i class="icofont-login mr-2"></i> Entrar
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
<?php /**PATH /var/www/resources/views/layouts/site/includes/menubar-mobile.blade.php ENDPATH**/ ?>