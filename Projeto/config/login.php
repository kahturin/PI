<?php
    require 'session.php';

    $email = $_POST['email'];
	$senha = md5($_POST['senha']);

    
    include("db.php");
        
       
	$query = "SELECT * FROM usuario WHERE email = '".$email."' AND senha = '".$senha."'";

	$result = $mysqli->query($query);
	
	
	if($result->num_rows > 0)
	{
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;	
		
	}else
	{
        print "<script language='javascript' type='text/javascript'>alert('Credenciais inválidas.');window.location.href='index.php'</script>";
                
		unset ($_SESSION['usuario']);
		unset ($_SESSION['usuario']);
		header('location: index.php');
	}