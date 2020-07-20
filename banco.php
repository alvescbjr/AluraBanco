<?php

require_once "autoload.php";

use Alura\Banco\Modelo\Conta\{Conta,ContaPoupanca,Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

$umaConta = new Conta(
    new Titular(
        'Vinicius Dias',
        new CPF('123.456.789-90'),
        new Endereco(
            'São Paulo',
            'Lapa',
            'Rua talvez',
            '123 c/6'
        )
    )
);


$poupanca = new ContaPoupanca(
    new Titular(
        'Vinicius Dias',
        new CPF('987.369.852-10'),
        new Endereco(
            'São Paulo',
            'Lapa',
            'Rua A',
            '369'
        )
    )
);
$poupanca->depositar(500);
$poupanca->sacar(100);

var_dump($poupanca);
