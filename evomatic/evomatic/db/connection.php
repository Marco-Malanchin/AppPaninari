<?php

class db{
  protected $servername = "localhost";
  protected $db_name = "sandwiches";
  protected $username = "root";
  protected $password = "";
  public $conn;
  
  // Create connection
  public function connection(){
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db_name);
      // Check connection
    if ($this->conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  return $this->conn;
  }
}
?>