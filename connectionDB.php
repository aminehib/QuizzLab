<?php

$user = 'root';
$passwd = '';
$db = 'mysql:host=localhost;dbname=server';
try {
    $cnx = new PDO($db, $user, $passwd);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>


