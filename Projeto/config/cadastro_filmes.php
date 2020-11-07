<?php

    require_once 'db.php';     

    $nome_arquivo = $_FILES['arquivo']['name'];

    $variacao = rand(0, 1000000);

    $extensao = pathinfo($nome_arquivo, PATHINFO_EXTENSION);

    $nome_file = pathinfo($nome_arquivo, PATHINFO_FILENAME);

    $destino = '../imagens_capas_filmes/' . $nome_file . $variacao . '.' . $extensao;
    
    $nomeFilme = $_POST['nomeFilme'];
    $duracaoFilme = $_POST['duracaoFilme'];
    $sinopseFilme = $_POST['sinopseFilme'];
    
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];

    move_uploaded_file( $arquivo_tmp, $destino);


    try{
    $stmt = $objBanco->prepare('INSERT INTO filmes ( nomeFilme, duracaoFilme, sinopseFilme, destino_foto) VALUES( :nomeFilme, :duracaoFilme, :sinopseFilme, :destino_foto)');
    $stmt->execute(array(
      ':nomeFilme' => $nomeFilme,
      ':duracaoFilme' => $duracaoFilme,
      ':sinopseFilme' => $sinopseFilme,
      ':destino_foto' => $destino,
    ));
    print "<script language='javascript' type='text/javascript'>alert('Filme cadastrado com sucesso!');window.location.href='../adicionar_filmes.php'</script>";
}catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

            
 
