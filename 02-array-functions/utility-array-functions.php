<?php
function A($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre><hr>';
}
function E($value) {
  echo '<pre>';
  echo($value);
  echo '</pre><hr>';
}

  //utility

$string = "test";
$arr = array("ali","erfan","maryam");
$arr1 = array("name"=>"ali","family"=>"ahmadi","age"=>"30");
$arr2 = array("ali","erfan","maryam","ali","erfan");
$arr3 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$arr4 = array("e"=>"red","f"=>"green","g"=>"blue");
A(array_chunk($arr,2));
A(array_merge($arr,$arr1));
A(array_unique($arr2));
A(array_reverse($arr));
E(array_search("ali",$arr));
A(array_diff($arr3,$arr4));
A(array_slice($arr3,2));
// array_splice($arr3,1,2,$arr4);
// A($arr3);
E(array_shift($arr3));
A($arr3);
array_push($arr3,"brown","pink");
A($arr3);
array_pop($arr3);
A($arr3);

$arr5 = array_fill(0,5,"orange");
A($arr5);
