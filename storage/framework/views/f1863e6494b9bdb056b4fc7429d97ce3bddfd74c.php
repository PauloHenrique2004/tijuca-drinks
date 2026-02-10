<aside class="main-sidebar elevation-4 sidebar-light-info">
    <!-- Brand Logo -->




        
        
        


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <!-- Painel de Controle -->
                <li class="nav-item mb-3">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>
                            Painel de Controle
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('gestor.configuracoes.edit', 1)); ?>" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>Site - Configurações</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('gestor.pagina', 1)); ?>" class="nav-link">
                                <i class="nav-icon fas fa-file-word"></i>
                                <p>Site - Sobre nós</p>
                            </a>
                        </li>
                       <li class="nav-item">
                            <a href="<?php echo e(route('gestor.endereco.dne')); ?>" class="nav-link">
                                <i class="nav-icon fas fa-map-marked"></i>
                                <p>Endereços Atendidos</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(route('gestor.gestores.index')); ?>" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Gestores</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(route('gestor.lgpd_termos.index')); ?>" class="dropdown-item nav-link">
                                <i class="nav-icon fas fa-file-word"></i> LGPD Termos
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(route('gestor.lgpd_aceites.index')); ?>" class="dropdown-item nav-link">
                                <i class="nav-icon fas fa-check"></i> LGPD Aceites
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- / Painel de Controle -->

                <li class="nav-item">
                    <a href="<?php echo e(route('gestor.topo_banners.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Banner principal</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('gestor.slides.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>Card</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?php echo e(route('gestor.usuarios.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>Clientes</p>
                    </a>
                </li>

                <li class="nav-item mt-2">
                    <a href="<?php echo e(route('gestor.forma_entregas.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>Tipos de Evento</p>
                    </a>
                </li>

              <!--  <li class="nav-item mt-2">
                    <a href="<?php echo e(route('gestor.cupom_descontos.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-ticket-alt"></i>
                        <p>Cupom Descontos</p>
                    </a>
                </li>-->

                <li class="nav-item">
                    <a href="<?php echo e(route('gestor.horarios.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-clock"></i>
                        <p>Horário de Disponibilidade <br> de Pedidos</p>
                    </a>
                </li>

       

                <li class="nav-item mt-3">
                    <a href="<?php echo e(route('gestor.produto_categorias.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-align-left"></i>
                        <p>Categorias</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('gestor.produtos_destaque.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-star"></i>
                        <p>Destaques de produtos</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('gestor.produto.produtos.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>Produtos</p>
                    </a>
                </li>

                <li class="nav-item mt-3">
                    <a href="<?php echo e(route('gestor.pedidos.index')); ?>" class="nav-link">
                        <i class="nav-icon  fas fa-book"></i>
                        <p>Pedidos</p>
                    </a>
                </li>

                <li class="nav-item mt-3">
                    <a href="<?php echo e(route('gestor.depoimentos.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>Depoimentos</p>
                    </a>
                </li>


                
                
                
                
                
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH /var/www/resources/views/layouts/gestor/includes/sidebar.blade.php ENDPATH**/ ?>