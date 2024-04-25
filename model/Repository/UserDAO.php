<?php

namespace Afpa\Repository;

class UserDAO extends DAO
{
    public function getAll(): array
    {
        return $this->bdd->query("SELECT * FROM user")->fetchAll();
    }

    public function getOne($id)
    {
        return "";
    }

    public function addOne($data): bool
    {
        return true;
    }
    public function deleteOne(int $id): bool
    {
        return true;
    }
}
