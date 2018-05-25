<?php 
require_once 'conexao/conexao.php';
//Iniciar sessao
if(!isset($_SESSION)) 
    { 
        session_start(); 
 }

$frontEndUrl = '../front-end';
$backEndUrl  = '../back-end';
// essa variável mostra o camniho completo e só pode ser declarada após a variável ''echo __DIR__;''
require_once '../front-end/header-view.phtml';

