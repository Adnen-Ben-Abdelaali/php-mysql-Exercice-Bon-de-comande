<?php

/*****************************************************
*	Création de la connexion
*****************************************************/

//Le serveur MySQL doit être en marche
$pdo = new PDO('mysql:host=127.0.0.1;dbname=classicmodels', 'root', '');

/*****************************************************
*	Exécution d'un requête: méthode exec()
*****************************************************/

// La méthode exec retourne seulement le nombre de lignes affectés!!!
$result = $pdo->exec('SELECT * FROM employees');
var_dump($result);

// On n'utilise pas exec pour les requêtes SELECT
//$result = $pdo->exec("INSERT INTO employees (lastName, firstName, officeCode) VALUES ('Doe', 'John', 3)");
//var_dump($result);

//$result = $pdo->exec("DELETE FROM employees WHERE lastName='Doe'");
//var_dump($result);