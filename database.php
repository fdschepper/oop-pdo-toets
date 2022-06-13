<?php
include "config.php";
class Database  
{
    private $db_host = DB_HOST;
    private $db_user = DB_USER;
    private $db_pass = DB_PASS;
    private $db_name = DB_NAME;
    private $dbHandler;
    private $statement;

    public function __construct()
    {
        $connection = "mysql:host=$this->db_host;dbname=$this->db_name;charset=UTF8";

        try 
        {
            $this->dbHandler = new PDO($connection, $this->db_user, $this->db_pass);

        }

        catch (PDOException $e) 
        {
           echo $e->getMessage();
        }
    }

    public function query($sql)
    {
        $this->statement = $this->dbHandler->prepare($sql);
    }

    public function bind($parameter, $value, $type)
    {
        $this->statement->bindValue($parameter, $value, $type);
    }

    public function execute()
    {
        $this->statement->execute();
        
    }

    public function resultSet()
    {
        $this->statement->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }
}