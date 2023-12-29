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
echo"<h1> EXERCISE 7 </h1>"; 
echo"Enoncé: Ecrire un programme qui teste si un nombre saisi au clavier est parfait.
NB : Un nombre égal à la somme de ses diviseurs propres est parfait. <br>";

if (isset($_POST["number"])) {
    $nombre = (int)$_POST["number"];


    $estPremier = true;

    if ($nombre <= 1) {
        $estPremier = false;
    } else {
        for ($i = 2; $i <= sqrt($nombre); $i++) {
            if ($nombre % $i == 0) {
                $estPremier = false;
                break;
            }
        }
    }


    if ($estPremier) {
        echo "$nombre est un nombre premier.";
    } else {
        echo "$nombre n'est pas un nombre premier.";
    }
}
?>
<form method="POST">
        <label for="number">Veuillez entrer un nombre :</label>
        <input type="text" name="number" id="number" required>
        <button type="submit">Vérification si c'est un nombre premier</button>
    </form>
</body>
</html>