<?php

$nome = $_POST['nome']; 

$login = $_POST['login'];

$senha = $_POST['senha'];

$data_nascimento = $_POST['data'];

$connect = mysqli_connect("127.0.0.1", "root", "", "db_salao");

$query_select = "SELECT usuario FROM tb_usuarios WHERE usuario = '$login' ";

$select = mysqli_query($connect, $query_select);

$array = mysqli_fetch_array($select);

$logarray = $array['usuario'];

  if($login == "" || $login == null || $senha == "" || $senha == null || $data_nascimento == null ){

    echo "<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchidos');window.location.href='cadastro.html';</script>";

    }else{

      if($logarray == $login){

       echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";

        die();

 

      }else{

        $query = "INSERT INTO tb_usuarios (nome,usuario,senha,data_nascimento) VALUES ('$nome','$login','$senha','$data_nascimento')";

        $insert = mysqli_query($connect, $query);

        if($insert){

          echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";

        }else{

          echo "<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";

        }

      }

    }

?>