<?php

/*****************************************************
*	Création de la connexion
*****************************************************/

//Le serveur MySQL doit être en marche
$pdo = new PDO('mysql:host=127.0.0.1;dbname=classicmodels',
 'root', '');

/*****************************************************
*	Exécution d'un requête: méthode query()
*****************************************************/

$q = $pdo->query('SELECT lastName,firstName,jobTitle,city  FROM employees INNER JOIN offices ON employees.officeCode = offices.officeCode');

if ($q === false) {
	//Pour connaître l'erreur, on utilise la méthode errorInfo()
	var_dump($pdo->errorInfo());
	
	//Permet d'arrêter l'exécution en affichant un message
	//die('Erreur SQL');
}

//On peut placer placer plusieurs options à fetchAll: PDO::FETCH_ASSOC, PDO::FETCH_NUM, PDO::FETCH_BOTH (option par défaut), ...
$employees = $q->fetchAll(PDO::FETCH_ASSOC); 
 /*
echo '<pre>';
print_r($employees);
echo '</pre>';
*/
include 'pdo.phtml';