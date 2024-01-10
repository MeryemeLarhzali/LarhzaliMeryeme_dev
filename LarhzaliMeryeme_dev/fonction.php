<?php
//fonction pour la connexion au serveur et la base
function connexions(){
	try
	{
		global $bdd;
		$bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8', 'root', '');

	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	
}
?>