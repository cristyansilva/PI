<?php

namespace App\Model;

class Aluno extends Usuario {
    private int $matricula;
    private string $curso;

    public function criarPerfil(array $dados): void {
    }

    public function inserirAtividadeComplementar(array $dadosAtividade): void {
    }

    public function consultarRelatorioHoras(): RelatorioHorasDTO {
        return new RelatorioHorasDTO();
    }
}