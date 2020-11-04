<?php

    require_once 'db.php';     

    $nome_arquivo = $_FILES['arquivo']['name'];

    $destino = '../imagens_capas_filmes/' . $nome_arquivo;
    $nomeFilme = $_POST['nomeFilme'];
    $duracaoFilme = $_POST['duracaoFilme'];
    $sinopseFilme = $_POST['sinopseFilme'];
    
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];

    move_uploaded_file( $arquivo_tmp, $destino);

    $objStmt = $objBanco->prepare('	INSERT INTO filmes 
        (nomeFilme, duracaoFilme, sinopseFilme, destinoFoto)
    VALUES 
        (:mNomeFilme, :mDuracaoFilme, :mSinopseFilme, :mDestinoFoto)');

    $objStmt->bindParam(':mNomeFilme', $nomeFilme);
    $objStmt->bindParam(':mDuracaoFilme', $duracaoFilme);	
    $objStmt->bindParam(':mSinopseFilme', $sinopseFilme);	
    $objStmt->bindParam(':mDestinoFoto', $destino);	

    if ( $objStmt->execute() ) 
    {
        print "<script language='javascript' type='text/javascript'>alert('Cadastrado com sucesso!');window.location.href='../home.php'</script>";
    } 
    else 
    {
        print "<script language='javascript' type='text/javascript'>alert('Erro. Tente novamente.');window.location.href='../adicionar_filmes.php'</script>";

        /* Informa o nível dos erros que serão exibidos */
        //error_reporting(E_ALL);
        
        /* Habilita a exibição de erros */
        //ini_set("display_errors", 1);
    }  

            
 
