<?php

namespace App\Service;

use App\Entity\Lego;
use \PDO;

class DatabaseInterface
{

    public function getAllLegos()
    {
        $db = new PDO("mysql:host=tp-symfony-mysql;dbname=lego_store", "root", "root");
        $answer = $db->query("SELECT *");
        $res = $answer->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
}
