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
            width: 98%;
            color: brown;
            background-color: cadetblue;
        }
    </style>
</head>

<body>

    <?php
    echo "<h1> EXERCICE 15 </h1>";
    echo "Écrivez une fonction dont le paramètre passé par référence est un tableau de chaînes de caractères et qui transforme chacun des éléments du tableau de manière que le premier caractère soit en majuscule et les autres en minuscules, quelle que soit la casse initiale des éléments, même si elle est mixte. <br>";
    function transformerTableau(&$tableau)
    {
        foreach ($tableau as &$element) {
            $element = ucfirst(strtolower($element));
        }
    }

    $donnees = ["nom", "Prénom", "AdrEsse", "cOdeP ostale", "ViLlE"];

    transformerTableau($donnees);
    ?>

    <h1>Résultat de la Transformation</h1>
    <table border='1'>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Code Postal</th>
            <th>Ville</th>
        </tr>
        <tr>
            <?php

            foreach ($donnees as $valeur) {
                echo "<td>$valeur</td>";
            }
            ?>
        </tr>
    </table>

</body>

</html>
