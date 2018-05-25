<?php 
require_once 'header.php';

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = md5($_POST['password']);
        $confirma_senha = md5($_POST['remember_token']);
        $nascimento = $_POST['nascimento'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];
        $telefone_res = $_POST['telefone_res'];
        $telefone_cel = $_POST['telefone_cel'];

        $inserir = "INSERT INTO 'users' ";
        $inserir .= "('', 'nome', 'sobrenome', 'email', 'password', 'remember_token', 'nascimento', 'rg', 'cpf', 'endereco', 'bairro', 'numero', 'complemento', 'cidade', 'estado', 'cep', 'telefone_res', 'telefone_cel') ";
        $inserir .= 'VALUES  ';
        $inserir .= "('','$nome','$sobrenome','$email','$senha','$confirma_senha', $nascimento, $rg, $cpf, '$endereco', '$bairro', $numero, '$complemento','$cidade', '$estado', $telefone_res, $telefone_cel )";

        $operacao_inserir = mysqli_query($conecta, $inserir);
        print_r($operacao_inserir);
        if (!$operacao_inserir) {
            die('<h1>Error: Fail connect in DATABASE</h1>');
        }
    }

    require_once '../front-end/cadastro-view.phtml';
