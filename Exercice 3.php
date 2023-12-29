<!DOCTYPE html>
<html lang="en">
<head>

</head>
<style>
    h1{
        margin: 0 auto;
        text-align: center;
        height: 10vh;
        background-color: yellow;
    }
   
    </style>
<body>
<?php
echo"<h1> EXERCISE 3 </h1>"; 
echo"Enoncé: Choisissez un nombre de trois chiffres. Effectuez ensuite des tirages aléatoires, et
comptez le nombre de tirages nécessaire pour obtenir le nombre initial. Arrêtez les tirages, et
affichez le nombre de coups réalisés. Réalisez ce script d’abord avec l’instruction while puis
avec l’instruction for. <br>";
echo "RESOLUTION <br>";

if (isset($_POST["number"])) {
    $nombre = (int)$_POST["number"];

    $nbrDeCoups = 0;

    $essai = 0;
    while ($essai !== $nombre) {
        $essai = rand(100, 999);
        $nbrDeCoups++;
    }

    echo "Le nombre initial est $nombre, et il a été trouvé en $nbrDeCoups coups.<br>";

    $nbrDeCoups = 0;

    for ($essai = 0; $essai !== $nombre; $essai = rand(100, 999)) {
        $nbrDeCoups++;
    }

    echo "Le nombre initial est $nombre, et il a été trouvé en $nbrDeCoups coups.<br>";
}
?>
<form method="POST">
        <label for="number">Entrer un nombre :</label>
        <input type="text" name="number" id="number">
        <button type="submit">Entrer</button>
    </form>
</body>
</html>