<div>
    <div class="card-body">
        <div style="margin-bottom: 1em; display: flex">

            <button wire:click.prevent="voltar()" <?php if(sizeof($tipoVisualizacaoHistorico) == 0): ?> disabled
                    <?php endif; ?> class="btn btn-sm btn-primary" style="width: 100px; margin-right: 5px">
                <i class="fas fa-arrow-circle-left"></i> Voltar
            </button>

            <input wire:model="query" placeholder="Pesquisa" class="form-control" type="text">
        </div>

        <?php if($tipoVisualizacao == 'bairro'): ?>
            <div style="margin: 0 auto; display: flex; width: fit-content; margin-bottom: 1em;">
                <input id="bairroNome" wire:model.debounce.500ms="bairroCustom" placeholder="Nome do bairro"
                       style="max-width: 190px"
                       class="form-control" type="text">
                <button wire:click.prevent="cadastrarBairroCustom()" class="btn btn-sm btn-primary"
                        style="width: 150px; margin-left: 5px;">
                    <i class="fas fa-save"></i> Cadastrar
                </button>
            </div>
        <?php endif; ?>

        <?php if($tipoVisualizacao == 'uf'): ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 35px"></th>
                        <th>UF</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $faixaUfs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <button wire:click.prevent="alterarTipoMunicipios('<?php echo e($uf->UFE_SG); ?>')"
                                        class="btn btn-sm btn-primary">
                                    <i class="fas fa-folder-open" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td>
                            <span
                                class="badge <?php if($uf->enderecosAtendidos->count() == 0): ?> badge-secondary <?php else: ?> badge-primary <?php endif; ?> right"><?php echo e($uf->enderecosAtendidos->count()); ?></span>
                                <?php echo e($uf->UFE_SG); ?>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        <?php elseif($tipoVisualizacao == 'municipio'): ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 35px"></th>
                        <th>Município</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $municipios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <button wire:click.prevent="alterarTipoBairros(<?php echo e($municipio->LOC_NU); ?>)"
                                        class="btn btn-sm btn-primary">
                                    <i class="fas fa-folder-open" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td>
                            <span
                                class="badge <?php if($municipio->enderecosAtendidos->count() == 0): ?> badge-secondary <?php else: ?> badge-primary <?php endif; ?> right"><?php echo e($municipio->enderecosAtendidos->count()); ?></span>
                                <?php echo e($municipio->LOC_NO); ?>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        <?php elseif($tipoVisualizacao == 'bairro'): ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Bairro</th>
                        <th style="width: 220px;">Valor</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Customizados -->
                    <?php if($bairros->currentPage() == 1): ?>
                        <?php $__currentLoopData = $bairrosEnderecoAtendidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bairro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($bairro->bairro_custom); ?></td>
                                <td>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('gestor.endereco.dne-endereco-atendido', ['uf' => $ufeSg,'locNu' => $locNu,'enderecoAtendidoId' => $bairro->id,'index' => $bairro->uuid()])->html();
} elseif ($_instance->childHasBeenRendered($bairro->uuid())) {
    $componentId = $_instance->getRenderedChildComponentId($bairro->uuid());
    $componentTag = $_instance->getRenderedChildComponentTagName($bairro->uuid());
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($bairro->uuid());
} else {
    $response = \Livewire\Livewire::mount('gestor.endereco.dne-endereco-atendido', ['uf' => $ufeSg,'locNu' => $locNu,'enderecoAtendidoId' => $bairro->id,'index' => $bairro->uuid()]);
    $html = $response->html();
    $_instance->logRenderedChild($bairro->uuid(), $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                    <?php $__currentLoopData = $bairros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bairro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($bairro->BAI_NO); ?></td>
                            <td>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('gestor.endereco.dne-endereco-atendido', ['uf' => $ufeSg,'locNu' => $locNu,'baiNu' => $bairro->BAI_NU,'index' => $bairro->uuid()])->html();
} elseif ($_instance->childHasBeenRendered($bairro->uuid())) {
    $componentId = $_instance->getRenderedChildComponentId($bairro->uuid());
    $componentTag = $_instance->getRenderedChildComponentTagName($bairro->uuid());
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($bairro->uuid());
} else {
    $response = \Livewire\Livewire::mount('gestor.endereco.dne-endereco-atendido', ['uf' => $ufeSg,'locNu' => $locNu,'baiNu' => $bairro->BAI_NU,'index' => $bairro->uuid()]);
    $html = $response->html();
    $_instance->logRenderedChild($bairro->uuid(), $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>

    <div class="card-footer clearfix">
        <?php if($tipoVisualizacao == 'municipio'): ?>
            <?php echo e($municipios->links()); ?>

        <?php elseif($tipoVisualizacao == 'bairro'): ?>
            <?php echo e($bairros->links()); ?>

        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/resources/views/livewire/gestor/endereco/dne.blade.php ENDPATH**/ ?>