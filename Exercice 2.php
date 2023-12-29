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
echo"<h1> EXERCISE 2 </h1>"; 
echo"Enoncé: Rédigez une expression conditionnelle pour tester si un nombre est à la fois un
multiplede 3 et de 5. <br>";
echo "RESOLUTION <br>";

if (isset($_POST["number"])) {
    $nombre = (int)$_POST["number"];


    if ($nombre % 3 == 0 && $nombre % 5 == 0) {
        echo "Le nombre que vous avez entré est un multiple de 3 et de 5.";
    } else {
        echo "Le nombre que vous avez entré n'est pas un multiple de 3 et de 5.";
    }
}
?>
<form method="POST">
        <label for="number">Entrer un nombre :</label>
        <input type="text" name="number" id="number">
        <button type="submit">Entrer</button>
    </form>
</body>
</html>