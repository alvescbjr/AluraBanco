<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\{Pessoa, CPF, Endereco};

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    #region Getters
    public function getEndereco() : string
    {
        return "{$this->endereco->getRua()}, {$this->endereco->getNumero()}, {$this->endereco->getBairro()}, {$this->endereco->getCidade()}";
    }
    #endregion
}