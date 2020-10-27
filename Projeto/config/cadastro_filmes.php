<?php

    require_once 'db.php';

    if (isset($_POST['btnCadastrar']))
    {
        if($imagem != NULL) {

            $nomeFinal = time().'.jpg';
            
            if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
                $tamanhoImg = filesize($nomeFinal);
        
                $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
        
                unlink($nomeFinal);
        
                header("location:exibir.php");
            }
        }

        $objStmt = $objBanco->prepare('	INSERT INTO filmes 
                                            (capaFilme, nomeFilme, duracaoFilme, sinopseFilme)
                                        VALUES 
                                            (:capaFilme, :nomeFilme, :duracaoFilme, :sinopseFilme)');
        
        $objStmt->bindParam(':capaFilme', $_FILES['capaFilme']);
        $objStmt->bindParam(':nomeFilme', $_POST['nomeFilme']);
        $objStmt->bindParam(':duracaoFilme', $_POST['duracaoFilme']);	
        $objStmt->bindParam(':sinopseFilme', $_POST['sinopseFIlme']);	

        //Executo
        if($senha == $confirmaSenha){
            if ( $objStmt->execute() ) {
        
                print "<script language='javascript' type='text/javascript'>alert('Cadastrado com sucesso!');window.location.href='../home.php'</script>";
            
            } else {
            
                print "<script language='javascript' type='text/javascript'>alert('Erro. Tente novamente.');window.location.href='../index.php'</script>";
            }  
        }
        else{
            print "<script language='javascript' type='text/javascript'>alert('As senhas digitadas não coincidem.');window.location.href='../index.php'</script>";
        }
    }

    if($imagem != NULL) {
        $nomeFinal = time().'.jpg';
        if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
            $tamanhoImg = filesize($nomeFinal);
    
            $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
    
            mysql_connect($host,$username,$password) or die("Impossível Conectar");
    
            @mysql_select_db($db) or die("Impossível Conectar");
    
            mysql_query("INSERT INTO PESSOA (PES_IMG) VALUES ('$mysqlImg')") or
            die("O sistema não foi capaz de executar a query");
    
            unlink($nomeFinal);
    
            header("location:exibir.php");
        }
    }
    else {
        echo"Você não realizou o upload de forma satisfatória.";
    }