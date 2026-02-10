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
        'pedido.tipo_bebida'       => 'required|string',
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
    // 1. Limpeza e Validação (Lógica que estava na Trait)
    $this->removerPedidoProdutosInativos();

    if (!$this->pedidoValidoVerificar()) {
        // Se o botão estava habilitado mas algo falhou, paramos aqui
        return; 
    }

    // 2. Vincula o cliente se estiver logado
    if (Auth::check()) {
        $this->pedido->cliente_id = Auth::id();
    }

    // 3. SALVAMENTO NO BANCO (Aqui resolvemos o problema do Tipo Bebida)
    $this->pedido->quantidade_pessoas = $this->quantidade_pessoas;
    
    // Garantimos que o campo do modelo receba o valor que está no wire:model
    // Se o select estiver vinculado a pedido.tipo_bebida, o save() abaixo já basta.
    $this->pedido->save();

    // 4. DISPARO PARA O WHATSAPP
    // Importante: Passamos o 3º parâmetro (bebida) para o link ser gerado corretamente
    $this->emit('whatsAppPedido', 
        $this->pedido->id, 
        $this->quantidade_pessoas, 
        $this->pedido->tipo_bebida
    );

}
}