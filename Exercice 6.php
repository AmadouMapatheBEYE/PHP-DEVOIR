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
    </style>
</head>

<body>
    <?php
    echo "<h1> EXERCISE 6 </h1>";
    echo "Enoncé: Ecrire un programme qui affiche l’ensemble des diviseurs d’un nombre saisi au
    clavier. <br>";

    // Vérifier si les valeurs sont présentes dans $_POST avant de les utiliser
    $nombre = isset($_POST["nombre"]) ? (int)$_POST["nombre"] : 0;

    if ($nombre > 0) {
        echo "Les diviseurs de $nombre sont : ";

        for ($i = 1; $i <= $nombre; $i++) {
            if ($nombre % $i == 0) {
                echo "$i ";
            }
        }
    } else {
        echo "Veuillez entrer un nombre positif.";
    }
    ?>
    <form method="POST">
        <label for="nombre">Entrez le nombre :</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <button type="submit">Calculer</button>
    </form>
</body>

</html>
