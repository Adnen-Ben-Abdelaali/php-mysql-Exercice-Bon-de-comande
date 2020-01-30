<?php

/*****************************************************
*	Création de la connexion
*****************************************************/

//Le serveur MySQL doit être en marche
$pdo = new PDO('mysql:host=127.0.0.1;dbname=classicmodels', 'root', '');

/*****************************************************
*	Exécution d'un requête: méthode prepare()
**********************************-*******************/

//Une requête préparée contient des paramètres
$queryOrderInforamtion = $pdo->prepare('SELECT orderdetails.quantityOrdered, orderdetails.priceEach, (orderdetails.quantityOrdered * orderdetails.priceEach) as totalPrice,
 products.productName  FROM orderdetails INNER JOIN products ON orderdetails.productCode = products.productCode
	WHERE orderNumber = :fonction');

//On exécute la requête en lui passant un tableau associatif représentant l'ensemble des paramètres 
$queryOrderInforamtion->execute([
	'fonction' => $_GET["orderNumber"]
]);

$orderDet = $queryOrderInforamtion->fetchAll();


echo '<pre>';
/*print_r($nouveauTab); */
print_r($orderDet);
echo '</pre>';

$queryClientInformation = $pdo->prepare('SELECT customerName, contactFirstName, contactLastName, addressLine1, city');







include 'orderForm.phtml';