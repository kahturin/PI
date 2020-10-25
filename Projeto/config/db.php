<?php

require_once 'config.php';

//Exemplo de try e catch

try {

	$objBanco = new PDO( DSN, DB_USER, DB_PASS);

} catch ( PDOException $objErro ) {

	echo 'SGBD Indisponível: ' . $objErro->getMessage();

	exit();
}