<?php
    session_start();

    require_once 'db.php';

	if(isset($_POST['btnEntrar']))
	{
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $objStmt = $objBanco->prepare('	SELECT * FROM usuario WHERE email = :email AND senha = :senha');
        
        $objStmt->bindParam(':email', $email);	
        $objStmt->bindParam(':senha', $senha);
        $objStmt->bindParam('', $nome_usuario);
       

        $objStmt->execute();

        if($objStmt->rowCount() == 1)
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome_usuario'] = $nome_usuario;

            header("location: ../home.php");
            die();
        }
        else
        {
            //Erro
            print "<script language='javascript' type='text/javascript'>alert('Credenciais inválidas');window.location.href='../index.php'</script>";
        }
	}