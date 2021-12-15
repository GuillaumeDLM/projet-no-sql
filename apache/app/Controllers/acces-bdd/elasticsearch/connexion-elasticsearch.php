<?php
    include("../../conf/es-conf.php");
    require_once '../../vendor/autoload.php';
    use Elasticsearch\ClientBuilder;

    $connexionEs = function(){
        // Connection à MySQL
        global $DOCKER, $PORT;

        $hosts = [
            "$DOCKER:$PORT",
        ];

        $client = ClientBuilder::create()
                    ->setHosts($hosts)
                    ->build();
                    
        return $client;
    }

?>