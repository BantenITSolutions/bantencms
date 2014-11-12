<?php
/**
* Class Name = Database
* Engine     = MySQL
* Prosedure  = PDO
*/
class Database
{
  public $conn;

  function __construct()
  {
    $this->conn = NULL;

    try {
      $this->conn = new PDO("mysql:host=localhost;dbname=cmsku", "root", "suck-IT26");
    } catch (PDOException $e) {
      echo "Gagal : ".$e->getMessage();
    }

    return $this->conn;
  }
}