<footer class="section-footer border-top" style="background: #0d0d0d; color: #fff !important;">
    <section class="footer-main border-top pt-5 pb-4">
        <div class="container">
            <div class="row" id="contato">

                {{-- Coluna 1: Precisa de ajuda? --}}
                <aside class="col-md-4 mb-4">
                    <h6 class="title mb-3" style="color: #fff !important;">Precisa de ajuda?</h6>
                    <ul class="list-unstyled list-padding">
                        @if($configuracoes->telefone1 || $configuracoes->telefone2)
                            <li class="footer-li mb-2">
                                <i class="fa fa-question-circle"></i>
                                <span>Atendimento de segunda a sábado.</span>
                            </li>
                        @endif

                        <li class="footer-li mb-2">
                            <i class="fa fa-file-text" aria-hidden="true"></i>
                            <a href="{{ route('lgpd_termos') }}" style="color: #fff !important; text-decoration: none;">
                                Política de Privacidade
                            </a>
                        </li>
                    </ul>

                    @if(!empty($configuracoes->logo))
                        <div class="mt-3 footer-logo-muted">
                            <img src="{{ asset($configuracoes->logo) }}" 
                                 alt="{{ config('app.name') }}" 
                                 style="max-height:150px;"> {{-- Inverte o logo para branco se for escuro --}}
                        </div>
                    @endif
                </aside>

                {{-- Coluna 2: Contato --}}
                <aside class="col-md-4 mb-4">
                    <h6 class="title mb-3" style="color: #fff !important;">Quer falar com a gente?</h6>
                    <ul class="list-unstyled list-padding">
                        @php
                            $linha1 = implode(', ', array_filter([$configuracoes->rua, $configuracoes->bairro]));
                            $linha2 = implode(' / ', array_filter([$configuracoes->cidade, $configuracoes->estado]));
                        @endphp

                        @if($linha1 || $linha2)
                            <li class="footer-li mb-2">
                                <i class="fa fa-map-marker"></i>
                                <span>
                                    @if($linha1) {{ $linha1 }} @endif
                                    @if($linha1 && $linha2)<br>@endif
                                    @if($linha2) {{ $linha2 }} @endif
                                 </span>
                            </li>
                        @endif

                        @if($configuracoes->telefone1)
                            <li class="footer-li mb-2">
                                <i class="fa fa-whatsapp"></i>
                                <a href="https://wa.me/{{ preg_replace('/\D/','',$configuracoes->telefone1) }}" 
                                   target="_blank" style="color: #fff !important;">
                                    {{ $configuracoes->telefone1 }} 
                                    <small style="color: #bbb !important;">(WhatsApp)</small>
                                </a>
                            </li>
                        @endif

                        @if($configuracoes->email1)
                            <li class="footer-li mb-2">
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:{{ $configuracoes->email1 }}" style="color: #fff !important;">
                                    {{ $configuracoes->email1 }}
                                </a>
                            </li>
                        @endif
                    </ul>

                    @if($configuracoes->telefone1)
                        <a href="https://wa.me/{{ preg_replace('/\D/','',$configuracoes->telefone1) }}"
                           target="_blank"
                           class="btn btn-sm text-white mt-2"
                           style="background:#25d366; border-radius:20px; padding:6px 18px; border:none;">
                            <i class="fa fa-whatsapp"></i> Fale conosco pelo WhatsApp
                        </a>
                    @endif
                </aside>

                {{-- Coluna 3: Mapa --}}
                @if($configuracoes->maps_iframe)
                <aside class="col-md-4 mb-4">
                    <h6 class="title mb-3" style="color: #fff !important;">Como chegar</h6>
                    <div class="g-maps" style="border-radius: 8px; overflow: hidden; filter: grayscale(1) invert(0.9) opacity(0.8);"> {{-- Mapa em modo Dark sutil --}}
                        {!! $configuracoes->maps_iframe !!}
                    </div>
                </aside>
                @endif
            </div>
        </div>
    </section>

    <section class="footer-bottom py-3" id="horarioFuncionamento" style="background:#000; color:#fff !important; border-top: 1px solid #1a1a1a;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-2 mb-md-0">
                    @if($configuracoes->horario_funcionamento)
                        <i class="fa fa-clock-o"></i> {{ $configuracoes->horario_funcionamento }} |
                    @endif
                    <span>© {{ config('app.name') }}</span>
                </div>

                <div class="col-md-4 text-center">
                    <span>Desenvolvido por 
                        <a href="https://wetech.com.br" target="_blank" style="color:#fff; font-weight:600;">Wetech</a>
                    </span>
                </div>

                <div class="col-md-2 text-md-right">
                    @if($configuracoes->facebook)
                        <a href="{{ $configuracoes->facebook }}" target="_blank" class="btn btn-icon btn-sm rounded-circle social-facebook"><i class="fa fa-facebook"></i></a>
                    @endif


                    @if($configuracoes->instagram)
                        <a href="{{ $configuracoes->instagram }}" target="_blank" class="btn btn-icon btn-sm rounded-circle social-instagram"><i class="fa fa-instagram"></i></a>
                    @endif

                          @if($configuracoes->twitter)
                        <a href="{{ $configuracoes->twitter }}" target="_blank"
                           class="btn btn-icon btn-sm rounded-circle social-twitter">
                            <i class="icofont-twitter"></i>
                        </a>
                          @endif
                </div>
            </div>
        </div>
    </section>

    <livewire:site.lgpd-aceite />
</footer>

<style>
    .section-footer, .section-footer p, .section-footer span, .section-footer li, .section-footer a {
        color: #fff !important;
    }
    
    .border-top {
        border-top: 1px solid #1a1a1a !important; /* Linha sutil para não ficar branco */
    }

.footer-li {
    display: flex !important;
    flex-direction: row !important; /* Força a ficar na horizontal */
    align-items: center !important;  /* Alinha verticalmente o ícone com o texto */
    gap: 10px;                       /* Cria um espaço padrão entre o ícone e o texto */
    margin-bottom: 12px;
}

.footer-li i {
    width: 20px;                     /* Define uma largura fixa para os ícones ficarem alinhados na mesma coluna */
    text-align: center;
    color: #d7af51 !important;       /* Dourado para destacar */
    padding: 0 !important;           /* Remove paddings que possam estar empurrando o ícone para baixo */
    margin: 0 !important;
}

.footer-li span, .footer-li a {
    line-height: 1.2;                /* Ajusta a altura da linha do texto */
}
    .social-facebook { background: #1877F2; color: #fff; margin-left: 5px; }
    .social-instagram { background: #E4405F; color: #fff; margin-left: 5px; }
    .social-twitter { background: #1DA1F2; color: #fff; margin-left: 5px; }
</style>