<?php

namespace App\Http\Livewire\Site\Produto\Traits;

trait PedidoDetalheTxtTrait
{
public function pedidoTxt($pedido, $newLine, $space, $qtdPessoas = 1)
{
    $txt = "🍸 *SOLICITAÇÃO DE ORÇAMENTO*" . $newLine;
    $txt .= "Identificador: #{$pedido->id}" . $newLine . $newLine;

    $txt .= "*LISTA DE ITENS:*" . $newLine;

    // Usamos $pedido->produtos()->get() para garantir que pegamos do banco
    foreach ($pedido->produtos as $produto) {
        $txt .= "✅ {$produto->quantidade}x {$produto->nome}" . $newLine;
    }

    //dd($txt);

    $txt .= $newLine . "---------------------------" . $newLine;
    
    $evento = ($pedido->formaEntrega) ? $pedido->formaEntrega->nome : 'A combinar';
    $txt .= "📍 *Tipo de Evento:* {$evento}" . $newLine;
    $txt .= "👥 *Qtd. de Pessoas:* {$qtdPessoas}" . $newLine;
    
    $txt .= "---------------------------" . $newLine;

    if ($pedido->cliente_id && $pedido->cliente) {
        $txt .= "👤 *Cliente:* {$pedido->cliente->name}" . $newLine;
    } else {
        $txt .= "👤 *Cliente:* Visitante" . $newLine;
    }

    return $txt;
}
}