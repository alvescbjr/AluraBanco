<?php

require_once "autoload.php";

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Funcionario;

$funcionario = new Funcionario(
    'Francisco Alves',
    new CPF('789.456.123-55'),
    'Desenvolvedor',
    500.50
);

var_dump($funcionario);
