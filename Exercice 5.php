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
echo"<h1> EXERCISE 5 </h1>"; 
echo"Enoncé: Ecrire un programme qui calcule le diamètre, le périmètre et la surface d’un
cercle dont le rayon est saisi au clavier. <br>";

$rayon = isset($_POST["number"]) ? (int)$_POST["number"] : null;

    if ($rayon !== null) {
        $diametre = $rayon * 2;
        $perimetre = 2 * 3.14 * $rayon;
        $surface = 3.14 * $rayon ** 2;
    }
?>
<form method="POST">
    <label for="">Entrer le rayon :</label>
    <input type="text" name="number">
    <button type="submit">Envoyer</button>
   </form>
   <?php
    
    if ($rayon !== null) {
    ?>
        <p>Le diamètre est : <?php echo $diametre ?></p>
        <p>Le périmètre est : <?php echo $perimetre ?></p>
        <p>La surface est : <?php echo $surface ?></p>
    <?php
    }
    ?>
</body>
</html>