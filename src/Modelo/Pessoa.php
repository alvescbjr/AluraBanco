<?php

namespace Alura\Banco\Modelo;

use \InvalidArgumentException;

class Pessoa
{
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    #region Getters
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getCPF(): string
    {
        return $this->cpf->getNumero();
    }
    #endRegion

    final protected function validaNome(string $nome): void
    {
        if (5 > strlen($nome) ) {
            throw new InvalidArgumentException('Nome Precisa ter pelo menos 5 caracteres!');
        }
    }
}