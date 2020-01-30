<?php

$pdo = new PDO('mysql:host=127.0.0.1;dbname=classicmodels', 'root', '');

$query = $pdo->query('SELECT * FROM employees');

//La méthode fetch() récupère un seul enregistrement
$employee = $query->fetch();

echo '<pre>';
print_r($employee);
echo '</pre>';

/*$employee = $query->fetch();

echo '<pre>';
print_r($employee);
echo '</pre>';
*/

/*
$employees = $query->fetchAll();
echo '<pre>';
print_r($employees);
echo '</pre>';
*/