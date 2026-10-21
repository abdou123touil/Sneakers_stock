<?php

// echo "Vous avez demandé : ". $_SERVER['REQUEST_URI'];

// require est une fonctione php qui permet d'importer un autre fichier php
// Ci dessous, je fais un require de __DIR__ avec "/AltoRouter.php"
// __DIR__ est un alias au dossier courant de mon projet
require __DIR__  . "/AltoRouter.php"; // J'importe le fichier AltoRouter.php
// C:\Users\imed7\Documents\sneakstock_routing/AltoRouter.php
// echo __DIR__  . "/AltoRouter.php";

// Ci dessous on créer une instance de la classe AltoRouter
// $router sera mon objet, cet objet est une instance de la classe AltoRouter
$router = new AltoRouter();


// Quand un utilisateur va effectuer une requete HTTP :
// - En méthode GET
// - Sur la route '/'
// - On va executer une fonction qui s'apelle accueil
$router->map('GET', '/', 'accueil');
$router->map('GET', '/about', 'about');
$router->map('GET', '/catalogue', 'catalogue');
$router->map('GET', '/connexion', 'login');
$router->map('GET', '/inscription', 'register');
$router->map('GET', '/produit', 'product');

$match = $router->match();
// print_r($match);
if ($match !== false && is_callable($match['target'])) { // $match['target] == 'accueil
    call_user_func($match['target']);
    // accueil();
} else {
    http_response_code(404);
    erreur();
}

// La fonction accueil(), est une fonction qui va afficher le fichier views/accueil.php
function accueil() {
    require_once(__DIR__ . "/views/accueil.php");
}

function about() {
    require_once(__DIR__ . "/views/about.php");
}

// catalogue() est la fonction qui va s'exécuter quand on va aller dans /catalogue
function catalogue() {
    $produits = require_once(__DIR__."/data/produits.php");
    require_once(__DIR__ . "/views/catalogue.php");
}

function login() {
    require_once(__DIR__ . "/views/connexion.php");
}

function register() {
    require_once(__DIR__ . "/views/inscription.php");
}

function product() {
    require_once(__DIR__ . "/views/produit.php");
}

function erreur() {
    require_once(__DIR__ . "/views/404.php");
}



// echo "<pre>";
// var_dump($match);
// echo "<pre>";
?>

<!-- <h1>Bon, maintenant j'en ai finit avec le php, je suis de retour en HTML</h1> -->