<?php

// Create Database Class
  class  Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $error;
    private $stmt;

    // set Constructer Function
    public function __construct(){
      // set DSN
      $dsn = 'mysql:host=' . $this->host .';dbname='. $this->dbname;
      // set Option
      $option =  array(
          PDO::ATTR_PERSISTENT => true ,
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
       );
       //  PDO INSTANCE
       try {
         $this->dbh = new PDO($dsn , $this->user, $this->pass, $option);
       } catch(PDOException $e) {
         $this->error = $e->getMessage();
         die("failed to connection");
       }

    }
    // Set Query Function
    public function query($query){
       $this->stmt = $this->dbh->prepare($query);
    }
    // set bind param with field in Database
    public function bind($param , $value , $type = null) {
      if (is_null($type)) {
          switch(true) { //sTART SWITCH CASES
            case is_int($value):
              $type = PDO::PARAM_INT;
              break;
            case is_bool($value):
              $type = PDO::PARAM_BOOL;
              break;
            case is_null($value):
              $type = PDO::PARAM_NULL;
              break;
            default:
              $type = PDO::PARAM_STR;
          }
      }// end of if Checking
      $this->stmt->bindValue($param , $value, $type);
    }
    // set Execute Function
    public function execute(){
      return  $this->stmt->execute();
    }
    // Set REsult Function And Get Fetchall Data From Database
    public function resultSet(){
      $this->execute();
      return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    // get single Info Depending of Separate info
    public function single(){
      $this->execute();
      return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
  }
