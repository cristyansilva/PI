<?php

namespace App\Model;

class Evento {
    private int $id;
    private string $nome;
    private \DateTime $data;
    private string $local;
    private string $descricao;
    private string $tipo;
    private string $status;

    public function divulgarEvento(string $nome, string $status): void {
    }

    public function inserirEvento(Evento $evento): Evento {
        return $evento;
    }

    public function editarEvento(array $dadosEvento): void {
    }

    public function inscreverEmEvento(Evento $evento): Inscricao {
        return new Inscricao();
    }
}