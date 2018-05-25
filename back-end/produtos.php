<?php 
require_once 'conexao/conexao.php';
//Iniciar sessao
session_start();

if (!isset($_SESSION['user_portal'])) {
    header('location:account.php');
}
?>