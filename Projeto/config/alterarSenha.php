<?php

require_once 'db.php';

if (isset($_POST['btnCadastrar'])){
    $senhaAtual = $_SESSION['senha'];
    $senha = $_POST['senha'];
    $novaSenha = $_POST['novaSenha'];
    $confirmaNovaSenha = $_POST['confirmaNovaSenha'];
    
    if($senha == $senhaAtual){

    if($novaSenha == $confirmaNovaSenha){


    $novaSenha = trim($senha);

    
    $novaSenha = password_hash( $novaSenha, PASSWORD_DEFAULT);

    $objStmt = $objBanco->prepare('	UPDATE usuario
                                    SET senha = $novaSenha
                                    WHERE $senhaAtual = $senha');

    $objStmt->bindParam(':senha', $senha);
    
    //Executo

        if ( $objStmt->execute() ) {
    
            print "<script language='javascript' type='text/javascript'>alert('Senha alterada com sucesso!');</script>";
            header('Location: ../home.php');
        
        } else {
        
            print "<script language='javascript' type='text/javascript'>alert('Erro. Tente novamente.');window.location.href='../index.php'</script>";
        }  
    }
    else{
        print "<script language='javascript' type='text/javascript'>alert('As senhas digitadas não coincidem.');window.location.href='../index.php'</script>";
    }
}
else{
    print "<script language='javascript' type='text/javascript'>alert('Senha Atual Incorreta');window.location.href='../meu_perfil.php'</script>";
}
}