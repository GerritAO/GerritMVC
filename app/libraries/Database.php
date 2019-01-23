<?php
    /*pdo database class
     *connect to database
     *create statement
     *combine value
     *return rows and value
     */

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    //dbhandeler
    private $dbh;
    //statement
    private $stmt;
    //error
    private $error;

    public function __construct(){
        //dsn
        $dsn = 'mysql:host' . $this->host . ';dbname' . $this->dbname;
        $options = array(
            //check for database connectoin
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );  
        
        //create PDO instance
        try{

        }catch(PDOExeption $e){
            $this->error = $e->getMessage();
            echo $this->error;
        }
    
    }
}