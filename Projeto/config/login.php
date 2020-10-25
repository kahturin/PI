<?php
    require_once 'db.php';

    $email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$objStmt = $objBanco->prepare('	SELECT * FROM usuario WHERE email = (:email) AND senha (:senha)');

	$objStmt->bindParam(':email', $_POST['email']);	
	$objStmt->bindParam(':senha', $_POST['senha']);

	$result = $objStmt->execute();
	
	
	if($result->num_rows > 0)
	{
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;

		header('location: ../home.php');
		
	}else
	{
        print "<script language='javascript' type='text/javascript'>alert('Credenciais inválidas.');window.location.href='index.php'</script>";
                
		unset ($_SESSION['usuario']);
		unset ($_SESSION['usuario']);
		header('location: index.php');
	}