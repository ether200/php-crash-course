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

// $_FILES
// How to upload files
// 1. Upload it to the root
// 2. Directly to the database
    

// enctype="mulipart/form-data
// Specifies how the form data should be encoded

// Accessing via type and name prop
// echo $name = $_FILES['file']['name'];
// echo $name = $_FILES['file']['type']; // .jpg
// echo $name = $_FILES['file']['error']; // if there's an error it returns 1 otherwise 0

?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">SUBMIT</button>
</form>
    
</body>
</html>