<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>QuizzLab - Connexion</title>
<style>
html {
    font-family: serif;
}
h1 {
    font-family: Georgia;
    font-size: 30px;
    color: #124167;
}
h3, h4, td {
    font-family: Georgia;
    color: #124167;
}
body {
    margin-bottom: 0;
    margin-left: 25%;
    margin-right: 25%;
    margin-top: 5%;
}
</style>
</head>
<body>
    <header><h1>QuizzLab</h1></header>
    <div>
    <form METHOD="POST" ACTION="process_login.php">
    <fieldset>
    <legend><h3>Veuillez vous connecter</h3></legend>
    <table>
        <tr>
            <td><b>Email</b></td>
            <td><input type="text" name="email_u" size="20" maxlength="40"></td>
        </tr>
        <tr>
            <td><b>Mot de passe</b></td>
            <td><input type="password" name="Password_u" size="20" maxlength="30"></td>
        </tr>
    </table>
    <input type="submit" value="Se connecter">
    <input type="reset" value="Effacer">
    </form>
    <p><a href="reset_password.php">Mot de passe oublié ?</a></p>
    </fieldset>
    </div> 
</body>
</html>
