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
    echo "<h1> EXERCICE 14 </h1>";
    echo "Dans la perspective de création d’un site d’agence immobilière, créez un formulaire comprenant trois boutons Submit nommés Vendre, Acheter et Louer. En fonction du choix effectué par le visiteur, redirigez-le vers une page spécialisée dont le contenu répond au critère choisi en PHP. <br>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['vendre'])) {
            header("Location: page_vendre.php");
            exit();
        } elseif (isset($_POST['acheter'])) {
            header("Location: page_acheter.php");
            exit();
        } elseif (isset($_POST['louer'])) {
            header("Location: page_louer.php");
            exit();
        }
    } else {
    ?>
        <h1>Formulaire Choix d'Action</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="submit" name="vendre" value="Vendre">
            <input type="submit" name="acheter" value="Acheter">
            <input type="submit" name="louer" value="Louer">
        </form>
    <?php
    }
    ?>
</body>

</html>
