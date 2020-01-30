# php-mysql-Exercice-Bon-de-comande

Projet illustrant la connexion à une base de données de type SQL, la récupération de données et l'affichage dans des pages html.

Le fichier .sql contient la base de données utilisée .

Travail demandé :

Affichage des commandes clients
Contexte

La société Classic Models est satisfaite du travail réalisé sur les requêtes SQL de sélection. Elle nous fait maintenant confiance et nous demande de lui développer une interface web de visualisation des commandes clients.
Fonctionnalités demandées

Il s'agit de développer 2 pages web :  la première affichera la liste des commandes passées par les clients et la seconde le détails d'une commande en particulier sur laquelle l'internaute aura cliqué. 
Page Liste des commandes

La société Classic Models souhaite sur cette première page voir afficher sous forme tabulaire la ***liste des commandes*** clients avec les informations suivantes :

    Numéro de la commande
    Date de commande
    Date de livraison
    Statut de la commande

Page Détails d'une commande

Le client souhaite que lorsqu'il clique sur une commande dans la liste des commande, il arrive sur une seconde page qui présente le détail de la commande cliquée :

    Informations concernant le client qui a passé la commande (nom du client, nom et prénom du contact, adresse, ville) 
    Récapitulatif des produits commandés (nom du produit, quantité commandé, prix unitaire, sous-total)
    Total de la commande HT, montant de la TVA, total de la commande TTC
