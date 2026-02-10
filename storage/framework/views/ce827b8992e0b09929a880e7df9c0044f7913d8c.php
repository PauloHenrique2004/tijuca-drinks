<?php $__env->startSection('title', 'Horário de Disponibilidade de Pedidos - '); ?>
<?php $__env->startSection('header-title', 'Horário de Disponibilidade de Pedidos'); ?>

<?php $__env->startSection('card-tools'); ?>
   <a class="btn btn-primary content animate__animated animate__flipInX" href="<?php echo e(route('gestor.horario')); ?>">
        <i class="fas fa-plus" aria-hidden="true"></i> Definir Novo Horário
    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card-body">

        <!----------------- Busca ----------------->
        <form class="mt-2 mb-4" accept-charset="UTF-8" method="get"
              action="<?php echo e(route('gestor.horarios.index')); ?>">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input name="nome" placeholder="Pesquisa por nome" class="form-control"
                           style="min-width: 120px" type="text" value="<?php echo e(request()->query('nome')); ?>">

                    <div class="input-group-append">
                        <button class="btn btn-default ml-2 table-search"><i class="fa fa-search"></i></button>
                        <a class="btn btn-default ml-1" href="<?php echo e(route('gestor.horarios.index')); ?>">Limpar</a>
                    </div>
                </div>
            </div>
        </form>
        <!---------------- / Busca ---------------->

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Dias</th>
                    <th>De</th>
                    <th>Até</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $horarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($horario->seg ? 'Segunda ' : ''); ?>

                            <?php echo e($horario->ter ? 'Terça ' : ''); ?>

                            <?php echo e($horario->qua ? 'Quarta ' : ''); ?>

                            <?php echo e($horario->qui ? 'Quinta ' : ''); ?>

                            <?php echo e($horario->sex ? 'Sexta ' : ''); ?>

                            <?php echo e($horario->sab ? 'Sábado ' : ''); ?>

                            <?php echo e($horario->dom ? 'Domingo ' : ''); ?>

                        </td>
                        <td><?php echo e($horario->de); ?></td>
                        <td><?php echo e($horario->ate); ?></td>

                        <!-- Ações -->
                        <td>
                            <a class="btn btn-sm btn-primary"
                               href="<?php echo e(route('gestor.horario', $horario->id)); ?>">
                                <i class="fas fa-pencil-alt" aria-hidden="true"></i> Editar
                            </a>

                            <!-- Remover -->
                            <a data-confirm="Tem certeza?" class="btn btn-sm btn-danger" rel="nofollow"
                               data-method="delete"
                               href="#"
                               onclick="event.preventDefault(); document.getElementById('delete-form-<?php echo e($horario->id); ?>').submit();">
                                <i class="fas fa-trash" aria-hidden="true"></i> Excluir
                            </a>

                            <form id="delete-form-<?php echo e($horario->id); ?>"
                                  action="<?php echo e(route('gestor.horarios.destroy', $horario->id)); ?>"
                                  method="POST"
                                  style="display: none;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                            </form>
                            <!-- / Remover -->

                        </td>
                        <!-- / Ações -->
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer clearfix">
        <?php echo e($horarios->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/horarios/index.blade.php ENDPATH**/ ?>