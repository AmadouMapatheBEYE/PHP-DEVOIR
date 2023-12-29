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
    echo "<h1> EXERCISE 10 PARTIE 1 </h1>";
    echo "Enoncé: Utilisez une boucle foreach pour lire le tableau de exercice 8 <br>";

    $person = [
        "Prenom" => ["Amadou", "Roxane", "Abou"],
        "Ville de residence" => ["Dakar", "Paris", "Thies"],
        "Age" => [21, 19, 47]
    ];
    ?>
    <table border="1">
        <tr>
            <th>Prenom</th>
            <th>Ville de residence</th>
            <th>Age</th>
        </tr>

        <?php
        foreach ($person["Prenom"] as $index => $prenom) {
            echo "<tr>";
            echo "<td>$prenom</td>"; // Utiliser $prenom au lieu de $Prenom
            echo "<td>{$person["Ville de residence"][$index]}</td>";
            echo "<td>{$person["Age"][$index]}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>