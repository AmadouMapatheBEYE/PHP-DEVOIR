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
    echo "<h1> EXERCISE 4 </h1>";
    echo "Enoncé: Ecrire un programme qui permet de calculer le PPCM de deux entiers saisis au
    clavier. <br>";

    if (isset($_POST["nombre1"]) && isset($_POST["nombre2"])) {
        $nombre1 = (int)$_POST["nombre1"];
        $nombre2 = (int)$_POST["nombre2"];

        function calculerPGCD($a, $b) {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }

        function calculerPPCM($a, $b) {
            if ($a == 0 || $b == 0) {
                return 0;
            }
            return abs($a * $b) / calculerPGCD($a, $b);
        }

        $ppcm = calculerPPCM($nombre1, $nombre2);

        echo "<br>Le PPCM de $nombre1 et $nombre2 est : $ppcm";
    }
    ?>


    <form method="POST">
        <label for="nombre1">Entrez le premier nombre :</label>
        <input type="text" name="nombre1" id="nombre1" required>
        <br>
        <label for="nombre2">Entrez le deuxième :</label>
        <input type="text" name="nombre2" id="nombre2" required>
        <br>
        <button type="submit">Calculer le PPCM</button>
    </form>
</body>
</html>
