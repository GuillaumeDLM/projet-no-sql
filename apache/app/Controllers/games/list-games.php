<?php
	include '../acces-bdd/elasticsearch/connexion-elasticsearch.php';
	include '../acces-bdd/elasticsearch/deconnexion-elasticsearch.php';

	try {
		// $bdd = $connexionMongoDB();

		$hosts = [
            "http://localhost:9200",
        ];
        
        $bdd = ClientBuilder::create()
                            ->setHosts($hosts)
                            ->build();

		print_r($bdd);

		/*
		$params = [
			'index' => 'games',
			'body'  => [
				'query' => [
					'match_all' => []
				]
			]
		];
		
		$response = $bdd->search($params);
		print_r($response);
		*/

		// $bdd = $deconnexionMongoDB();
	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>