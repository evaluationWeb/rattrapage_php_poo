<?php

namespace App\Repository;

use App\Database\Mysql;
use App\Entity\Category;

class CategoryRepository
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
     * Méthode qui retourne la liste des catégories (Category)
     * @return array<Category> Retourne le tableau des catégories (Category)
     * @throws \PDOException Erreurs SQL
     */
    public function findAllCategories(): array 
    {
        return [];
    }
}
