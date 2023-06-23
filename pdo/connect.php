<?php
// for connection
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
// for error handling
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// for query and fetching data
$statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC); //it will fetch all data as associative array

// echo '<pre>';
// var_dump($products);
// echo '</pre>';

?>


// after getting the data we will show it in html

<body>
  <table>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Create Date</th>

      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $i => $product) { ?>
        <tr>
          <th scope="row"><?php echo $i + 1 ?></th>
          <td>
            <?php if ($product['image']) : ?>
              <img src="<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>" class="product-img">
            <?php endif; ?>
          </td>
          <td><?php echo $product['title'] ?></td>
          <td><?php echo $product['price'] ?></td>
          <td><?php echo $product['create_date'] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <!-- 
  another way to write foreach in html
  <?php foreach ($products as $product) : ?>
  <?php endforeach; ?> -->
</body>