<?php
include("connectionDB.php");

$email_u = $_POST['email_u'];

// Générer un token de réinitialisation unique
$token = bin2hex(random_bytes(50));
$query = "UPDATE user SET reset_token = :token WHERE email_u = :email_u";
$stmt = $cnx->prepare($query);
$stmt->bindParam(':token', $token);
$stmt->bindParam(':email_u', $email_u);

if ($stmt->execute()) {
    $resetLink = "http://localhost/server/reset_password_form.php?token=$token";
    $subject = "Réinitialisation de votre mot de passe";
    $message = "Cliquez sur ce lien pour réinitialiser votre mot de passe: $resetLink";
    $headers = "From: noreply@quizzlab.com";

    if (mail($email_u, $subject, $message, $headers)) {
        echo "Un lien de réinitialisation a été envoyé à votre adresse email.";
    } else {
        echo "Échec de l'envoi de l'email.";
    }
} else {
    echo "Erreur : cet email n'est pas enregistré.";
}
?>
