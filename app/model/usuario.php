<?php

namespace App\Model;

class Usuario {
    protected int $id;
    protected string $nome;
    protected string $email;
    protected string $senhaHash;

    public function login(string $email, string $senha): bool {
        return true;
    }

    public function gerenciarPerfilProprio(): void {
    }

    /**
     * @return Evento[]
     */
    public function visualizarEventos(): array {
        return [];
    }

    public function participarChat(Chat $chat, string $conteudo): void {
    }

    public function enviarMensagem(): Mensagem {
        return new Mensagem();
    }

    public function receberNotificacao(Notificacao $notificacao): void {
    }
}