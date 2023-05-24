<?php
$filename = "D:\\codes\\php\\basics\\PHPCourse-lwhh\\files\\data\\csv.txt";
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
// $fp = fopen($filename, "w");
// foreach ($students as $student) {
//   $data= sprintf("%s,%s,%s,%s\n", $student['name'], $student['age'], $student['roll'], $student['grade']);
//   fwrite($fp, $data);
// }
// fclose($fp);

// now in fputcsv way,
// $fp = fopen($filename, "w");
// foreach ($students as $student) {
//   fputcsv($fp, $student);
// }
// fclose($fp);

// reading data

//normal way
// $fp=fopen($filename, "r");
// while($data=fgets($fp)){
//   $student=explode(",", $data);
//   // it will create an array of student data
//   // where it will find a comma it will break the string and create an array
//   printf("Name: %s, Age: %s, Roll: %s, Grade: %s\n", $student[0], $student[1], $student[2], $student[3]);
// }
// fclose($fp);

// fgetcsv way:
// $fp=fopen($filename, "r");
// while($student=fgetcsv($fp)){
//   printf("Name: %s, Age: %s, Roll: %s, Grade: %s\n", $student[0], $student[1], $student[2], $student[3]);
// }
// fclose($fp);

//add new data:
// $newstudent=array(
//   'name' => 'Jenny',
//   'age' => 24,
//   'roll' => 104,
//   'grade' => 'A'
// );

// $fp=fopen($filename, "a");
// fputcsv($fp, $newstudent);
// fclose($fp);

// delete data:
// $data=file($filename); // it will create an array of data
// unset($data[1]);
// // with file_put_contents:
// // $fp=file_put_contents($filename, $data);
// // with fopen:
// $fp=fopen($filename, "w");
// foreach($data as $line){
//   fwrite($fp, $line);
// }



// in serialize way:

$filenametwo = "D:\\codes\\php\\basics\\PHPCourse-lwhh\\files\\data\\serialize.txt";

//write:

// $fp=serialize($students);
// file_put_contents($filenametwo, $fp);

//read:
// $fp=file_get_contents($filenametwo);
// $students=unserialize($fp);
// print_r($students);

//delete:

// $fp=file_get_contents($filenametwo);
// $allstudents=unserialize($fp);
// unset($allstudents[1]);
// $fp=serialize($allstudents);
// file_put_contents($filenametwo, $fp);
