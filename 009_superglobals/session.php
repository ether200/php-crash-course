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
    // SESSION
    // Just like the cookies they're used to mantain session
    // Good to use for sensitive information, since it can't be accessed as easy as cookies
    // It only exist as long as the browser is open

    session_start();

    // Storing information
    $_SESSION["Name"] = "Ivan";
    $_SESSION["Age"] = "26";

    echo "Hello " . $_SESSION["Name"];

    // session_destroy();
?>
    
</body>
</html>