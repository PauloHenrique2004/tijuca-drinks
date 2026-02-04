<?php

namespace App\Http\Livewire\Gestor\Produto;

use App\Models\ProdutoCategoria;
use App\Models\ProdutoDestaque;
use App\Models\ProdutoImagem;
use App\Models\ProdutoSubCategoria;
use App\Util\Thumbnail\Thumbnail;
use Livewire\Component;
use Livewire\WithFileUploads;

class Produto extends Component
{
    use WithFileUploads;

    public \App\Models\Produto\Produto $produto;
    public $categorias;
    public $foto;
    public $destaquesHome = [];
    public $subcategorias;
    public $uploads = [];
    public $buffer = [];

    protected $rules = [
        'produto.nome'                    => 'required',
        'produto.descricao'               => 'nullable',
        'produto.ativo'                   => 'required',
        'produto.destaque_id'             => 'nullable|exists:produto_destaques,id',
        'foto'                            => 'nullable|image|max:1024|mimes:jpeg,png',
        'buffer.*'                        => 'nullable|image|max:2048|mimes:jpeg,png',
        'produto.produto_categoria_id'    => 'required|exists:produto_categorias,id',
        'produto.produto_subcategoria_id' => 'nullable|exists:produto_subcategorias,id',
    ];

    public function mount(\App\Models\Produto\Produto $produto)
    {
        $this->produto = $produto;
        $this->categorias = ProdutoCategoria::orderBy('nome')->get();
        $this->destaquesHome = ProdutoDestaque::orderBy('ordem')->orderBy('nome')->get();

        if (!$this->produto->exists) {
            $this->produto->ativo = 1;
        }

        $this->carregarSubcategorias($this->produto->produto_categoria_id);
    }

    public function carregarSubcategorias($value)
    {
        if ($value) {
            $this->subcategorias = ProdutoSubCategoria::where('produto_categoria_id', $value)->orderBy('ordem')->get();
        } else {
            $this->subcategorias = collect();
        }
    }

    public function updatedProdutoProdutoCategoriaId($value)
    {
        $this->carregarSubcategorias($value);
        $this->produto->produto_subcategoria_id = null;
    }

    public function confirmarBuffer()
    {
        if (!empty($this->buffer)) {
            foreach ($this->buffer as $file) { $this->uploads[] = $file; }
            $this->buffer = [];
        }
    }

    public function salvar()
    {
        $this->validate();
        
        // Mantendo o banco aceitando NULL conforme conversamos
        $this->produto->preco = null;
        $this->produto->preco_promocional = null;
        $this->produto->promocional = 0;

        $this->produto->destaque_id = $this->produto->destaque_id ?: null;

        if (empty($this->produto->produto_subcategoria_id)) {
            $this->produto->produto_subcategoria_id = null;
        }

        $this->salvarFoto();
        $this->produto->save();
        $this->salvarUploads();

        $this->uploads = [];
        $this->buffer  = [];

        $this->dispatchBrowserEvent('notify', ['message' => 'Drink atualizado com sucesso!']);
    }

    public function removerImagemGaleria($imagemId)
    {
        $imagem = ProdutoImagem::find($imagemId);
        if ($imagem) $imagem->delete();
    }

    public function removerUpload($index)
    {
        unset($this->uploads[$index]);
        $this->uploads = array_values($this->uploads);
    }

    public function updated($name) { $this->validateOnly($name); }

    private function salvarFoto()
    {
        if (empty($this->foto)) return;
        $fileName = $this->foto->store(\App\Models\Produto\Produto::STORAGE);
        $thumbnailFileName = Thumbnail::make($fileName, \App\Models\Produto\Produto::STORAGE);
        $this->foto = null;
        $this->produto->foto = $fileName;
        $this->produto->thumbnail = $thumbnailFileName;
    }

    private function salvarUploads()
    {
        if (!$this->produto->exists || empty($this->uploads)) return;
        foreach ($this->uploads as $arquivo) {
            $path = $arquivo->store(\App\Models\Produto\Produto::STORAGE);
            ProdutoImagem::create(['produto_id' => $this->produto->id, 'imagem' => $path]);
        }
    }

    public function render()
    {
        $galeria = $this->produto->exists ? $this->produto->imagens()->orderBy('id')->get() : collect();
        return view('livewire.gestor.produto.produto', compact('galeria'))->layout('layouts.gestor.gestor');
    }
}