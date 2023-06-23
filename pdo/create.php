<?php

// create connection to database
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// for validation make an array of errors
// if any error is found, add it to the array
$errors = [];

// create variables for title, description, price
// when the form is submitted, the values will be stored in these variables
// this values is coming from the form and through the $_POST superglobal,(url)
$title = '';
$description = '';
$price = '';

// checking if the method is post then do sumbit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  //as the form is submitted, the values will be stored in these variables
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];

  // image will come from the form and through the $_FILES superglobal
  // if there is no image, then set it to null
  $image = $_FILES['image'] ?? null;

  // image path is used to store the image path saved in the database
  $imagePath = '';

  // if there is no directory named images, then create one
  // this is where the images will be stored
  if (!is_dir('images')) {
    mkdir('images');
  }

  // when image is uploaded, it will be stored in the images folder
  // with a new generated folder.
  // the folder name will be a random string of 8 characters plus the image name
  // whit this name we will create a new folder
  // mkdir(dirname($imagePath));
  if ($image && $image['tmp_name']) {
    $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
    mkdir(dirname($imagePath));
    move_uploaded_file($image['tmp_name'], $imagePath);
  }

  // if there is no title, then add an error to the array
  // like this way all error will be stored in the array
  if (!$title) {
    $errors[] = 'Product title is required';
  }

  if (!$price) {
    $errors[] = 'Product price is required';
  }

  // if there is no error, then insert the data into the database
  if (empty($errors)) {
    // prepare is used to create a query
    // in this case this query will store data to the database
    $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                VALUES (:title, :image, :description, :price, :date)");

    // bindValue is used to bind the values to the query
    $statement->bindValue(':title', $title);
    $statement->bindValue(':image', $imagePath);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':date', date('Y-m-d H:i:s'));

    // finally execute the query
    $statement->execute();
    // after the query is executed, redirect to the index page
    header('Location: index.php');
  }
}

?>
// this peace of code is used to show the error message

<?php if (!empty($errors)) : ?>
  <div class="alert alert-danger">
    <?php foreach ($errors as $error) : ?>
      <div><?php echo $error ?></div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>