<?php

require_once("autoload.php");

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular, SaldoInsuficienteException};
use Alura\Banco\Modelo\{CPF, Endereco};

$conta = new ContaPoupanca(
    new Titular(
        'Vinicius Dias',
        new CPF('123.456.789-10'),
        new Endereco('Petrópolis', 'Bairro teste', 'Rua Aí', '37')
    )
);

$conta->depositar(500);

try {
    echo $conta->getSaldo() . PHP_EOL;

    $conta->sacar(600);
    echo $conta->getSaldo();

} catch(SaldoInsuficienteException $e) {
    echo $e->getMessage();
}