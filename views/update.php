<?php include 'layout/header.html' ;

include '../classes/Books.php';
// まず表示させるのに以下が必要
$id = $_GET['id'];
$book = new Book;

$old = $book->displayUpdateBooks($id);
  

?>

<div class="card w-25 mt-5 mx-auto shadow">
  <div class="card-header">
    <p class="font-monospace">Update Book</p>
  </div>

  <div class="card-body">
    <!-- actionでupdate.phpに飛ばす -->
    <!-- idの情報も飛ばす　?id=<?=$id?> -->
    <form action="../actions/update.php?id=<?=$id?>" method="post">
      <div class="mb-3">
        <label for="name" class="form-label fw-bold">Title</label>
        <input type="text" name="name" id="name" class="form-control" value="<?=$old['name']?>">
      </div>
      <div class="mb-3">
        <label for="author" class="form-label fw-bold">Author</label>
        <input type="text" name="author" id="author" class="form-control" value="<?=$old['author']?>">
      </div>
      <div class="mb-3">
        <label for="genre" class="form-label fw-bold">Genre</label>
        <input type="text" name="genre" id="genre" class="form-control" value="<?=$old['genre']?>">
      </div>
      <button type="submit" class="btn btn-primary px-5" name="btn">Update</button>
    </form>
  </div>
</div>


<?php include 'layout/footer.html' ?>