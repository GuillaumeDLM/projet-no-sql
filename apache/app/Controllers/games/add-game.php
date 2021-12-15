<?php
	include '../../Controllers/acces-bdd/elasticsearch/connexion-elasticsearch.php';
	include '../../Controllers/acces-bdd/elasticsearch/deconnexion-elasticsearch.php';

	$name = $_POST['name']; // POST method
	$description = $_POST['description']; // POST method

	try {
		$client = $connexionEs();

		$params = [
			'index' => 'projet-nosql',
			'type' => 'games',
			'body'  => [
				'query' => [
					'match' => [
						'name' => $name,
						'description' => $description,
					]
				]
			]
		];

		$indexed = $client->index($params);

		$client = $deconnexionEs();
		header('Location: ../../Views/Home/index.php');
	} catch (\Exception $e) {
		echo 'ERREUR : ', $e;
	}
?>