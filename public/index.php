<?php

//import de de l'autoload
include '../vendor/autoload.php';

//Charger les variables d'environnement
$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();

//récupération de l'url
$url = parse_url($_SERVER["REQUEST_URI"]);
$path = isset($url["path"]) ? $url["path"] : "/";
//Import des classes
use App\Controller\HomeController;
use App\Controller\BookController;

//Instance des controllers
$homeController = new HomeController();
$bookController = new BookController();

//Router
switch ($path) {
        case '/':
            $homeController->index();
            break;
        case '/book/add':
            $bookController->addBook();
            break;
        case '/books':
            $bookController->showAllBooks();
            break;
        default:
            echo "404";
            break;
    }
