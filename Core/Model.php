<?php
namespace Core;

include('../App/config/app.php');

abstract class Model{
    
    private $host;
    private $db_name;
    private $username;
    private $password;

    protected $_connexion;

    public $table;
    public $id;

    /**
     * Initialize databse
     *
     * @return void
     */
    public function getConnection() {
        include '../../config/mysql.php';

        $this->host = $mysql_config['host'];
        $this->db_name = $mysql_config['db_name'];
        $this->username = $mysql_config['username'];
        $this->password = $mysql_config['password'];

        $this->_connexion = null;

        try {
            $this->_connexion = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->_connexion->exec("set names utf8");
        } catch(\PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }
    }

    /**
     * Get in table database with id
     *
     * @return void
     */
    public function get() {
        $sql = "SELECT * FROM ".$this->table." WHERE id=".$this->id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();    
    }

    /**
     * Get list in table datable
     *
     * @return void
     */
    public function getList() {
        $sql = "SELECT * FROM ".$this->table;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();    
    }
}