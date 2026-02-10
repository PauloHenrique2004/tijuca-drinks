<?php
// app/Http/Livewire/Site/Carrinho/Pedido.php

namespace App\Http\Livewire\Site\Carrinho;

use App\Http\Livewire\Site\Carrinho\Traits\PedidoCollapseTrait;
use App\Http\Livewire\Site\Carrinho\Traits\PedidoFinalizarTrait;
use App\Http\Livewire\Site\Carrinho\Traits\PedidoProdutosTrait;
use App\Util\Sessao\Sessao;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Pedido extends Component
{
    use PedidoCollapseTrait;
    use PedidoProdutosTrait;
    use PedidoFinalizarTrait;

    protected $listeners = [];

    public $formasEntrega; 
    public $formaEntrega = null;
    public $quantidade_pessoas = 1;
    public \App\Models\Pedido\Pedido $pedido;
    public $total = 0.0;

    protected $rules = [
        'pedido.forma_entrega_id' => ['required'],
        'quantidade_pessoas' => 'required|integer|min:1',
    ];

    public function mount()
    {
        $this->obterPedido();
        $this->formasEntrega = \App\Models\FormaEntrega::all(); 
        $this->calcularTotal();
    }

    public function obterPedido()
    {
        // Método centralizado na Model para evitar duplicidade de sessão
        $this->pedido = \App\Models\Pedido\Pedido::pedidoPendente(Sessao::id());
    }

public function updated($name)
{

if ($name == 'pedido.forma_entrega_id') {
        if (!auth()->check()) {
            // Reseta a escolha do usuário
            $this->pedido->forma_entrega_id = null;
            
            // Dispara o evento do scipt
            $this->dispatchBrowserEvent('abrir-modal-login');
            return;
        }
    }
    // Sempre que QUALQUER coisa mudar (evento ou pessoas), 
    // a gente roda a validação do botão.
    $this->pedidoValido = $this->pedidoValidoVerificar();

    // Se não for o campo de pessoas, tenta validar as outras regras (opcional)
    if ($name !== 'quantidade_pessoas') {
        try {
            $this->validateOnly($name);
        } catch (\Exception $e) {
            // Se der erro de validação em outro campo, desativa o botão
            $this->pedidoValido = false;
        }
    }
}
    public function render()
    {
        $this->removerPedidoProdutosInativos();
        
        // Atualiza a contagem de itens para o resumo lateral
        $this->total = $this->pedido->totalProdutos(); 

        $this->emit('atualizarCarrinhoHeader');
        return view('livewire.site.carrinho.pedido');
    }

    public function calcularTotal() 
    {
        $this->total = 0; // Orçamento sem preços
    }

    /**
     * Método principal para finalizar o orçamento
     */
    public function comprar()
    {
        $this->validate();

        // Verifica se há itens no pedido antes de prosseguir
        if ($this->pedido->produtos()->count() == 0) {
            $this->addError('pedido', 'Adicione pelo menos um item ao seu orçamento.');
            return;
        }

        if (Auth::check()) {
            $this->pedido->cliente_id = Auth::user()->id;
        }

        // Salva tipo de evento e quantidade de pessoas
        $this->pedido->quantidade_pessoas = $this->quantidade_pessoas;
        $this->pedido->save();

        // Dispara o evento para o componente de WhatsApp
        $this->emit('whatsAppPedido', $this->pedido->id, $this->quantidade_pessoas);
        
        // Se houver modal de visualização:
        $this->emit('pedido-whatsapp-visualizar');
    }
}