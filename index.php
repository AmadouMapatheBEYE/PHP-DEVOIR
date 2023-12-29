<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alwaysdata</title>
</head>
<style>
    body{
        background-image: url('R.jpeg');
    }
    #tete{
        margin: 0 auto;
        text-align: center;
        height: 10vh;
        background-color: blueviolet;
    }

    #contenu{
        margin:  auto;
        text-align: center;
        height: 20vh;
        width: 100%;
    }
    #cont1{
        background-color: green;
        color: black;
    }
    #cont2{
        background-color: yellow;
        color: black;
    }
    #cont3{
        background-color: red;
        color: black;
    }
    h3{
        background-color: beige;
    }
    img{
        width: 20%;
    }
    </style>
<body>
    <img src="OIP.jpeg" alt="Description of the image">

    <h1 id="tete">Exercices PHP</h1>
    <h3>Prénom: AMADOU MAPATHE</h3>
    <h3>Nom: BEYE</h3>
    <h3>CODE: 220241</h3>
    <table border="1" id="contenu">
        <tr>
            <td id="cont1">
                <label for="choixPage1">Compartiment 1 :</label>
                <select id="choixPage1" name="pages1" onchange="redirectToPage(this.value)">
                    <option value="">LISTE: </option>
                    <option value="Exercice 1.php">Exercice 1</option>
                    <option value="Exercice 2.php">Exercice 2</option>
                    <option value="Exercice 3.php">Exercice 3</option>
                    <option value="Exercice 4.php">Exercice 4</option>
                    <option value="Exercice 5.php">Exercice 5</option>
                    <option value="Exercice 6.php">Exercice 6</option>
                </select>
            </td>
            
            <td id="cont2">
                <label for="choixPage2">Compartiment 2 :</label>
                <select id="choixPage2" name="pages2" onchange="redirectToPage(this.value)">
                    <option value="">LISTE:</option>
                    <option value="Exercice 7.php">Exercice 7</option>
                    <option value="Exercice 8.php">Exercice 8</option>
                    <option value="Exercice 9.php">Exercice 9</option>
                    <option value="Exercice 10 PARTIE 1.php">Exercice 10 PARTIE 1</option>
                    <option value="Exercice 10 PARTIE 2.php">Exercice 10 PARTIE 2</option>
                </select>
            </td>
            
            <td id="cont3">
                <label for="choixPage3">Compartiment 3 :</label>
                <select id="choixPage3" name="pages3" onchange="redirectToPage(this.value)">
                    <option value="">LISTE:</option>
                    <option value="Exercice 11 PARTIE 1.php">Exercice 11 PARTIE 1</option>
                    <option value="Exercice 11 PARTIE 2.php">Exercice 11 PARTIE 2</option>
                    <option value="Exercice 12.php">Exercice 12</option>
                    <option value="Exercice 13.php">Exercice 13</option>
                    <option value="Exercice 14.php">Exercice 14</option>
                    <option value="Exercice 15.php">Exercice 15</option>
                    <option value="Exercice 16.php">Exercice 16</option>
                    <option value="Exercice 17.php">Exercice 17</option>
                    <option value="Exercice 18.php">Exercice 18</option>
                </select>
            </td>
        </tr>
    </table>

    <script>
        function redirectToPage(selectedValue) {
            window.location.href = selectedValue;
        }
    </script>
</body>
</html>