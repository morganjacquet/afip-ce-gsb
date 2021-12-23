<?php
namespace App\Model;

use Core\Model;

class Student extends Model{
    public function __construct()
    {
        $this->table = "students";

        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $this->id = $_GET['id'];
        }

        $this->getConnection();
    }

    public function getList() {
        $sql = "SELECT *, formations.title as formation, nationalities.title as nationality FROM ".$this->table." LEFT JOIN formations ON formations.idformation = students.idformation LEFT JOIN nationalities ON nationalities.idnationality = students.idnationality";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();    
    }
}