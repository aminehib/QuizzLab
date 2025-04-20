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
        <form METHOD="POST" ACTION="send_reset_link.php">
            <label for="email_u">Email:</label>
            <input type="text" id="email_u" name="email_u" required>
            <input type="submit" value="Envoyer le lien de réinitialisation">
        </form>
    </div>
</body>
</html>
