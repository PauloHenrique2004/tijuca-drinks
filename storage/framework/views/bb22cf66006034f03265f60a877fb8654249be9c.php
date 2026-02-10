<div style="display: flex">
    <?php if($enderecoAtendido->id): ?>
        <div style="margin-right: 5px">
            <button class="btn btn-sm btn-default" wire:click.prevent="remover()" style="height: 38px; width: 35px">
                <i class="fas fa-trash-alt" aria-hidden="true"></i>
            </button>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/resources/views/livewire/gestor/endereco/dne_endereco_atendido.blade.php ENDPATH**/ ?>