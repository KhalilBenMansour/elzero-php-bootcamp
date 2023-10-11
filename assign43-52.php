<?php
/** 
 *  assign 1
*/
function greeting($name,$gender=""){
  if($gender==="Male"):
    return "Hello Mr $name <br>";
  elseif($gender==="Female"):
    return "Hello Miss $name <br>";
  else:
     return "Hello  $name <br>";
  endif;
}
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 2
*/
//method one using predefined function
function get_arguments(){
  $all="";
  foreach (func_get_args() as $i=>$word) {
    if($i===func_num_args()-1){
      $all.=$word;
    }else{
      $all.=$word . " ";
    }
  }
  return "$all<br>";
}
//method one using splat operator function
// function get_arguments(...$words){
//   $all="";
//   foreach ($words as $i=>$word) {
//     if($i===count($words)-1){
//       $all.=$word;
//     }else{
//       $all.=$word . " ";
//     }
//   }
//   return "$all<br>";
// }
// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 3
*/
function sum_all(...$nums)  {
  $result=0;
  foreach($nums as $num){
    $result+=($num===10)?2*$num:(($num===5)?0:$num);
  }
  return "$result<br>";
}
// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 4
*/
function multiply(...$nums)  {
  $result=1;
  foreach($nums as $num){
    if(gettype($num)==="double"){
      $result*=(int)$num;
    }elseif(gettype($num)==="string"){
      continue;
    }else{
      $result*=$num;
    }
  }
  return "$result<br>";
}
// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 5
*/

echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 6
*/
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 7
*/
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 8
*/
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 9
*/
echo '<br>**********************<br>';
/********************************************************** */