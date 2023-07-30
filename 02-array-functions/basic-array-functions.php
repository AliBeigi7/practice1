<?php
function A($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre><hr>';
}

  //basices array

$arr = array("ali","erfan","maryam");
$arr1 = array("name"=>"ali","family"=>"ahmadi","age"=>"30");
echo count($arr);
echo "<hr>";
echo sizeof($arr);
echo "<hr>";
A(array_keys($arr,"erfan"));
A(array_values($arr));
if (array_key_exists("name",$arr1)) {
    echo "key exist<hr>";
}else {
    echo "key doesn't exist!<hr>";
}
if (in_array("ahmadi",$arr1)) {
    echo 'value exist <hr>';    
}else {
    echo 'value does not exist <hr>';
}
if (is_array($arr)) {
    echo "array<hr>";
}else {
    echo "not array<hr>";
}
shuffle($arr);
A($arr);

$students = array("ali","vahid","erfan");
sort($students);
$studentsLength=count($students);
      for ($x=0; $x < $studentsLength ; $x++) { 
        echo $students[$x];
        echo "<br>";
     }
     echo "<hr>";
$num = [20,15,2,6,8,4,0];
echo max($num)."<hr>";
echo min($num)."<hr>";
echo end($num)."<hr>";
echo array_sum($num)."<hr>";
echo array_rand($num);
