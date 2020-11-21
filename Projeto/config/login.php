<?php
    session_start();

    require_once 'db.php';

	if(isset($_POST['btnEntrar']))
	{
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $senha = $_POST['senha'];

        $objStmt = $objBanco->prepare('	SELECT * FROM usuario WHERE email = :email AND senha = :senha');
        
        $objStmt->bindParam(':email', $email);	
        $objStmt->bindParam(':senha', $senha);
       

        $objStmt->execute();

        if($objStmt->rowCount() == 1)
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            header("location: ../home.php");
            die();
        }
        else
        {
            //Erro
            print "<script language='javascript' type='text/javascript'>alert('Credenciais inválidas');window.location.href='../index.php'</script>";
        }
	}