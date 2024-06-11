<?php include 'layout/header.html';
include '../classes/Books.php';
$books = new Book;

?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-6">
      <table class="table">
        <thead>
          <tr>
          <th>Name</th>
          <th>Author</th>
          <th>Genre</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($books->displayBooks() as $book): ?>
            <tr>
              <td><?=$book['name']?></td>
              <td><?=$book['author']?></td>
              <td><?=$book['genre']?></td>
              <td><?=$book['id']?></td>

              <td><a href="update.php?id=<?=$book['id']?>">update</a></td>
              <td><a href="delete.php?id=<?=$book['id']?>">Delete</a></td>
            </tr>
          <?php endforeach;?>
        </tbody>
        
      </table>

      <a href="create.php">Create books</a>
    </div>
  </div>
</div>


<?php include 'layout/footer.html' ?> 

