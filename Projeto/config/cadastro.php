    <?php

    require_once 'db.php';

    if (isset($_POST['btnCadastrar']))
    {    
        $confirmaSenha = md5($_POST['confirmaSenha']);
        $senha = md5($_POST['senha']);

        $objStmt = $objBanco->prepare('	INSERT INTO usuario 
                                            (nome, email, senha)
                                        VALUES 
                                            ( :nome, :email, :senha)');
        
        //Substitui :nm e :wzap pelo valor enviado pelo usuário
        
        $objStmt->bindParam(':nome', $_POST['nome']);					
        $objStmt->bindParam(':email', $_POST['email']);	
        $objStmt->bindParam(':senha', $_POST['senha']);
        
        //Executo
        if($senha == $confirmaSenha){
            if ( $objStmt->execute() ) {
        
                $msg = 'Contato gravado com sucesso!';
            
            } else {
            
                $msg = ' :-( deu erro, tente novamente! ';
            }  
        }
        else{
            print "<script language='javascript' type='text/javascript'>alert('As senhas digitadas não coincidem.');window.location.href='index.php'</script>";
        }
    }