<?php 

namespace Afpa\Repository;

abstract class DAO {

    protected $bdd;

    public function __construct()
    {
        $this->bdd = SPDO::getInstance();
    }

    // Récupérer tous les items
    abstract public function getAll(): array;
    // Récupérer un item avec son Id
    abstract public function getOne(int $id);
    // Ajouter un Item
    abstract public function addOne($data): bool;
    // Supprimer un item avec son Id
    abstract public function deleteOne(int $id): bool;

}