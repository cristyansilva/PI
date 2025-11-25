<?php

namespace App\Model;

class AtividadeComplementar {
    private int $id;
    private string $descricao;
    private string $tipo;
    private int $horasDeclaradas;
    private int $horasValidadas;
    private string $status;
    private string $comprovanteURL;
    private \DateTime $dataEnvio;

    public function validarHorasComplementares(AtividadeComplementar $atividade, int $horasValidadas): void {
    }
}