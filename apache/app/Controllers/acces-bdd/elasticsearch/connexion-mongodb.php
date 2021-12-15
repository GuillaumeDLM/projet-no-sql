<?php

    include("../../../conf/es-conf.php");

    $connexion = function(){
        // Connection à MySQL
        global $HOST, $PORT, $DTBS, $USER, $PASS;

        $hosts = [
            "http://$USER:$PASS@$HOST:$PORT",       // HTTP Basic Authentication
        ];
        
        $bdd = ClientBuilder::create()
                            ->setHosts($hosts)
                            ->build();
        return $bdd;
    }

?>