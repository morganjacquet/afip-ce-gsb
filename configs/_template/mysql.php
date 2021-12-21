<?php
    $user = '';
    $pass = '';
    $host = '127.0.0.1';
    $bdd = 'gestion_eleves';

    $bdd_connexion = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $pass);
?>