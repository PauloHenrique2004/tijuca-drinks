@foreach($secoes as $bloco)
    @if($bloco['produtos']->isNotEmpty())
        <section class="mt-5 secao-produtos" id="cardapio-{{ Str::slug($bloco['secao']->nome) }}">
            <div class="d-flex align-items-center mb-4">
                <h4 class="titulo-sessoes-moderno">{{ $bloco['secao']->nome }}</h4>
                <div class="linha-decorativa-dourada"></div>
            </div>

            <div class="row" style="justify-content: center">
                @foreach($bloco['produtos'] as $produto)
                    <div class="col-6 col-md-3 mb-4">
                        <a href="{{ route('produtos.show', [$produto->slug, $produto]) }}" class="card-drink-link">
                            <div class="card-drink">
                                <div class="container-imagem">
                                    <img alt="{{ $produto->nome }}" src="{{ asset($produto->fotoUrl()) }}" class="img-fluid">
                                </div>
                                <div class="info-drink">
                                    <h6 class="nome-produto-moderno">{{ $produto->nome }}</h6>
                                    <span class="btn-ver-mais">Ver detalhes</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
@endforeach

<style>
    /* Estilo dos Títulos das Seções */
    .titulo-sessoes-moderno {
        color: #d7af51; /* Dourado */
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-right: 15px;
        font-size: 1.2rem;
    }

    .linha-decorativa-dourada {
        flex-grow: 1;
        height: 1px;
        background: linear-gradient(to right, #f1c40f, transparent);
    }

    /* O Card Moderno */
    .card-drink {
        background: #1a1a1a; /* Cinza quase preto */
        border: 1px solid #333;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
        box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }

    .card-drink:hover {
        transform: translateY(-5px);
        border-color: #f1c40f;
        box-shadow: 0 15px 30px rgba(241, 196, 15, 0.1);
    }

    .container-imagem {
        overflow: hidden;
        aspect-ratio: 1 / 1;
    }

    .container-imagem img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .card-drink:hover .container-imagem img {
        transform: scale(1.1); /* Zoom suave na imagem ao passar o mouse */
    }

    /* Info e Nome */
    .info-drink {
        padding: 15px;
        text-align: center;
    }

    .nome-produto-moderno {
        color: #fff;
        font-weight: 500;
        font-size: 15px;
        margin-bottom: 8px;
        height: 40px; /* Mantém o alinhamento */
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .btn-ver-mais {
        color: #f1c40f;
        font-size: 12px;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 1px;
        opacity: 0.7;
        transition: 0.3s;
    }

    .card-drink:hover .btn-ver-mais {
        opacity: 1;
    }

    .card-drink-link {
        text-decoration: none !important;
    }
</style>