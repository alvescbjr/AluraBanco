<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, CPF};

class Funcionario extends Pessoa
{
    private string $cargo;
    protected float $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    #region Getters
    public function getCargo(): string
    {
        return $this->cargo;
    }
    #endregion

    public function alteraNome(string $nome): void
    {
        parent::validaNome($nome);
        $this->nome = $nome;
    }

    public function calculaBonificacao(float $salario) : float
    {
        return $salario * 0.1;
    }
}