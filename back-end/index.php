<?php
require_once 'header.php';
//Abrir consulta ao banco de dados na tabela produtos
    setlocale(LC_ALL, 'pt_BR');
    $consulta_produtos = 'SELECT id, nome, pagina, preco ';
    $consulta_produtos .= 'FROM produto';
    if (isset($_GET['produto'])) {
        $nome_produto = $_GET['produto'];
        $consulta_produtos .= " WHERE nome LIKE '%{$nome_produto}%' ";
    }
    $produtos = mysqli_query($conecta, $consulta_produtos);
    if (!$produtos) {
    die('<h1>Error: Fail connect in DATABASE</h1>');
    }

    //Iniciar sessao
    
    //criar variável de sessao
    if (isset($_SESSION['user_portal'])) {
    	session_start();
    }

require_once '../front-end/index-view.phtml';
require_once '../front-end/footer-view.phtml';