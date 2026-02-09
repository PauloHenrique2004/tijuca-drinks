<?php

namespace App\Http\Controllers\Gestor;

use App\Models\User;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = User::paginate(15);
        return view('gestor.usuarios.index', compact('usuarios'));
    }

  /**ublic function destroy(User $user)
    {
        $user->enderecos()->forceDelete();
        $user->delete();
        return redirect()->route('gestor.usuarios.index');
    }*/

    public function destroy(User $user)
{
    // 1. Apaga os endereços (você já tinha esse)
    $user->enderecos()->forceDelete();

    // 2. Apaga os registros de aceite de LGPD (que deu erro antes)
    if (method_exists($user, 'lgpdAceites')) {
        $user->lgpdAceites()->delete();
    }

    // 3. Apaga os pedidos vinculados (já que se chegou aqui, não são concluídos)
    // Isso evita o erro de integridade na tabela de pedidos
    if (method_exists($user, 'pedidos')) {
        $user->pedidos()->delete();
    }

    // 4. Agora sim, apaga o usuário
    $user->delete();

    return redirect()->route('gestor.usuarios.index');
}
}
