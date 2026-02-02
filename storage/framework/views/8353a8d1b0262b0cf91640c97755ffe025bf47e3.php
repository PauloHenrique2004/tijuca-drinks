<?php $__env->startSection('title', 'Pedidos - '); ?>
<?php $__env->startSection('header-title', 'Pedidos'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card-body">

        <!----------------- Busca ----------------->
        <form class="form-row align-items-center mt-2 mb-4" accept-charset="UTF-8" method="get"
              action="<?php echo e(route('gestor.pedidos.index')); ?>">
            <div class="col-auto">
                <label for="id">ID</label>
                <input id="id" name="id" placeholder="ID" class="form-control" type="text"
                       value="<?php echo e(request()->query('id')); ?>">
            </div>
            <div class="col-auto">
                <label for="dataDe">Pedido De</label>
                <input id="dataDe" name="finalizadoEmDe" class="form-control" type="date"
                       value="<?php echo e(request()->query('finalizadoEmDe')); ?>">
            </div>
            <div class="col-auto">
                <label for="dataAte">Pedido Até</label>
                <input id="dataAte" name="finalizadoEmAte" class="form-control" type="date"
                       value="<?php echo e(request()->query('finalizadoEmAte')); ?>">
            </div>
            <div class="col-auto" style="margin-top: 30px !important">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
            <div class="col-auto" style="margin-top: 30px !important">
                <a class="btn btn-default" href="<?php echo e(route('gestor.pedidos.index')); ?>">Limpar</a>
            </div>
        </form>
        <!---------------- / Busca ---------------->

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Produtos</th>
                    <th>Tipo de evento</th>
                    <th>Realizado em</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e($pedido->id); ?></td>

                        <td>
                            <?php echo e($pedido->cliente ? $pedido->cliente->name : 'Visitante'); ?>

                        </td>

                        <td>
                            <div data-toggle="modal" data-target="#pedido<?php echo e($pedido->id); ?>Modal"
                                 style="text-align: center">
                                <i class="fas fa-eye"></i> Visualizar
                            </div>
                        </td>

                        <td>
                            <?php echo e($pedido->formaEntrega ? $pedido->formaEntrega->nome : ''); ?>

                        </td>

                
                        <td>
                            <?php echo e($pedido->finalizado_em->format('d/m/Y H:i')); ?>

                        </td>
                        <!-- / Ações -->
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer clearfix">
        <?php echo e($pedidos->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('gestor.pedido-detalhe-txt', ['pedido' => $pedido])->html();
} elseif ($_instance->childHasBeenRendered('JSP6ODA')) {
    $componentId = $_instance->getRenderedChildComponentId('JSP6ODA');
    $componentTag = $_instance->getRenderedChildComponentTagName('JSP6ODA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JSP6ODA');
} else {
    $response = \Livewire\Livewire::mount('gestor.pedido-detalhe-txt', ['pedido' => $pedido]);
    $html = $response->html();
    $_instance->logRenderedChild('JSP6ODA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.gestor.gestor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/gestor/pedidos/index.blade.php ENDPATH**/ ?>