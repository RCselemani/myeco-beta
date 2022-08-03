<?php

// Récupération de données depuis la base de données
// Première méthode
function getProducts_fetch() : array {
    // On se connecte à la base de données et on récupère le retour de la fonction qui nous servira pour les interactions avec cette dernière
    $bdd = dbConnect();

    // Création de la requête
    $query = $bdd->query('SELECT * FROM `products`');

    // On prépare la variable pour qu'elle puisse recevoir les données
    $datas = [];

    // On récupère les données grâce à la boucle et au fetch (un enregistrement par tour de boucle)
    while($data = $query->fetch()) {
        $datas[] = $data;
    }

    var_dump($datas);

    // On renvois les données pour affichage
    return $datas;
}

// 2ème méthode
function getProducts_fetchAll() : array {
    // On se connecte à la base de données et on récupère le retour de la fonction qui nous servira pour les interactions avec cette dernière
    $bdd = dbConnect();

    // Création de la requête
    $query = $bdd->query('SELECT * FROM `products`');

    // On récupère les données grâce au fetchAll
    $datas = $query->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($datas);

    // On renvois les données pour affichage
    return $datas;
}