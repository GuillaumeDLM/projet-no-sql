<?php
    include("../../conf/mongodb-conf.php");
    require_once '../../vendor/autoload.php';
    use Elasticsearch\ClientBuilder;

    $connexionMongoDB = function(){
        // Connection à MySQL
        global $HOST, $DTBS, $USER, $PASS;
        
        $mongodb = new MongoDB\Client("mongodb://$HOST:$PORT");

        return $mongodb;
    }
?>