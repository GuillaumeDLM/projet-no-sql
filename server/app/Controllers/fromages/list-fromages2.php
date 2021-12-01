<?php
	include '../acces-bdd/connexion-bdd.php';
	include '../acces-bdd/deconnexion-bdd.php';

	try
	{
		$bdd = $connexion();

		$sql = "SELECT NomFrom, TypeLait, TypePate FROM FROMAGE";
		$result = $bdd->query($sql);

		while($row = $result->fetch())
		{
			echo '<tr>
                <th>' . $row['NomFrom'] . '</th>
                <td>' . $row['TypeLait'] . '</td>
                <td>' . $row['TypePate'] . '</td>
            </tr>';
		}

		$bdd = $deconnexion();
	}

	catch (Exception $e)
	{
		echo $e->getMessage();
	}
?>