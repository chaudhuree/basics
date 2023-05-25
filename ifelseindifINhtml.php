<?php if (true) : ?>
  <!--Show HTML code when expression is true -->
<?php else : ?>
  <!--Show HTML code when expression is false -->
<?php endif ?>

<?php
//  example 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>PHP if Statement Demo</title>
</head>

<body>
  <?php $is_authenticated = true; ?>
  <?php if ($is_authenticated) : ?>
    <a href="#">Logout</a>
  <?php else : ?>
    <a href="#">Login</a>
  <?php endif ?>
</body>

</html>