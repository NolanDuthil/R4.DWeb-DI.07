<?php

namespace App\Entity;

class Lego {
    private $id;
    private $name;
    private $collection;
    private $description;
    private $prices;
    private $pieces;
    private $boxImage;
    private $legoImage;

    public function __construct($id, $name, $collection)
    {
        $this->id = $id;
        $this->name = $name;
        $this->collection = $collection;
        
    }

    /**
     * Get the value of id
     */ 
    public function getId() :string
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName() :string
    {
        return $this->name;
    }

    /**
     * Get the value of collection
     */ 
    public function getCollection() :string
    {
        return $this->collection;
    }
}

