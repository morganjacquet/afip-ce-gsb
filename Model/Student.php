<?php
namespace Model;

use Core\Model;

class Student extends Model{
    public function __construct($params)
    {
        $this->table = "students";

        if (isset($params['id']) && !empty($params['id'])) {
            $this->id = $params['id'];
        }

        $this->getConnection();
    }

    public function get() {
        $sql = "SELECT * FROM ".$this->table." WHERE idstudent=".$this->id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();    
    }

    public function getList() {
        $sql = "SELECT *, formations.title as formation, nationalities.title as nationality FROM ".$this->table." LEFT JOIN formations ON formations.idformation = students.idformation LEFT JOIN nationalities ON nationalities.idnationality = students.idnationality";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();    
    }
}