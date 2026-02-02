<?php

namespace App\Http\Livewire\Site\Carrinho\Traits;

use App\Models\Horario;
use Illuminate\Support\Facades\Auth;

trait PedidoFinalizarTrait
{
    public $pedidoValido = false;

    /**
     * Mantemos o nome 'comprar' para não quebrar o HTML original,
     * mas a função agora serve para finalizar a solicitação de orçamento.
     */
    public function comprar()
    {
        $this->removerPedidoProdutosInativos();

        // Validação de segurança antes de processar
        if (!$this->pedidoValidoVerificar()) {
            return;
        }

        // Se o usuário estiver logado, vincula ao pedido
        if (Auth::check()) {
            $this->pedido->cliente_id = Auth::user()->id;
        }

        // Sincroniza a quantidade de pessoas antes de salvar
        $this->pedido->quantidade_pessoas = $this->quantidade_pessoas;
        
        $this->pedido->save();

        // Emitindo evento para o componente Whatsapp com o ID do pedido
        // Adicionamos a quantidade de pessoas como segundo parâmetro para facilitar
        $this->emit('whatsAppPedido', $this->pedido->id, $this->quantidade_pessoas);
    }

    /**
     * Atualiza o estado do botão na tela (Habilitado/Desabilitado)
     */
    public function verificarPedidoValido()
    {
        $this->pedidoValido = $this->pedidoValidoVerificar();
    }

    /**
     * Lógica simplificada: Só precisa de itens e do tipo de evento selecionado.
     */
 public function pedidoValidoVerificar()
{
    // 1. Horário
    if (!\App\Models\Horario::lojaAberta()) return false;

    // 2. Itens no carrinho
    if (!$this->pedido || $this->pedido->produtos()->count() == 0) return false;

    // 3. Tipo de Evento
    if (!$this->pedido->forma_entrega_id) return false;

    // 4. Quantidade de Pessoas (A TRAVA REAL)
    // Se for vazio, nulo, zero ou menor que zero, retorna FALSE
    if (empty($this->quantidade_pessoas) || intval($this->quantidade_pessoas) <= 0) {
        return false;
    }

    return true;
}

}