<?php

    # Connect to the database
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # When there's an error throw an exception aka error

    /*
        When we initially access the page the method is GET,
        that's why we use the super global to check the method and do
        the POST whenever the form is submitted
    */


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $title = $_POST['title'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $date = date('Y-m-d H:i:s');
    
        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, created_date) VALUES (:title, :image, :description, :price, :date)");
    
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $image);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);
        $statement->execute();
    
        # We do this way since it's more safe from sql injections
        # We don't simple do pdo exec with the variable values

    }

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
    <title>Create new Product</title>
  </head>
  <body>
    <h1>Create new Product</h1>

    <p>
        <a href="index.php" class="btn btn-success">Back to home</a>
    </p>

    <form action="" method="post">
  <div class="mb-3">
    <label  class="form-label">Product Title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="mb-3">
    <label  class="form-label">Product Image</label>
    <br>
    <input type="file" name="image">
    <br>
  </div>
  <div class="mb-3">
    <label  class="form-label">Product Description</label>
    <textarea class="form-control" name="description"></textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">Product Price</label>
    <input type="number" step=".01" class="form-control" name="price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


  </body>
</html>