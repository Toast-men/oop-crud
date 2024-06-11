<?php

include 'Connection.php';

// inheritant
class Book extends Connection{

  public function addBook($request){
    $name = $request['name'];
    $author = $request['author'];
    $genre = $request['genre'];

    $sql = "INSERT INTO books (name, genre, author) values ('$name', '$genre', '$author')";
    

    if($this->conn->query($sql)){
      header("location: ../views/display.php");
      exit;
    }else{
      die("Error adding book". $this->conn->error);
    }
  }

  public function displayBooks(){
    $sql = "SELECT * FROM books";
    // この場合、結果セットが$result変数に格納される。
    // 要するに、列と行からなる1まとまりのデータをもってくることが目的。
    // 主にSELECT文で使う
    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("Error retrieving book". $this->conn->error);
    }
  }

  public function displayUpdateBooks($id){
    

    $sql = "SELECT * FROM books WHERE id = '$id'";
    if($result = $this->conn->query($sql)){
      // fetch復習ねー
      // fetchメソッドはデータセットから、1つだけデータ（配列）を取り出したいときに使う。連想配列として値が格納されている。
      return $result->fetch_assoc();
    }else{
      die("Error retrieving book". $this->conn->error);
    }
  }

  public function updateBooks($request, $id){
    
    

    $name = $request['name'];
    $author = $request['author'];
    $genre = $request['genre'];
    

    $sql = "UPDATE books SET name = '$name', genre = '$genre', author = '$author' WHERE id = '$id' ";
    if($this->conn->query($sql)){
      header("location:../views/display.php");
      exit;
    }else{
      die("Error in updating book". $this->conn->error);
    }
  }

  public function displayDeleteBooks($id){
    

    $sql = "SELECT * FROM books WHERE id = '$id'";
    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error retrieving book". $this->conn->error);
    }
  }


  public function deleteBooks($id){
    $sql = "DELETE FROM books WHERE id = '$id'";
    if($this->conn->query($sql)){
      header("location:../views/display.php");
      exit;
    }else{
      die("Error in updating book". $this->conn->error);
    }
  }

}





?>