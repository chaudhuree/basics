<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'] ?? null;
if (!$id) {
  header('Location: index.php');
  exit;
}

$statement = $pdo->prepare('DELETE FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();

header('Location: index.php');

?>

// codes for delete button
// as the method is post so we will use form
// add this in connect or show type php file
<td>
  <form method="post" action="delete.php">
    <input type="hidden" name="id" value="<?php echo $product['id'] ?>" />
    <button type="submit">Delete</button>
  </form>
</td>