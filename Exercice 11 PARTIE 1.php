<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        h1 {
            margin: 0 auto;
            text-align: center;
            height: 10vh;
            background-color: yellow;
        }

        table {
            margin: auto;
            width: 98%;
            color: brown;
            background-color: cadetblue;
        }
    </style>
</head>

<body>
    <?php
    echo "<h1> EXERCISE 11 PARTIE 1 </h1>";
    echo "Enoncé: Utilisez une boucle while pour lire le tableau de l'exercice 8. <br>";

    $person = [
        "Prenom" => ["Amadou", "Roxane", "Abou"],
        "Ville de residence" => ["Dakar", "Paris", "Thies"],
        "Age" => [21, 19, 47]
    ];

    $i = 0;

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Prenom</th>";
    echo "<th>Ville de residence</th>";
    echo "<th>Age</th>";
    echo "</tr>";

    while ($i < count($person["Prenom"])) {
        echo "<tr>";
        echo "<td>{$person["Prenom"][$i]}</td>";
        echo "<td>{$person["Ville de residence"][$i]}</td>";
        echo "<td>{$person["Age"][$i]}</td>";
        echo "</tr>";

        $i++;
    }

    echo "</table>";
    ?>
</body>

</html>
