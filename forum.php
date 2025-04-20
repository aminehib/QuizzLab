<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>QuizzLab - Forum</title>
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
    margin-bottom: 0;
    margin-left: 25%;
    margin-right: 25%;
    margin-top: 5%;
}
table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    border: 1px solid #124167;
    padding: 10px;
    text-align: left;
}
th {
    background-color: #124167;
    color: white;
}
tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>
</head>
<body>
    <header><h1>QuizzLab - Forum</h1></header>
    <div>
        <h3>Bienvenue sur le forum</h3>
        <p><a href="create_post.php">Ajouter un nouveau post</a></p>
        <table>
            <tr>
                <th>Objet</th>
                <th>Auteur (ID utilisateur)</th>
                <th>Date</th>
            </tr>
            <?php
            include("connectionDB.php");
            $query = "SELECT * FROM posts ORDER BY date_p DESC";
            $stmt = $cnx->query($query);
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['objet']) . "</td>";
                echo "<td>" . htmlspecialchars($row['idUser_p']) . "</td>";
                echo "<td>" . htmlspecialchars($row['date_p']) . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div> 
</body>
</html>
