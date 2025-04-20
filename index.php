<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>QuizzLab - Page d'accueil</title>
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
    <header><h1><b>QuizzLab</b></h1></header>
    <div>
        <button onclick="location.href='login.php'">Se connecter</button>
        <button onclick="location.href='register.php'">S'inscrire</button>
    </div>
</body>
</html>
