<?php $__env->startSection('title', 'Cadastrar Endereço - '); ?>
<?php $__env->startSection('header-title', 'Cadastrar Endereço'); ?>


<?php $__env->startSection('content-content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.user-endereco', ['endereco' => $endereco])->html();
} elseif ($_instance->childHasBeenRendered('HaoGZCn')) {
    $componentId = $_instance->getRenderedChildComponentId('HaoGZCn');
    $componentTag = $_instance->getRenderedChildComponentTagName('HaoGZCn');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HaoGZCn');
} else {
    $response = \Livewire\Livewire::mount('user.user-endereco', ['endereco' => $endereco]);
    $html = $response->html();
    $_instance->logRenderedChild('HaoGZCn', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user._user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.site.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/user/enderecos/create.blade.php ENDPATH**/ ?>