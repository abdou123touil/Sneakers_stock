<?php
// Ci dessous, je déclare la session ouverte
session_start();

// FICHIER_UTILISATEUR est une variable qui est égal au chemin du fichier data/utilisateur
// ATTENTION : A ne pas confondre avec require_once(__DIR__.'/data/utilisateurs.php');
// Avec require_once on importe le tableau
// Avec FICHIER_UTILISATEUR, c'est juste le fichier
const FICHIER_UTILISATEUR = __DIR__."/data/utilisateurs.php";

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

$router->map('GET', '/deconnexion', 'deconnexion');

// C'est ici que je vais gérer l'authentification
$router->map('POST', '/auth', 'authentification');

// C'est ici que je vais gérer l'authentification
$router->map('POST', '/register', 'register_user');

// ICi on va specifier l'id du produit qu'on veut afficher
$router->map('GET', '/produit/[i:id]', 'product');

$match = $router->match();
// print_r($match);
if ($match !== false && is_callable($match['target'])) { // $match['target] == 'accueil
    call_user_func_array($match['target'], $match['params']);
    // call_user_func($match['target']);
    // accueil();
} else {
    http_response_code(404);
    erreur();
}

function deconnexion() {
    session_unset();
    // print_r($_SESSION);
    require_once(__DIR__ . "/views/accueil.php");
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
    print_r($_SESSION);
    $produits = require_once(__DIR__."/data/produits.php");
    require_once(__DIR__ . "/views/catalogue.php");
}

function login() {
    require_once(__DIR__ . "/views/connexion.php");
}

function register() {
    require_once(__DIR__ . "/views/inscription.php");
}

function product($id) {
    $produits = require_once(__DIR__."/data/produits.php");
    $produit = $produits[$id];
    // var_dump($produit);
    require_once(__DIR__ . "/views/produit.php");
}

function erreur() {
    require_once(__DIR__ . "/views/404.php");
}

function authentification() {
    echo "Tentative de connexion sur le site";
    echo "<br>";
    // print_r($_SERVER);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $users = require_once(__DIR__."/data/utilisateurs.php");
        // Je rentre dans ce if, qui si l'auth a bien fonctionné
        if (isAuthable($_POST, $users) == true) {
            echo "Ca marche !";
            // $_SESSION 
            $_SESSION['is_authenticated'] = true;
            $_SESSION['user_email'] = $_POST['email'];
            // print_r($_SESSION);
            header("Location: /catalogue"); // Je redirige l'user sur la page catalogue lorsqu'il est authentifié
        } else {
            header("Location: /connexion"); // Je redirige l'user sur la page connexion lorsqu'il n'est pas authentifié
            echo "Ca ne marche pas !";
        }
    }
}
// C'est la fonction qui va s'exécuter lorsque une requete POST sera faite sur la route /register
function register_user() {
    echo "Tentative d'inscription sur le site";
    echo "<br>";
    // print_r($_SERVER);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        print_r($_POST);
        // J'importe dans $users tout mes utilisateurs
        $users = require_once(__DIR__."/data/utilisateurs.php");
        // Dans $new_user, je stock les données de ce que l'utilisateur a posté
        $new_user = [
            'id' => count($users) + 1,
            'nom' => $_POST['name'],
            'email' => $_POST['email'],
            'mot_de_passe' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'role' => 'user',
            'date_inscription' => date('Y-m-d H:i:s'),
        ];
        print_r($new_user);
        // Dans $users je rajoute $new_user
        $users[] = $new_user;
        // Grace à ecrireTable(), je vais écrire dans le fichier data/utilisateurs.php ma nouvelle version de $users (avec $new_user de rajouté)
        ecrireTable(FICHIER_UTILISATEUR, $users);
        echo "Inscription réussie !";
    }
}

// C'est ma fonction qui check si les acces d'un utilisateurs existent bien en bdd
// @params $client : ce que le client a posté
// @params $bdd : Le tableau avec tous les utilisateurs en bdd
function isAuthable($client, $bdd) {
    for ($i = 0; $i < count($bdd); $i++) {
        // Ci dessous, je check si l'email renseigné par le client est egal a l'une des adresses mails dans la base de données 'utilisateurs.php'
        if ($client["email"] == $bdd[$i]["email"] && $client["password"] == $bdd[$i]["mot_de_passe"]) {
            echo "Les adresse emails ont bien matchés";
            return true;
        }
    }
    return false;
}

function ecrireTable(string $fichier, array $lignes): void
{
    $contenu = "<?php\n\nreturn " . var_export(array_values($lignes), true) . ";\n";
    file_put_contents($fichier, $contenu, LOCK_EX);
}
