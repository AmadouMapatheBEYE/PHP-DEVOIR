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
            color: brown;
            background-color: cadetblue;
            padding: 10px;
            font-size: 18px;
        }
    </style>
</head>

<body>

    <?php
    echo "<h1> EXERCICE 18 </h1>";
    

    for ($i = 1; $i <= 10; $i++) {
        echo str_repeat($i, $i) . "<br>";
    }


    ?>

</body>

</html>
