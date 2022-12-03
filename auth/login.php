<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=payrespect;charset=utf8;', 'root', '');
    if(isset($_POST['envoi'])){
        if(!empty($_POST['name']) AND !empty($_POST['password'])){
            $name = htmlspecialchars($_POST['name']);
            $password = sha1($_POST['password']);

            $recupUser = $bdd->prepare('SELECT * FROM auth WHERE name = ? AND password = ?');
            $recupUser->execute(array($name, $password));

            if($recupUser->rowCount() > 0){
                $_SESSION['name'] = $name;
                $_SESSION['password'] = $password;
                $_SESSION['id'] = $recupUser->fetch()['id'];
                header('Location: /pages/adminpannel.php');

            }else{
                echo "Votre mot de passe ou pseudo est incorrect";
            }

        }else{
            echo "Veuillez compléter tous les champs";
        }
    }
?>

<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/gamelogo.ico">
    <link rel="stylesheet" href="/styles/style.css">
    <title>Connexion</title>
</head>
<body>
    <form method="POST" action="" align="center">
        <h1>L'espace de connexion :</h1>
        <br/>
        <p>Le pseudo :</p>
        <input type="text" name="name" autocomplete="off">
        <br/>
        <p>Le mot de passe :</p>
        <input type="password" name="password" autocomplete="off">
        <br/><br/>
        <input type="submit" name="envoi">
    </form>
</body>
</html>