@section('title', 'Formulário Produto - ')

<form wire:submit.prevent="salvar">
    <div class="card-header">
        <h1 class="card-title">Formulário Produto  </h1>
        <div class="card-tools">
            <div class="float-right">
                <a class="btn btn-default" href="{{ route('gestor.produto.produtos.index') }}">
                    <i class="fas fa-list"></i> Ver Todos
                </a>
                
                {{-- Botão Rosa --}}
                <a class="btn btn-info @if(!$produto->id) disabled @endif" 
                   style="background-color: #e83e8c; border-color: #e83e8c; color: white;"
                   href="{{ route('gestor.produto.produto_grupos.index', $produto->id ?? 0) }}">
                    <i class="fas fa-layer-group"></i> Opções
                </a>

                {{-- Botão Verde --}}
                <button type="submit" class="btn btn-success" style="background-color: #28a745; border-color: #28a745;">
                    <i class="fas fa-save"></i> Salvar Drink
                </button>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            {{-- Foto Principal --}}
            <div class="col-md-4">
                <div class="form-group text-center">
                    <label for="foto" style="cursor: pointer;">
                        <img style="width: 220px; height: 220px; object-fit: cover; border-radius: 15px; border: 3px solid #eee;"
                             src="{{ ($foto && !$errors->has('foto')) ? $this->foto->temporaryUrl() : $produto->thumbnailUrl() }}">
                    </label>
                    <input type="file" id="foto" style="display:none" wire:model="foto">
                    <p class="small text-muted mt-2">Clique na imagem para enviar (PNG/JPG)</p>
                </div>
            </div>

            {{-- Campos de Texto --}}
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>* Nome do Drink</label>
                        <input type="text" class="form-control" wire:model.defer="produto.nome">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>* Categoria</label>
                        <select class="custom-select" wire:model="produto.produto_categoria_id">
                            <option value="">Selecione...</option>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Subcategoria</label>
                        <select class="custom-select" wire:model="produto.produto_subcategoria_id" @if($subcategorias->isEmpty()) disabled @endif>
                            <option value="">Selecione...</option>
                            @foreach($subcategorias as $sub)
                                <option value="{{ $sub->id }}">{{ $sub->produto_subcategoria }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Destaque na Home</label>
                        <select class="custom-select" wire:model="produto.destaque_id">
                            <option value="">Nenhum</option>
                            @foreach($destaquesHome as $destaque)
                                <option value="{{ $destaque->id }}">{{ $destaque->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 form-group">
                        <label>* Disponibilidade</label>
                        <div class="mt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="1" wire:model="produto.ativo" id="ativo">
                                <label class="form-check-label" for="ativo">Ativo</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="0" wire:model="produto.ativo" id="inactive">
                                <label class="form-check-label" for="inactive">Inativo</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Editor de Texto --}}
            <div class="col-md-12 mt-3">
                <label>Descrição e Composição</label>
                <div wire:ignore>
                    <textarea id="descricao" class="form-control">{!! $produto->descricao !!}</textarea>
                </div>
            </div>

          {{-- Galeria de Fotos Extras --}}
<div class="col-md-12" style="margin-top: 25px;">
    <h5>Galeria de Fotos Extras</h5>

    @if($produto->id)
        {{-- Listagem de imagens já salvas --}}
        <div class="row">
            @foreach($galeria as $img)
                <div class="col-md-2 mb-3 text-center">
                    <img style="height: 100px; border-radius: 10px; object-fit: cover; width: 100%" 
                         src="{{ asset($img->imagem) }}">
                    <button type="button" class="btn btn-danger btn-xs mt-1" 
                            wire:click="removerImagemGaleria({{ $img->id }})">
                        Remover
                    </button>
                </div>
            @endforeach
        </div>

        <hr>

        {{-- Área de Upload (Como estava no segundo print) --}}
        <div class="card p-3" style="background: #f8f9fa; border: 1px solid #ddd;">
            <strong>Adicionar Novas Imagens</strong>
            
            <div class="form-group mt-2">
                <input type="file" id="input-galeria" multiple wire:model="uploads">
                @error('uploads.*') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            @if($uploads)
                <div class="row mt-2">
                    @foreach($uploads as $index => $file)
                        <div class="col-md-2 mb-2">
                            <img src="{{ $file->temporaryUrl() }}" style="width: 100%; height: 80px; object-fit: cover; border-radius: 5px;">
                            <button type="button" class="btn btn-link btn-sm text-danger" wire:click="removerUpload({{ $index }})">Remover</button>
                        </div>
                    @endforeach
                </div>

                <div class="mt-2">
                    <button type="button" class="btn btn-primary" wire:click="salvar">
                        Adicionar a galeria
                    </button>
                </div>
            @endif
        </div>

    @else
        <div class="col-md-12" style="margin-top: 17px;">
            <div class="alert alert-success" role="alert" style="text-align: center">
                <h4 class="nav-icon fas fa">Alerta!</h4>
                <p class="mb-0">Após salvar o formulário a opção de incluir imagens aparecerá.</p>
            </div>
        </div>
    @endif
</div>
        </div>
    </div>
</form>

@section('script')
<script>
    $(document).ready(function() {
        if ($('#descricao').length > 0) {
            // Configuração que remove o alerta vermelho de versão
            const editor = CKEDITOR.replace('descricao', {
                versionCheck: false 
            });

            // Sincroniza o CKEditor com o Livewire
            editor.on('change', function() {
                @this.set('produto.descricao', editor.getData());
            });
        }
    });

    window.addEventListener('notify', e => {
        toastr.success(e.detail.message);
    });
</script>
@endsection