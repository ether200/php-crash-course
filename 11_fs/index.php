<?php
// Magic constants

echo __DIR__ . '<br>'; # prints the directory path
echo __FILE__ . '<br>'; # prints the current file path
echo __LINE__ . '<br>'; # prints the line where it's written

// Create directory

// mkdir('test');

// Rename directory

// rename('test', 'test2');

// Delete directory

// rmdir('test2');

// Read files and folders inside directory

$files = scandir('./');
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
file_put_contents('sample.txt', 'Something Content');

// file_get_contents from URL

$usersJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
$users = json_decode($usersJson, true); # converts it into assosiative array instead of object with 2nd argument
echo '<pre>';
var_dump($users);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists file_exists('sample.txt) true
// is_dir ('test); // false
// filemtime
// filesize
// disk_free_space
// file