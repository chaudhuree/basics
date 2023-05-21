<?php
// Magic constants
// echo __FILE__ . PHP_EOL; // full path of the file with file name
// echo __DIR__ . PHP_EOL; // full path of the directory 
// echo __LINE__ . PHP_EOL; // line number of the file

// Create directory
// mkdir('test');

// Rename directory
// rename('test', 'test2');

// Delete directory
//rmdir('test2');

// Read files and folders inside directory
// $files = scandir('./'); // . means current directory
// $files1 = scandir('../'); // . means current directory
// echo '<pre>';
// var_dump($files). '<br>';
// var_dump($files1) . '<br>';
// echo '</pre>';

// file_get_contents, file_put_contents
// $lorem = file_get_contents('lorem.txt');
// $lorem = file_get_contents('./php again starting on 20 may/reference codes/11_fs/lorem.txt');
// echo $lorem;
// echo '<br>';
// file_put_contents('lorem.txt', "First line" . PHP_EOL . $lorem);

// file_get_contents from URL
// $jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
// $users = json_decode($jsonContent);
// var_dump($users);

// Check if file exists or not
// file_exists('lorem.txt'); // true

// Get file size
// filesize('lorem.txt');

// Delete file
// unlink('lorem.txt');

// https://www.php.net/manual/en/book.filesystem.php
