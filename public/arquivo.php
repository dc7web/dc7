<?php

// CHAMAR ARQUIVO PHP DENTRO DE OUTRO ARQUIVO PHP

// ABAIXO ALGUNS EXEMPLO    
include './teste.php';
require './teste.php';

/**
 * Qual a diferença do include e require
 * - O include caso coloque um caminho que não existe, ele exibe uma mensagem de erro
 * mais continua execuantando o código.
 * 
 * - Já o require caso coloque um caminho que não existe, ele para de funcionar por completo.
 */


// Vai ter a certeza que vai ser incluso 1 vez só 
include_once './teste.php';
require_once './teste.php';
