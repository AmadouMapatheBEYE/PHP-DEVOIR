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
    echo "<h1> EXERCISE 9 </h1>";
    echo "Enoncé: Écrivez un tableau multidimensionnel associatif dont les clés sont des noms de
    personne et les valeurs des tableaux associatifs dont les clés sont le prénom, la ville de
    résidence et l’âge de la personne avec une série de valeurs associées. <br>";

    $personne = [
        "Amadou" => [
            "prenom" => "Amadou",
            "ville" => "Dakar",
            "age" => 21
        ],
        "Roxane" => [
            "prenom" => "Roxane",
            "ville" => "Paris",
            "age" => 19
        ],
        "Abou" => [
            "prenom" => "Abou",
            "ville" => "Thies",
            "age" => 47
        ]
    ];
    ?>
    <table border="1">
        <tr>
            <th>Prenom</th>
            <th>Ville de residence</th>
            <th>Age</th>
        </tr>

        <tr>
            <td><?php echo $personne["Amadou"]["prenom"]; ?></td>
            <td><?php echo $personne["Amadou"]["ville"]; ?></td>
            <td><?php echo $personne["Amadou"]["age"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $personne["Roxane"]["prenom"]; ?></td>
            <td><?php echo $personne["Roxane"]["ville"]; ?></td>
            <td><?php echo $personne["Roxane"]["age"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $personne["Abou"]["prenom"]; ?></td>
            <td><?php echo $personne["Abou"]["ville"]; ?></td>
            <td><?php echo $personne["Abou"]["age"]; ?></td>
        </tr>
    </table>
</body>

</html>
