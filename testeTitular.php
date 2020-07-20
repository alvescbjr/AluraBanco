<?php

require_once "autoload.php";

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\{CPF, Endereco};

$titular = new Titular(
    'Vinicius Dias',
    new CPF('123.456.789-90'),
    new Endereco(
        'São Paulo',
        'Lapa',
        'Rua talvez',
        '326 c/9'
    )
    );

var_dump($titular);
