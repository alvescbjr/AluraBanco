<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\SaldoInsuficienteException;
use \InvalidArgumentException;

class Conta
{
    private Titular $titular;
    protected float $saldo;

    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    #region getters

    public function getCPFTitular(): string
    {
        return $this->titular->getCPF();
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function getEnderecoTitular(): string
    {
        return $this->titular->getEndereco();
    }

    public function getSaldo() : float
    {
        return $this->saldo;
    }

    #endregion

    public function sacar(float $valorASacar): void
    {
        $valorASacar += $valorASacar * $this->percentualTarifa();
        
        if ($valorASacar > $this->saldo) {
            throw new SaldoInsuficienteException($valorASacar, $this->saldo);
        }


        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar) : void
    {
        if ($valorADepositar <= 0) {
            throw new InvalidArgumentException('O valor precisa ser maior que zero');
        }

        $this->saldo += $valorADepositar;
    }

    
}