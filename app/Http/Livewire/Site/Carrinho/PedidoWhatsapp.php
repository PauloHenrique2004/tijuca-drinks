<?php

namespace App\Http\Livewire\Site\Carrinho;

use App\Http\Livewire\Site\Produto\Traits\PedidoDetalheTxtTrait;
use App\Models\Configuracao;
use Livewire\Component;

class PedidoWhatsapp extends Component
{
    use PedidoDetalheTxtTrait;

    private const WHATSAPP_NEW_LINE = "%0a";

    public $href;

    protected $listeners = ['whatsAppPedido'];

    public function render()
    {
        return view('livewire.site.carrinho.pedido_whatsapp');
    }

    /**
     * Recebe o evento do componente Pedido para finalizar e gerar o link.
     * * @param int $id
     * @param int|null $qtdPessoas
     */
   public function whatsAppPedido($id, $qtdPessoas = 1, $tipoBebida = null)
{
    // O segredo está no ->with('produtos') para carregar os itens do banco agora!
    $pedido = \App\Models\Pedido\Pedido::with('produtos')->find($id);

    if (!$pedido) return;

    $pedido->session = null;
    $pedido->status = 2; 
    $pedido->quantidade_pessoas = $qtdPessoas;
    $pedido->tipo_bebida = $tipoBebida;
    $pedido->save();

    // Gerar link
    $this->href = $this->whatsAppUrlBuild($pedido, $qtdPessoas);

    $this->dispatchBrowserEvent('pedido-whatsapp-visualizar');
}
    /**
     * Constrói a URL do WhatsApp usando o número do banco de dados.
     * * @param \App\Models\Pedido\Pedido $pedido
     * @param int $qtdPessoas
     * @return string
     */
private function whatsAppUrlBuild($pedido, $qtdPessoas)
{
    $configuracao = \App\Models\Configuracao::first();
    
    // O link que vem do banco
    $linkDoBanco = $configuracao->whatsapp_link;

    // Geramos o texto limpo da Trait (usando \n para quebras de linha reais)
    $textoPuro = $this->pedidoTxt($pedido, "\n", " ", $qtdPessoas);

    // Verificamos se o link já tem um '?' para saber se usamos '&text=' ou '?text='
    $conector = str_contains($linkDoBanco, '?') ? '&text=' : '?text=';

    // Montamos a URL final protegendo o texto com rawurlencode
    return $linkDoBanco . $conector . rawurlencode($textoPuro);
}
}