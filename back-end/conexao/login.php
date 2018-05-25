<?php 
    $login = $_POST['nome'];
    $entrar = $_POST['entrar'];
    $senha = md5($_POST['senha']);
    $connect = mysql_connect('localhost','root','');
    $db = mysql_select_db('shop_upstyle');
      if (isset($entrar)) {
               
        $verifica = mysql_query("SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
          if (mysql_num_rows($verifica)<=0){
            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
            die();
          }else{
            setcookie("nome",$login);
            header("Location:header.php");
          }
      }
  ?>