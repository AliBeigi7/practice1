<?php
$str = "Hellow world. it's a beautiful day";
print_r(explode(" ",$str));
echo "<hr>";
$arr = ['hellow' , 'world' , 'beautiful' , 'day'];
echo implode(" " , $arr);
echo "<hr>";
echo substr('hellow world' , 3);
echo "<hr>";
echo strstr("hellow world world" , "world");
echo "<hr>";
echo str_replace("ali" , "sara" , "hellow ali");
echo "<hr>";
echo str_repeat('Erfan' , 8);
echo "<hr>";
echo str_shuffle("Hellow world 2");
echo "<hr>";
echo str_word_count("ali welcome to this site");
echo "<hr>";
$string = "hellow /world. beautiful day/ today";
$token = strtok($string , "/");

while ($token == true) {
    echo "$token<br>";
    $token = strtok("/"); 
}
$age = 18;
$str2 = "tehran";
printf("Ali is %u year old and live in %s"
,$age , $str2);
