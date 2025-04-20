<?php
include("connectionDB.php");

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$email = $_GET['email'];
$mot_de_passe = $_GET['mot_de_passe'];

$query = "INSERT INTO user (Name_u, Prenom_u, email_u, Password_u) VALUES (:nom, :prenom, :email, :mot_de_passe)";
$stmt = $cnx->prepare($query);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':mot_de_passe', $mot_de_passe);

if ($stmt->execute()) {
    header("Location: success.html");
} else {
    echo "Erreur : impossible de s'inscrire.";
}
?>
