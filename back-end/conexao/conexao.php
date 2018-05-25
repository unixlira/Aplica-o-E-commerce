<?php

//Passo 1
    $servidor = 'localhost'; //erro202-se não conseguir conectar
    $usuario = 'laravel'; //erro1045-se não conseguir conectar
    $senha = '1q2w3e'; //erro1045-se não conseguir conectar
    $banco = 'bd_upstyle'; //erro1049-se não conseguir conectar

    $conecta = mysqli_connect($servidor, $usuario, $senha, $banco);
//Passo 2 Testar conaxão
    if (mysqli_connect_errno()) {
        die('Conexão Falhou!'.mysqli_connect_errno());
    }
