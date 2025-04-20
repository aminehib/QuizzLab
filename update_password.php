<?php
include("connectionDB.php");

$token = $_POST['token'];
$Password_u = $_POST['Password_u'];

$query = "SELECT * FROM user WHERE reset_token = :token";
$stmt = $cnx->prepare($query);
$stmt->bindParam(':token', $token);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $query = "UPDATE user SET Password_u = :Password_u, reset_token = NULL WHERE reset_token = :token";
    $stmt = $cnx->prepare($query);
    $stmt->bindParam(':Password_u', $Password_u);
    $stmt->bindParam(':token', $token);

    if ($stmt->execute()) {
        echo "Votre mot de passe a été réinitialisé avec succès.";
    } else {
        echo "Erreur : impossible de réinitialiser le mot de passe.";
    }
} else {
    echo "Lien de réinitialisation invalide.";
}
?>
