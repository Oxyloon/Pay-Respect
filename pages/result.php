<?php
    require('header-footer/header.php');
?>
    <title>Résultat de la recherche</title>
    <h1>Voici le résultat de ta recherche :</h1>
    
    <p>Le titre du jeux :
        <?php
            echo'$tittle'
        ?>
    </p>

    <p>Les genres :
        <?php
            echo'$gender'
        ?>
    </p>

    <p>Les plateformes :
        <?php
            echo'$plat'
        ?>
    </p>

    <p>La notes moyenne du jeu :
        <?php
            echo'$avis'
        ?>
    </p>

    <p>Les commentaires :
        <?php
            echo'$coms'
        ?>
    </p>

<?php
    require('header-footer/footer.php');
?>