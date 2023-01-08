<?php

session_start();
if(ISSET($_SESSION['id']))
{
    session_unset ();
    session_destroy();
    header('location:index.php');
} else {

    echo 'Déconnexion effectué merci de vous identifier';
}
?>
<a href="index.php" class="btn btn-primary btn-md"> retour accueil</a>
