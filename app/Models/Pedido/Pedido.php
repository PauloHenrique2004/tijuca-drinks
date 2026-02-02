<?php

namespace App\Models\Pedido;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    // Adicionado 'quantidade_pessoas' ao fillable para permitir gravação direta
    protected $fillable = [
        'session', 'cliente_id', 'cliente_endereco_id', 'forma_entrega_id', 
        'cupom_desconto_id', 'valor_desconto', 'valor_entrega', 'status', 
        'forma_pagamento_id', 'finalizado_em', 'quantidade_pessoas'
    ];

    protected $dates = [
        'finalizado_em'
    ];

public static function boot()
{
    parent::boot();

    self::saving(function ($model) {
        if ($model->status == 1) {
            $model->finalizado_em = null;
        } elseif ($model->status == 2) {
            $model->finalizado_em = \Carbon\Carbon::now();
        }
    });
}
    /**
     * Melhoramos a criação para garantir que o status comece em 1 (Pendente)
     */
    public static function pedidoPendente($session): Pedido
    {
        $pedidoPendente = self::pendentes()->session($session)->first();

        if ($pedidoPendente)
            return $pedidoPendente;
        else {
            return self::create([
                'session' => $session,
                'status' => 1
            ]);
        }
    }

    // --- Mantemos os Scopes Originais ---
    public function scopeFiltroId($query, $id) { /* ... original ... */ }
    public function scopeFinalizadoEm($query, $de, $ate) { /* ... original ... */ }
    public function scopePendentes($query) { return $query->where('status', '=', "1"); }
    public function scopeFinalizados($query) { return $query->where('status', '=', "2"); }
    public function scopeSession($query, $session) { return $query->where('session', '=', $session); }

    // --- Relacionamentos ---
    public function cliente() { return $this->belongsTo('App\Models\User'); }
    public function clienteEndereco() { return $this->belongsTo('App\Models\UserEndereco'); }
    public function formaEntrega() { return $this->belongsTo('App\Models\FormaEntrega'); }
    public function cupomDesconto() { return $this->belongsTo('App\Models\CupomDesconto')->withTrashed(); }
    public function produtos() { return $this->hasMany('App\Models\Pedido\PedidoProduto'); }
    public function formaPagamento() { return $this->belongsTo('App\Models\FormaPagamento'); }

    /**
     * Retorna a soma de unidades de todos os itens (Ex: 2x Coca + 1x Suco = 3)
     */
    public function quantidade()
    {
        return $this->produtos ? $this->produtos->sum('quantidade') : 0;
    }

    /**
     * No seu sistema de orçamento, 'totalProdutos' agora retorna o count de tipos de itens
     * Isso resolve o problema do resumo lateral mostrar (0 itens)
     */
    public function totalProdutos()
    {
        return $this->produtos ? $this->produtos->count() : 0;
    }

    /**
     * Como não há mais preços, 'valorAPagar' sempre retorna 0
     * Evita erros em outras partes do sistema que ainda chamam esta função
     */
    public function valorAPagar()
    {
        return 0.00;
    }
}