<?php
    require_once 'db.php';

	if(!isset($_POST['entrar']))
	{
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
		$sql = $pdo->prepare("SELECT * FROM usuario WHERE email = ?");
		$sql->execute([$email]);

		if($sql->rowCount() == 1){
            $info = $sql->fetch();
            if(password_verify($senha, $info['senha'])){
                $_SESSION['email'] = $info['email'];
                $_SESSION['senha'] = $info['senha'];
                header("Location: ../home.php");
                die();
            }else{
                //Erro
                echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário ou senha incorretos!</p></div>';
            }
        }else{
            //Erro
            echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário não encontrado.</p></div>';
        }
	}