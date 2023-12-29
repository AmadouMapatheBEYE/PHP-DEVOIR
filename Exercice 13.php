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
    echo "<h1> EXERCICE 13 </h1>";
    echo "Créez un formulaire demandant la saisie d’un prix HT et d’un taux de TVA. Le script affiche le montant de la TVA et le prix TTC dans deux zones de texte créées dynamiquement. Le formulaire maintient les données saisies. <br>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h1>Résultats du Calcul</h1>";
        echo "<table border='1'>";
        echo "<tr><th>Prix HT</th><th>Taux TVA</th><th>Montant TVA</th><th>Prix TTC</th></tr>";

        $prixHT = floatval(htmlspecialchars($_POST["prixHT"]));
        $tauxTVA = floatval(htmlspecialchars($_POST["tauxTVA"]));

        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;

        echo "<tr>";
        echo "<td>$prixHT francs</td>";
        echo "<td>$tauxTVA %</td>";
        echo "<td>" . number_format($montantTVA, 2) . " francs</td>";
        echo "<td>" . number_format($prixTTC, 2) . " francs</td>";
        echo "</tr>";

        echo "</table>";
    } else {
    ?>
        <h1>Calcul TVA et TTC</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="prixHT">Prix HT :</label>
            <input type="text" id="prixHT" name="prixHT" required><br>

            <label for="tauxTVA">Taux de TVA :</label>
            <input type="text" id="tauxTVA" name="tauxTVA" required><br>

            <input type="submit" value="Calculer">
        </form>
    <?php
    }
    ?>
</body>

</html>
