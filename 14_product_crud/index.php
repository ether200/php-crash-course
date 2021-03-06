<?php
    # Connect to the database
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # When there's an error throw an exception aka error

    # Mysql query
    $statement = $pdo->prepare('SELECT * FROM products ORDER BY created_date DESC');
    $statement->execute();
    $products = $statement->fetchAll(PDO::FETCH_ASSOC); # fetch them and return as associative array
    // echo '<pre>';
    // var_dump($products);
    // echo '</pre>';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./app.css">
    <title>Product CRUD</title>
  </head>
  <body>
    <h1>Product CRUD</h1>

    <p>
        <a href="create.php" class="btn btn-success">Create Product</a>
    </p>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Created Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $i => $product): ?>
    <tr>
        <th scope="row"><?php echo $i + 1 ?></th>
        <td><?php echo $product['title']?></td>
        <td></td>
        <td><?php echo $product['price']?></td>
        <td><?php echo $product['created_date']?></td>
        <td>
            <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
            <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
        </td>

    </tr>
    <?php endforeach;  ?>
  </tbody>
</table>

  </body>
</html>