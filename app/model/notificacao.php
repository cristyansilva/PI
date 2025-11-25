<?php

namespace App\Model;

class Notificacao {
    private int $id;
    private string $titulo;
    private string $mensagem;
    private \DateTime $dataEnvio;
    private bool $lida;
}