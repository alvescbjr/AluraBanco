<?php

namespace Alura\Banco\Modelo;

final class CPF
{
    private string $numero;

    public function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);
        
        if (!$numero) {
            throw new InvalidArgumentException('Número de CPF inválido');
        }

        $this->numero = $numero;
    }

    #region getters
    public function getNumero(): string
    {
        return $this->numero;
    }
    #endregion
}