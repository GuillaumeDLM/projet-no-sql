<?php

    include("../../../conf/mongodb-conf.php");

    $connexionMongoDB = function(){
        // Connection à MySQL
        global $HOST, $DTBS, $USER, $PASS;
        
        $client = new MongoDB\Client("mongodb://$HOST:$PORT");

        $bdd = $client;
        return $bdd;
    }
?>