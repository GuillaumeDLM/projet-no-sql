<?php
	include '../../Controllers/acces-bdd/elasticsearch/connexion-elasticsearch.php';
	include '../../Controllers/acces-bdd/elasticsearch/deconnexion-elasticsearch.php';

	try {
		$client = $connexionEs();

		$params = [
			'index' => 'projet-nosql',
			'type' => 'games',
			/*
			'body'  => [
				'query' => [
					'match_all' => new \stdClass()
				]
			]
			*/
		];

		$response = $client->search($params);


	$response = json_decode(json_encode($response),true);
    $hits = count($response['hits']['hits']);
    $result = null;
    $i = 0;
	
    while ($i < $hits) {
		$result[$i] = $response['hits']['hits'][$i]['_source'];
		$i++;
    }

    foreach ($result as $key => $value) {
		if(isset($value["name"])){
			echo "<b>- " . $value['name'] . "</b>". ": ";
			echo $value['description'] . "<br>";
		}
    }

	$client = $deconnexionEs();
	} catch (\Exception $e) {
		echo 'ERREUR : ', $e;
	}
?>