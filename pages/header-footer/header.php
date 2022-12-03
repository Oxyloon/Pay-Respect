<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="icon" href="/img/gamelogo.ico">
<body>
    <h1><a href="/index.php">Pay Respect</a></h1>
    <a href="/pages/adminpannel.php">espace administrateur</a>
    <p>Trouvez plein de jeux sur cet incroyable site qui n'est en fait qu'un prototype réalisé par les bg de BTS SNIR !</p>
        <div>
            <form action="/pages/result.php" method="get">
                <p>Rechercher parmis tous nos jeux : <input type="text" name="game" />
                <input type="submit" value="OK">
            </form>

            <form action="/pages/result.php" method="get">
                ou par genre :
                <select name="genre" id="genre-select">
                    <option value="">Choisir un genre</option>
                    <option value="fps">FPS</option>
                    <option value="horror">Horreur</option>
                    <option value="arcade">Arcade</option>
                    <option value="solo">Solo</option>
                    <option value="strat">Stratégie</option>
                    <option value="coop">Coop</option>
                </select>
                <input type="submit" value="OK">
            </form>
        </div>
        <a href="/pages/search.php">faire une recherche précise</a>
        <p>-------------------------------------------------------------------------------</p>        
</body>
</html>