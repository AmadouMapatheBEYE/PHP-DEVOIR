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
    echo "<h1> EXERCISE 10 PARTIE 2 </h1>";
    echo "Enoncé: Utilisez une boucle foreach pour lire le tableau de l'exercice 9 <br>";

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
    
        <?php
        foreach ($personne as $personneData) {
            echo "<tr>";
            echo "<td>{$personneData["prenom"]}</td>";
            echo "<td>{$personneData["ville"]}</td>";
            echo "<td>{$personneData["age"]}</td>";
            echo "</tr>";
        }
        ?>
    </table>
    </body>
    
    </html>