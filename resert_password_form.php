<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>QuizzLab - Réinitialisation du Mot de Passe</title>
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
</style>
</head>
<body>
    <header><h1>Réinitialisation du Mot de Passe</h1></header>
    <div>
        <form METHOD="POST" ACTION="update_password.php">
            <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
            <label for="Password_u">Nouveau Mot de Passe:</label>
            <input type="password" id="Password_u" name="Password_u" required>
            <input type="submit" value="Réinitialiser le Mot de Passe">
        </form>
    </div>
</body>
</html>
