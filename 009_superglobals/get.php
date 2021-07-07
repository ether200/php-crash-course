<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // GET data from the server
    // A good example is using query
    // Data will be visible in the URL as query when a form is submitted
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
        print_r($_GET);
    }
    
?>

<form action="get.php" method="get">
    <input type="text" name="name">
    <input type="text" name="age">
    <button type="submit">Submit</button>
</form>
    
</body>
</html>