<?php

function getbdd(string $db)
{
    $host = "localhost";
	$port = 3306; 
	$charset = "utf8_bin";
	$user = "root"; // user id
	$pass = "root"; // password
	$dns='mysql:host='.$host.';dbname='.$db.';port='.$port.'charset='.$charset;
    try {
        $pdo =new PDO($dns,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        displayException($e);
        exit;
    }
}

?> 
