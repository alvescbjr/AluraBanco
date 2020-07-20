<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{

    private function percentualTarifa() : float
    {
        return 0.05;
    }

    private function transferir(float $valorATransferir, Conta $contaDestino) : void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Valor indisponível!";
            exit();
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}