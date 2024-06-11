<?php
  include '../classes/Books.php';
  $id = $_GET['id'];
  $book = new Book();
  $book->updateBooks($_POST, $id);


?>