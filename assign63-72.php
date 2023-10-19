<?php
/** 
 *  assign 1
*/
$friends = [
  "AG" => "Ahmed Gamal",
  "OM" => "Osama Mohamed",
  "MG" => "Mahmoud Gamal",
  "AS" => "Ahmed Samy",
  "FA" => "Farid Ahmed",
  "SM" => "Sayed Mohamed"
];

$friends_lower_keys=array_change_key_case($friends,CASE_LOWER);
echo '<pre>';
print_r(array_chunk($friends_lower_keys,2,true));
echo '</pre>';
// Output
// Array
// (
//   [0] => Array
//     (
//       [ag] => Ahmed Gamal
//       [om] => Osama Mohamed
//     )
//   [1] => Array
//     (
//       [mg] => Mahmoud Gamal
//       [as] => Ahmed Samy
//     )
//   [2] => Array
//     (
//       [fa] => Farid Ahmed
//       [sm] => Sayed Mohamed
//     )
// )
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 2
*/
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo '<pre>';
print_r(array_change_key_case(array_combine($codes,$means),CASE_LOWER));
echo '</pre>';
// Output
// Array
// (
//   [h] => HTML
//   [c] => CSS
//   [j] => JavaScript
// )
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 3
*/
$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];


echo '<pre>';
print_r(array_change_key_case(array_reverse(array_flip($friends)),CASE_LOWER));
echo '</pre>';
// Output
// Array
// (
//   [as] => Ahmed Samy
//   [mg] => Mahmoud Gamal
//   [om] => Osama Mohamed
//   [ag] => Ahmed Gamal
// )
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 4
*/
$nums = [10, 20, 30];

echo array_reduce($nums,fn($carry,$item)=>$carry+$item) . "<br>";
echo array_sum($nums);
// Output
// 60
// 60
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 5
*/
$nums = [5, 10, 20, 5, 30, 40];

echo array_reduce(array_filter($nums,fn($i)=>$i!==5),fn($c,$i)=>$c+$i);
// Output
// 100
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 6
*/
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

echo '<pre>';
print_r(array_pad($chars,count($chars)*strlen($char),$char[$zero]));
echo '</pre>';
// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
//   [4] => E
//   [5] => @
//   [6] => @
//   [7] => @
//   [8] => @
//   [9] => @
// )
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 7
*/
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);

echo current($names) . "<br>"; // "Sayed"

end($names);

echo current($names) . "<br>"; // "Ali"

reset($names);

echo current($names) . "<br>"; // "Osama"

end($names);
prev($names);

echo current($names) . "<br>"; // "Mahmoud"
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 8
*/
// method 1
$chars = ["A", "B", "C"];

$chars[]="D";
echo '<pre>';
print_r($chars);
echo '</pre>';
// method 2
$chars = ["A", "B", "C"];

echo '<pre>';
print_r(array_replace($chars, [3=>"D"]));
echo '</pre>';
// method 3
$chars = ["A", "B", "C"];

echo '<pre>';
print_r(array_merge($chars, ["D"]));
echo '</pre>';
// method 4
$chars = ["A", "B", "C"];

array_push($chars,"D");
echo '<pre>';
print_r($chars);
echo '</pre>';
// method 5
$chars = ["A", "B", "C"];

echo '<pre>';
print_r(array_pad($chars,4,"D"));
echo '</pre>';
// method 6
$chars = ["A", "B", "C"];

array_splice($chars,3,0,"D");
echo '<pre>';
print_r($chars);
echo '</pre>';
// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 9
*/
$nums = [1, 2, 3, 4, 5, 6];

echo '<pre>';
print_r(array_slice($nums,-5,-2));
echo '</pre>';
// Output
// Array
// (
//   [0] => 2
//   [1] => 3
//   [2] => 4
// )
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 10
*/
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

array_splice($mix,count($nums),count($nums),$nums);

echo '<pre>';
print_r($mix);
echo '</pre>';
// Output
// Array
// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
//   [5] => 6
//   [6] => 7
//   [7] => 8
//   [8] => 9
// )
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 11
*/
$arr = ["A", "B", "C", "D", "E"];

function custom_count($array){
$count=0;
while(!empty($array[$count])){
  $count++;
}
return $count;
}
echo custom_count($arr);
// Output 5
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 12
*/
$nums = [11, 2, 10, 7, 20, 50];

function custom_array_sum($array){
  $sum=0;
  // I use cout because I implement it already
  for($i=0;$i<count($array);$i++){
    $sum+=$array[$i];
  }
return $sum;
}
echo custom_array_sum($nums);
// Output 100
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 13
*/
$nums = [10, 100, -20, 50, 30];

function max_array($array){
  $max=$array[0];
  // I use cout because I implement it already
  for($i=1;$i<count($array);$i++){
    if($array[$i]>$max){
      $max=$array[$i];
    }
  }
return $max;
}
echo max_array($nums);
// Output 100
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 14
*/
$nums = [10, 100, -20, 50, 30];

function min_array($array){
  $min=$array[0];
  // I use cout because I implement it already
  for($i=1;$i<count($array);$i++){
    if($array[$i]<$min){
      $min=$array[$i];
    }
  }
return $min;
}
echo min_array($nums);
// Output -20
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 15
*/
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 16
*/
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 17
*/
echo '<br>**********************<br>';
/********************************************************** */