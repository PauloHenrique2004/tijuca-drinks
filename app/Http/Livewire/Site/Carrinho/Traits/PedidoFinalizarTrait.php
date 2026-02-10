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

    // 4
    if (empty($this->pedido->tipo_bebida)) return false;

    // 5. Quantidade de Pessoas (A TRAVA REAL)
    // Se for vazio, nulo, zero ou menor que zero, retorna FALSE
    if (empty($this->quantidade_pessoas) || intval($this->quantidade_pessoas) <= 0) {
        return false;
    }

    return true;
}

}