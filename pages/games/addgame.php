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
    <title>Ajouter un jeu</title>
<body>
    <h1><a href="/index.php">Pay Respect</a></h1>
    <h2>Bienvenue <?php echo $_SESSION['name']; ?> !</h2>
    <a href="/pages/adminpannel.php">Retourner à l'interface d'administration.</a>
    <form action="" method="POST" align="center">
        <br><p>Le titre du jeu : <input type="text" name="title"/>
        <p>Le ou les genres du jeu : <input type="text" name="gender"/>
        <p>La ou les plateformes du jeu : <input type="text" name="plateform"/>
        <br><input type="submit" value="Ajouter le jeu">
    </form>
</body>
</html>
<?php
    require('../header-footer/footer.php');
?>