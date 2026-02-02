<div>
    <?php if (! ($lgpdAceite)): ?>
        <div class="custom-container-lgpd">
            <div class="box-content">
                <p>Bem-vindo!</p>
                <p style="margin-top: 10px">Utilizamos cookies para armazenar informações sobre como você usa o nosso
                    site. Tudo para tornar sua experiência a mais agradável possível. Para entender os tipos de
                    cookies que utilizamos, clique em '<a href="<?php echo e(route('lgpd_termos')); ?>">Termos de Uso e Política de
                        Privacidade</a>'.
                    Ao clicar em 'Aceitar', você consente com a utilização de cookies e com os termos de uso e política
                    de
                    privacidade.</p></div>
            <div class="box-button">
                <button wire:click="aceitar()">ACEITAR</button>
                <button onclick="location.href='<?php echo e(route('lgpd_termos')); ?>'">TERMOS DE USO</button>
            </div>
        </div>
    <?php endif; ?>

    <style wire:ignore>
        .custom-container-lgpd .box-button button {
            background: var(--site-cor);
            color: #fbfcff;
        }
    </style>
</div><?php /**PATH /var/www/resources/views/livewire/site/lgpd_aceite.blade.php ENDPATH**/ ?>