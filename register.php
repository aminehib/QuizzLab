<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>QuizzLab - Inscription</title>
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
    <form METHOD="GET" ACTION="insert_u.php">
    <fieldset>
    <legend><h3> Remplir les champs suivants pour s'inscrire </h3></legend>
    <table>
        <tr>
            <td><b>Nom</b></td>
            <td><input type="text" name="nom" size="20" maxlength="30"></td>
        </tr>
        <tr>
            <td><b>Prénom</b></td>
            <td><input type="text" name="prenom" size="20" maxlength="40"></td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td><input type="text" name="email" size="20" maxlength="40"></td>
        </tr>
        <tr>
            <td><b>Mot de passe</b></td>
            <td><input type="password" name="mot_de_passe" size="20" maxlength="30"></td>
        </tr>
    </table>
    <input type="submit" value="S'inscrire">
    <input type="reset" value="Effacer">
    </form>
    </fieldset>
    </div> 
</body>
</html>
