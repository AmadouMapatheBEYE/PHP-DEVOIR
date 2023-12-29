<!DOCTYPE html>
<html lang="fr">

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
            width: 80%;
            color: brown;
            background-color: cadetblue;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid brown;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>

    <?php
    echo "<h1> EXERCICE 17 </h1>";
    echo "Écrivez une fonction de lecture de tableaux multidimensionnels. L'affichage se fait sous forme de tableau XHTML dont les titres sont les clés des tableaux. <br>";

    function TableauMultidimensionnel($tableau)
    {
        echo "<table>";
        echo "<tr>";
        foreach (array_keys($tableau) as $titre) {
            echo "<th>$titre</th>";
        }
        echo "</tr>";

        $taille = count(current($tableau));
        for ($i = 0; $i < $taille; $i++) {
            echo "<tr>";
            foreach ($tableau as $cle => $valeurs) {
                echo "<td>" . $valeurs[$i] . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }

    $donnees = array(
        "Nom" => array("Amadou", "Balla", "Abou"),
        "Age" => array(21, 20, 35),
        "Ville" => array("Dakar", "Thies", "Touba")
    );

        TableauMultidimensionnel($donnees);
    ?>

</body>

</html>
