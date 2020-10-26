<?php
    require_once 'db.php';

	if(isset($_POST['btnEntrar']))
	{
        $objStmt = $objBanco->prepare('	SELECT * FROM usuario WHERE email = (:email) AND senha = (:senha)');
        
        $objStmt->bindParam(':email', $_POST['email']);	
        $objStmt->bindParam(':senha', $_POST['senha']);

		$objStmt->execute();

		if($objStmt->rowCount() == 1){
            $info = $objStmt->fetch();
            $_SESSION['email'] = $info['email'];
            $_SESSION['senha'] = $info['senha'];
            print "<script language='javascript' type='text/javascript'>alert('Bem-vindo '".$info['email']."'!');window.location.href='../home.php'</script>";
            die();
        }else{
            //Erro
            print '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Credenciais inválidas.</p></div>';
        }
	}