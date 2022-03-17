<?php
namespace Model;

use Core\Model;

class Nationality extends Model{
    public function __construct()
    {
        $this->table = "nationalities";

        $this->getConnection();
    }
}