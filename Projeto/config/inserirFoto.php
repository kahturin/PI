<?php
    require_once 'db.php';     

    require_once 'session.php';

    $nome_arquivo = $_FILES['arquivo']['name'];

    $variacao = rand(0, 1000000);

    $extensao = pathinfo($nome_arquivo, PATHINFO_EXTENSION);

    $nome_file = pathinfo($nome_arquivo, PATHINFO_FILENAME);

    $destino = 'fotoUsuario/' . $nome_file . $variacao . '.' . $extensao;

    $idUsuario = $_SESSION['id'];
    
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];

    move_uploaded_file( $arquivo_tmp, $destino);

    try{
    $stmt = $objBanco->prepare('INSERT INTO usuario (fotoUsuario) 
                                VALUES(:fotoUsuario)
                                WHERE userID = $idUsuario');
    $stmt->execute(array(
      ':fotoUsuario' => $destino,
    ));
    print "<script language='javascript' type='text/javascript'>alert('Filme cadastrado com sucesso!');window.location.href='../home.php'</script>";
}catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

            
 