<?php
namespace Model;

use Core\Model;

class Formation extends Model{
    public function __construct()
    {
        $this->table = "formations";

        $this->getConnection();
    }
}