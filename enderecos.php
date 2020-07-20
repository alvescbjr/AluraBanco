<?php

require_once("autoload.php");

use Alura\Banco\Modelo\Endereco;
$umEndereco = new Endereco(
    'Petrópolis',
    'bairro qualquer',
    'Minha Rua',
    '71b'
);
$outroEndereco = new Endereco (
    'Rio', 
    'Centro', 
    'Uma rua aí', 
    '50'
);
echo $umEndereco->bairro . PHP_EOL;

echo $umEndereco->numero;