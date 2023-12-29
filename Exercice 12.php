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
    echo "<h1> EXERCISE 12 </h1>";
    echo "Enoncé: Créez un formulaire comprenant un groupe de champs ayant pour titre Adresse
    client. Le groupe doit permettre la saisie du nom, du prénom, de l’adresse, de la ville et du
    code postal. Les données sont ensuite traitées par un fichier PHP séparé récupérant les
    données et les affichant dans un tableau XHTML. <br>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h1>Données du Client</h1>";
        echo "<table border='1'>";
        echo "<tr><th>Nom</th><th>Prénom</th><th>Adresse</th><th>CodePostale</th><th>Ville</th></tr>";

        $nom = htmlspecialchars($_POST["Nom"]);
        $prenom = htmlspecialchars($_POST["Prenom"]);
        $adresse = htmlspecialchars($_POST["Adresse"]);
        $codePostale = htmlspecialchars($_POST["CodePostale"]);
        $ville = htmlspecialchars($_POST["Ville"]);

        // Affichage des données dans un tableau
        echo "<tr>";
        echo "<td>$nom</td>";
        echo "<td>$prenom</td>";
        echo "<td>$adresse</td>";
        echo "<td>$codePostale</td>";
        echo "<td>$ville</td>";
        echo "</tr>";

        echo "</table>";
    } else {
    ?>
        <h1>Formulaire Adresse Client</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset>
                <legend>Adresse Client</legend>
                <label for="Nom">Nom :</label>
                <input type="text" id="Nom" name="Nom" required><br>

                <label for="Prenom">Prénom :</label>
                <input type="text" id="Prenom" name="Prenom" required><br>

                <label for="Adresse">Adresse :</label>
                <input type="text" id="Adresse" name="Adresse" required><br>

                <label for="CodePostale">Code postale :</label>
                <input type="text" id="CodePostale" name="CodePostale" required><br>

                <label for="Ville">Ville :</label>
                <input type="text" id="Ville" name="Ville" required><br>
            </fieldset>

            <input type="submit" value="Enregistrer">
        </form>
    <?php
    }
    ?>
</body>

</html>
