<?php include 'layout/header.html' ;
include '../classes/Books.php';
  $id = $_GET['id'];
  $book = new Book();
  $delete = $book->displayDeleteBooks($id);

?>

<div class="card w-25 mt-5 mx-auto shadow">
  <div class="card-header">
    <p class="font-monospace">Delete Book</p>
  </div>

  <div class="card-body">
    <form action="../actions/delete.php?id=<?=$id?>" method="post">
      <div class="mb-3">
        <label for="name" class="form-label fw-bold">Title</label>
        <input type="text" name="name" id="name" class="form-control" value="<?=$delete['name']?>">
      </div>
      <div class="mb-3">
        <label for="author" class="form-label fw-bold">Author</label>
        <input type="text" name="author" id="author" class="form-control" value="<?=$delete['author']?>">
      </div>
      <div class="mb-3">
        <label for="genre" class="form-label fw-bold">Genre</label>
        <input type="text" name="genre" id="genre" class="form-control" value="<?=$delete['genre']?>">
      </div>
      <a href="display.php" class="btn btn-danger">Cancel</a>
      <button type="submit" class="btn btn-danger px-5" name="btn">Delete</button>
    </form>
  </div>
</div>


<?php include 'layout/footer.html' ?>