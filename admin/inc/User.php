<?php
/**
* Class Name = User
* Require    = Database
* @param     = $username, $password
*/
class User
{
  private $conn;
  public $id;
  public $username;
  public $password;
  public $level;

  function __construct($db)
  {
    $this->conn = $db;
  }

  public function login($username)
  {
    $query = "SELECT * FROM user WHERE username = ?";
    $stmt  = $this->conn->prepare($query);
    $stmt->bindParam(1, $username);
    $stmt->execute();

    $hasil = $stmt->fetch(PDO::FETCH_ASSOC);
    $this->id       = $hasil['id'];
    $this->username = $hasil['username'];
    $this->password = $hasil['password'];
    $this->level    = $hasil['level'];
  }
}
?>