<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>QuizzLab - Tableau de Bord</title>
<style>
html {
    font-family: serif;
}
h1 {
    font-family: Georgia;
    font-size: 30px;
    color: #124167;
}
body {
    margin: 5% 25%;
    text-align: center;
}
button {
    background-color: #124167;
    color: white;
    padding: 10px 20px;
    margin: 10px;
    border: none;
    cursor: pointer;
    font-size: 18px;
}
button:hover {
    background-color: #08305A;
}
</style>
</head>
<body>
    <header><h1>Bienvenue sur QuizzLab</h1></header>
    <div>
        <button onclick="location.href='forum.php'">Accéder au Forum</button>
        <button onclick="location.href='create_question.php'">Créer des Questions</button>
    </div>
</body>
</html>
