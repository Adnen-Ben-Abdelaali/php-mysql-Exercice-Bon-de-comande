<?php

/*****************************************************
*	Création de la connexion
*****************************************************/

//Le serveur MySQL doit être en marche
$pdo = new PDO('mysql:host=127.0.0.1;dbname=classicmodels', 'root', '');

/*****************************************************
*	Exécution d'un requête: méthode prepare()
*****************************************************/

//Une requête préparée contient des paramètres
$query = $pdo->prepare('SELECT * FROM employees 
	WHERE jobTitle = :fonction');

//On exécute la requête en lui passant un tableau associatif représentant l'ensemble des paramètres 
$query->execute([
	'fonction' => 'Sales Rep'
]);

$employees = $query->fetchAll();

echo "<pre>";
var_dump($employees);
echo "</pre>";

//include 'pdo.phtml';