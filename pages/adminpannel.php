<?php
    session_start();
        if(!isset($_SESSION["name"])){
            header("Location: /auth/login.php");
        exit(); 
    }

?>
<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="icon" href="/img/gamelogo.ico">
    <title>Panneau d'administration</title>
<body>
    <h1><a href="/index.php">Pay Respect</a></h1>
    <h2>Bienvenue <?php echo $_SESSION['name']; ?> !</h2>
    <p>C'est votre interface d'administration.</p><br>
    <p>Vous pouvez <a href="/pages/games/addgame.php">ajouter un jeu</a>, <a href="/pages/games/editgame.php">modifier un jeu</a> ou <a href="/pages/games/deletegame.php">supprimer un jeu</a></p>
</body>
</html>
<?php
    require('header-footer/footer.php');
?>