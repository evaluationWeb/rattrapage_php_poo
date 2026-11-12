<?php

namespace App\Repository;

use App\Database\Mysql;
use App\Entity\Book;
use App\Entity\Category;

class BookRepository
{
    //Attribut
    private \PDO $connect;

    //Constructeur
    public function __construct()
    {
        //Injection des dependances
        $this->connect = (new Mysql)->connectBDD();
    }

    //Méthodes

    /**
     * Méthode qui ajoute un livre (Book) en BDD
     * @return void
     * @throws \PDOException Erreurs SQL
     */
    public function saveBook(Book $book): void {}
    
    /**
     * Méthode qui retourne la liste des livres (Book)
     * @return array<Book> Retourne le tableau des livres (Book)
     * @throws \PDOException Erreurs SQL
     */
    public function findAllBooks(): array 
    {
        return [];
    }
}
