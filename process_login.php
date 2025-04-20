<?php
session_start();
include("connectionDB.php");

$email_u = $_POST['email_u'];
$Password_u = $_POST['Password_u'];

$query = "SELECT * FROM user WHERE email_u = :email_u AND Password_u = :Password_u";
$stmt = $cnx->prepare($query);
$stmt->bindParam(':email_u', $email_u);
$stmt->bindParam(':Password_u', $Password_u);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $_SESSION['user_id'] = $user['id_u'];
    header("Location: home.php");
} else {
    header("Location: login.php?error=1");
}
?>
