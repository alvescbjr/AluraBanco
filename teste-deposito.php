<?php

require_once("autoload.php");

use Alura\Banco\Modelo\Conta\{ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

try {

    $contaCorrente = new ContaCorrente(
        new Titular(
            'Dias',
            new CPF('123.456.789-10'),
            new Endereco('Petrópolis', 'Bairro teste', 'Rua Aí', '37')
        )
    );


    $contaCorrente->depositar(-10000);

} catch(InvalidArgumentException $e) {
    echo $e->getMessage();
}