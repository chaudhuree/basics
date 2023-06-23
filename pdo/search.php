<?php
$keyword = $_GET['search'] ?? null;

if ($keyword) {
  $statement = $pdo->prepare('SELECT * FROM products WHERE title like :keyword ORDER BY create_date DESC');
  $statement->bindValue(":keyword", "%$keyword%");
} else {
  $statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
}
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<form action="" method="get">
  <div class="input-group mb-3">
    <input type="text" name="search" class="form-control" placeholder="Search" value="<?php echo $keyword ?>">
    <div class="input-group-append">
      <button class="btn btn-success" type="submit">Search</button>
    </div>
  </div>
</form>