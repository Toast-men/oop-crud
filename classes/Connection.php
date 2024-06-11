<?php

class Connection{
  private $servername = 'localhost';
  private $username = 'root';
  private $password = '';

  private $db_name = 'library';

  public $conn;

  // コンストラクタはそのクラスがインスタンス化されるときに、自動で呼び出される特別なメソッド。プロパティの初期化が主な目的。
  public function __construct(){
    $this->conn = new mysqli($this->servername,$this->username, $this->password, $this->db_name);

    if($this->conn->connect_error){
      return die('Could not connect to database'. $this->conn->connect_error);
  }
}

}




?>