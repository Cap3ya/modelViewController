<?php

namespace Afpa\Repository;

use Afpa\Entity\Offre;
use Afpa\Repository\DAO;
use PDO;

class OffreDAO extends DAO
{

    public function getAll(): array
    {
        return $this->bdd->query("SELECT * FROM offre")->fetchAll(PDO::FETCH_CLASS, Offre::class);
    }

    public function getOne($id)
    {
        $query = $this->bdd->prepare("SELECT * FROM offre WHERE id = :id");
        $query->execute(["id"=>$id]);
        return $query->fetch();
    }

    public function addOne($data): bool
    {
        $query = $this->bdd->prepare("INSERT INTO offre (title, description) VALUES (':title', ':description');");
        $query->execute(["title" => $data->title, "description" => $data->description]);
        return true;
    }
    public function deleteOne(int $id): bool
    {
        return true;
    }
}
