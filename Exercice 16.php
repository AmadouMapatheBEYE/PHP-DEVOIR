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
    echo "<h1> EXERCICE 16 </h1>";
    echo "À partir de la fonction sinus de PHP, écrivez une fonction qui donne le sinus d’un angle donné en radian, en degré ou en grade. Les paramètres sont la mesure de l’angle, et l’unité est symbolisée par une lettre. Le deuxième paramètre doit avoir une valeur par défaut correspondant aux radians en PHP. <br>";

    function calculerSinus($angle, $unite = 'radian')
    {
        switch ($unite) {
            case 'radian':
                return sin($angle);
            case 'degre':
                return sin(deg2rad($angle));
            case 'grade':
                return sin($angle * M_PI / 200);
            default:
                return "Unité non reconnue";
        }
    }

    $angleEnRadians = 1.047;

    $sinusEnRadians = calculerSinus($angleEnRadians);
    ?>

    <h1>Résultat du Calcul du Sinus</h1>
    <table border='1'>
        <tr>
            <th>Angle (radian)</th>
            <th>Sinus</th>
        </tr>
        <tr>
            <td><?php echo $angleEnRadians; ?></td>
            <td><?php echo $sinusEnRadians; ?></td>
        </tr>
    </table>

</body>

</html>
