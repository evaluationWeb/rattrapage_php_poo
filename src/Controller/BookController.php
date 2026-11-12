<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Repository\BookRepository;
use App\Repository\CategoryRepository;
use App\Entity\Book;
use App\Entity\Category;
use App\Utils\Tools;


class BookController extends AbstractController
{
    //Attributs
    private BookRepository $bookRepository;
    private CategoryRepository $categoryRepository;

    //Constructeur
    public function __construct()
    {
        //Injection des dependances
        $this->bookRepository = new BookRepository();
        $this->categoryRepository = new CategoryRepository();
    }

    //Méthodes

    /**
     * Méthode pour ajouter un Livre (Book)
     * @return mixed Retourne le template
     */
    public function addBook(): mixed 
    {
        return "template avec la méthode render";
    }

    /**
     * Méthode pour afficher la liste des Livres (Book)
     * @return mixed Retourne le template
     */
    public function showAllBooks(): mixed 
    {
        return "template avec la méthode render";
    }
}
