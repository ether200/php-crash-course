<?php
require_once 'includes/config.php';
require_once 'includes/database.php';

// Connect to a database using PDO
# PHP Data objects
# Lightweight, consistent interface
# Data-access abstraction

?>

<?php
    $object = new Database;
    echo $object->connect();
?>