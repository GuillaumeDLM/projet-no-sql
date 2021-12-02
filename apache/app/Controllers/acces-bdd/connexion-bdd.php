<?php

    include("../../conf/config.php");

    $connexion = function(){
        // Connection à MySQL
        global $HOST, $DTBS, $USER, $PASS;
        $bdd = new PDO("pgsql:host=$HOST;dbname=$DTBS", $USER, $PASS);
        return $bdd;
    }

?>