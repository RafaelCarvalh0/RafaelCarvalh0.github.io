<?php

  $login = $_POST['login'];
  print $login;

  $entrar = $_POST['entrar'];

  $senha = $_POST['senha'];
  print $senha;
  
  $connect = mysqli_connect("127.0.0.1", "root", "", "db_salao");

  //echo '<pre>';
  //print_r ($connect);
  //echo '</pre>';

    if (isset($entrar)) {
        
        $query = "SELECT * FROM tb_usuarios WHERE usuario = '$login' AND senha = '$senha'";

        //echo '<br>';
        //print_r($query);

        $result = mysqli_query($connect, $query);

        $row = mysqli_num_rows($result);
        //echo '<br>';
        //print_r ($row);

        if ($row <= 0){

          echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";

          die();

        }else{

          setcookie("login",$login);

          header("Location:\agendamento\index.php");

        }

    }

?>