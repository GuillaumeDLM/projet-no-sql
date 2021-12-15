<?php
	// include '../acces-bdd/mongodb/connexion-mongodb.php';
	// include '../acces-bdd/mongodb/deconnexion-mongodb.php';

	try {
		// $bdd = $connexionMongoDB();

		$client = new MongoDB\Client("mongodb://localhost:27017");

		try{ 
			$dbs = $client->listDatabases(); 
			print_r($dbs);
		}
		catch(Exception $e){
			echo "Unable to connect to Database at the moment ! ";
			exit();
		}

		/*
		$collection = $bdd->games;

		$cursor = $collection->find(); // ->toArray()

		foreach ($cursor as $document) {
			echo '
				<tr>
					<th>' . $document['id'] . '</th>
					<td>' . $document['name'] . '</td>
					<td>' . $document['description'] . '</td>
				</tr>
				';
		}

		$bdd = $deconnexionMongoDB();
		*/
	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>