<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private float $totalBonificacoes;

    public function adicionaBonificacaoDe(Funcionario $funcionario) : void
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotal() : float
    {
        return $this->totalBonificacoes;
    }
}