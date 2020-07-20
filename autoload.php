<?php

spl_autoload_register(function($nomeDaClasse){
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)) {
        require_once($caminhoArquivo);
    }
});