<!-- Menu bar -->
<div class="bg-header-dark">
    <div class="container menu-bar d-flex align-items-center">

        <ul class="list-unstyled form-inline mb-0">
            <li class="nav-item">
                <a class="nav-link text-menu pl-0" href="/">
                    Início <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-menu pl-0" href="/paginas/sobre-nos/1">Sobre nós</a>
            </li>

            @foreach($menuCategorias as $cat)
                @php $temSub = $cat->subcategorias->count() > 0; @endphp

                <li class="nav-item {{ $temSub ? 'dropdown' : '' }}">
                    @if($temSub)
                        <a class="nav-link text-menu pl-0 dropdown-toggle"
                           href="{{ route('categoria', [$cat->slug, $cat->id]) }}"
                           id="cat{{ $cat->id }}Dropdown"
                           role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">
                            {{ $cat->nome }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-dark"
                             aria-labelledby="cat{{ $cat->id }}Dropdown">
                            @foreach($cat->subcategorias as $sub)
                                <a class="dropdown-item"
                                   href="{{ route('subcategoria', [\Str::slug($sub->produto_subcategoria), $sub->id]) }}">
                                    {{ $sub->produto_subcategoria }}
                                </a>
                            @endforeach
                        </div>
                    @else
                        <a class="nav-link text-menu pl-0"
                           href="{{ route('categoria', [$cat->slug, $cat->id]) }}">
                            {{ $cat->nome }}
                        </a>
                    @endif
                </li>
            @endforeach
        </ul>

        <div class="list-unstyled form-inline mb-0 ml-auto flex-nowrap">
            <a href="#contato" class="btn-link-header text-menu px-3 py-2">
                Contato
            </a>


<a href="/#destaques" 
   class="btn-cardapio d-inline-flex align-items-center ml-2 px-3 py-2">
    <i class="icofont-restaurant-menu mr-2"></i>
    <span>Cardápio</span>
</a>
        </div>

    </div>
</div>

<style>
    .btn-cardapio {
        background-color: #d7af51; /* Dourado */
        color: #000 !important;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none !important;
        transition: 0.3s;
        white-space: nowrap;
    }

    .btn-cardapio:hover {
        background-color: #d4ac0d;
        transform: translateY(-1px);
    }

    /* Força o ícone a não ter margens extras e ficar centralizado */
    .btn-cardapio i {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem; /* Tamanho do ícone proporcional ao texto */
        margin-top: 0;
        margin-bottom: 0;
    }

    /* Garante que o texto também esteja no eixo central */
    .btn-cardapio span {
        line-height: 1;
        display: inline-block;
    }
</style>