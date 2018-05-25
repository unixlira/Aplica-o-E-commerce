<?php
require_once 'header.php';

if (isset($_GET['codigo'])) {
    $produto_id = $_GET['codigo'];
} else {
    header('Location:index.php');
}

//consultar a tabela
$consulta = 'SELECT id, nome, pagina, preco , detalhe  ';
$consulta .= 'FROM produto ';
$consulta .= "WHERE id = {$produto_id} ";
$detalhe = mysqli_query($conecta, $consulta);

//testar erro
if (!$detalhe) {
    die('<h1>Error: Fail connect in DATABASE</h1>');
} else {
    $dados_detalhe = mysqli_fetch_assoc($detalhe);
    $nome = $dados_detalhe['nome'];
    $preco = $dados_detalhe['preco'];
    $pagina = $dados_detalhe['pagina'];
}

require_once '../front-end/detalhe-view.phtml';