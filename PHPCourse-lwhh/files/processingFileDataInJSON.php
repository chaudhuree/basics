<?php
$filename = "D:\\codes\\php\\basics\\PHPCourse-lwhh\\files\\data\\json.txt";
$students = array(
  array(
    'name' => 'John',
    'age' => 25,
    'roll' => 101,
    'grade' => 'A'
  ),
  array(
    'name' => 'Jane',
    'age' => 22,
    'roll' => 102,
    'grade' => 'B'
  ),
  array(
    'name' => 'Mike',
    'age' => 23,
    'roll' => 103,
    'grade' => 'C'
  )
);

// writing data:
// $data=json_encode($students);
// file_put_contents($filename, $data, LOCK_EX);

// reading data:
$data = file_get_contents($filename);
// $allstudents=json_decode($data);// it will create an object
$allstudents = json_decode($data, true); // to make it an array we need to pass true as second parameter
print_r($allstudents);
