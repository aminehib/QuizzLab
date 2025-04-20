<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>QuizzLab - Ajouter un Post</title>
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
    <header><h1>QuizzLab - Ajouter un Post</h1></header>
    <div>
    <form METHOD="POST" ACTION="insert_post.php">
    <fieldset>
    <legend><h3>Créer un nouveau post</h3></legend>
    <table>
        <tr>
            <td><b>Objet</b></td>
            <td><input type="text" name="objet" size="40" maxlength="255"></td>
        </tr>
        <tr>
            <td><b>Auteur (ID utilisateur)</b></td>
            <td><input type="text" name="idUser_p" size="40" maxlength="11"></td>
        </tr>
        <tr>
            <td><b>Message</b></td>
            <td><textarea name="message" rows="10" cols="40"></textarea></td>
        </tr>
    </table>
    <input type="submit" value="Ajouter">
    <input type="reset" value="Effacer">
    </form>
    </fieldset>
    </div> 
</body>
</html>
