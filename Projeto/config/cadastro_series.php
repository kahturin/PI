<?php

    require_once 'db.php';     

    $nome_arquivo = $_FILES['arquivo']['name'];

    $destino = '../imagens_capas_series/' . $nome_arquivo;

    $nomeSerie = $_POST['nomeSerie'];
    $temporada = $_POST['temporada'];
    $duracaoEP = $_POST['duracaoEP'];
    $numEPS = $_POST['numEPS'];
    $sinopseSerie = $_POST['sinopseSerie'];
    $destinoFoto = $destino;
    
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];

    move_uploaded_file( $arquivo_tmp, $destino);


    try{
    $stmt = $objBanco->prepare('INSERT INTO series ( nomeSerie, temporada, duracaoEP, numEPS, sinopseSerie, destinoFoto) VALUES ( :nomeSerie, :temporada, :duracaoEP, :numEPS, :sinopseSerie, :destinoFoto)');
    $stmt->execute(array(
      ':nomeSilme' => $nomeSerie,
      ':temporada' => $temporada,
      ':duracaoEP' => $duracaoEP,
      ':numEPS' => $numEPS,
      ':sinopseSerie' => $sinopseSerie,
      ':destinoFoto' => $destinoFoto
    ));
    
    print "<script language='javascript' type='text/javascript'>alert('Série cadastrada com sucesso!');window.location.href='../adicionar_series.php'</script>";
}catch(PDOException $e) {
    
/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);
}

            
 
