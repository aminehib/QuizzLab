<?php
include("connectionDB.php");

$idUser_p = $_POST['idUser_p'];
$objet = $_POST['objet'];
$message = $_POST['message'];
$date_p = date('Y-m-d');

$query = "INSERT INTO posts (idUser_p, objet, message, date_p) VALUES (:idUser_p, :objet, :message, :date_p)";
$stmt = $cnx->prepare($query);
$stmt->bindParam(':idUser_p', $idUser_p);
$stmt->bindParam(':objet', $objet);
stmt->bindParam(':message', $message);
$stmt->bindParam(':date_p', $date_p);

if ($stmt->execute()) {
    header("Location: forum.php");
} else {
    echo "Erreur : impossible d'ajouter le post.";
}
?>
