<?php

namespace Afpa\Entity;

class Offre
{
    private int $id;
    private string $title;
    private string $description;

    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getAll() : array
    {
        return [$this->description];
    }
}