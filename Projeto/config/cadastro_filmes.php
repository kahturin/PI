<?php

    require_once 'db.php';

    $caminho_foto =  $_FILES['arquivo']['name'];
        

    $nome_arquivo = $_FILES['arquivo']['name'];

            $destino = '../imagens_capas_filmes/' . $nome_arquivo;
            
            $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
 
            move_uploaded_file( $arquivo_tmp, $destino);

            $destino_foto = $destino;

    $objStmt = $objBanco->prepare('	INSERT INTO filmes 
        (capaFilme, nomeFilme, duracaoFilme, sinopseFilme, caminho_foto, destino_foto)
    VALUES 
        (:capaFilme, :nomeFilme, :duracaoFilme, :sinopseFilme, :destino_foto)');

    $objStmt->bindParam(':capaFilme', $_FILES['capaFilme']);
    $objStmt->bindParam(':nomeFilme', $_POST['nomeFilme']);
    $objStmt->bindParam(':duracaoFilme', $_POST['duracaoFilme']);	
    $objStmt->bindParam(':sinopseFilme', $_POST['sinopseFIlme']);	
    $objStmt->bindParam(':destino_foto', $_POST['destino_foto']);	

    if ( $objStmt->execute() ) {

        
        if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
            
            /*
            echo 'Você enviou o arquivo: <strong>' . $_FILES[ 'arquivo' ][ 'name' ] . '</strong><br />';
            echo 'Este arquivo é do tipo: <strong > ' . $_FILES[ 'arquivo' ][ 'type' ] . ' </strong ><br />';
            echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'arquivo' ][ 'tmp_name' ] . '</strong><br />';
            echo 'Seu tamanho é: <strong>' . $_FILES[ 'arquivo' ][ 'size' ] . '</strong> Bytes<br /><br />';
            */

            $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
            $nome = $_FILES[ 'arquivo' ][ 'name' ];
        
            // Pega a extensão
            $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
        
            // Converte a extensão para minúsculo
            $extensao = strtolower ( $extensao );
        
            // Somente imagens, .jpg;.jpeg;.gif;.png
            // Aqui eu enfileiro as extensões permitidas e separo por ';'
            // Isso serve apenas para eu poder pesquisar dentro desta String
            
            if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
                
                // Cria um nome único para esta imagem
                // Evita que duplique as imagens no servidor.
                // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        
                //novoNome que será enviado ao banco de dados é igual ao nome original da imagem
                $novoNome = $nome; 

                // Concatena a pasta com o nome
                $destino = '../imagens_capas_filmes/' . $novoNome;
        
                // tenta mover o arquivo para o destino
                if ( move_uploaded_file($arquivo_tmp, $destino ) ) {
                    
                    echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
                    echo ' < img src = "' . $destino . '" />';
                }
                else
                    echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
            }
            else
            print "<script language='javascript' type='text/javascript'>alert (Você poderá enviar apenas arquivos '*.jpg;*.jpeg;*.gif;*.png'!') ;window.location.href='../home.php'</script>";
        }
        else{
            print "<script language='javascript' type='text/javascript'>alert (Você não enviou nenhum arquivo.) ;window.location.href='../home.php'</script>";
        }


    print "<script language='javascript' type='text/javascript'>alert('Cadastrado com sucesso!');window.location.href='../home.php'</script>";

    } else {

    print "<script language='javascript' type='text/javascript'>alert('Erro. Tente novamente.');window.location.href='../adicionar_filmes.php'</script>";

    /* Informa o nível dos erros que serão exibidos */
    //error_reporting(E_ALL);
    
    /* Habilita a exibição de erros */
    //ini_set("display_errors", 1);

    }  

            
 
