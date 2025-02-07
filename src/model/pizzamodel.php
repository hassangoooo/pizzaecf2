<?php
require_once("Database.php");

class pizzaModel {
    public function __construct() {
       
    }
    public function get() {
      try
        {
            $db = Db::getInstance();
            $sql="SELECT * FROM pizza
            inner join base on pizza.id_base = base.id_base";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        catch (\PDOException $exc)
        {
            exit($exc->getMessage());
        }
    }
    public function post() {
        echo "POST";
    }
}