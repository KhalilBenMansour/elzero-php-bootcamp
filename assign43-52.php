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
function check_status($a, $b, $c) {
  $name="";
  $age=0;
  $status=false;
  foreach(func_get_args() as $arg){
    if(gettype($arg)==="string"){
      $name=$arg;
    }elseif(gettype($arg)==="integer"){
       $age=$arg ;
    }else {
      $status=$arg;
    }
  }
    return "Hello $name, Your Age Is $age, ".($status? "You Are":"You Are Not")." Available For Hire<br>";
  
}

// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 6
*/
function calculate($numOne,$numTwo,$operation="add"){
switch ($operation) {
  case 'a':
  case 'add':
    return $numOne + $numTwo ."<br>";
    break;
  case 's':
  case 'subtract':
    return $numOne - $numTwo ."<br>";
    break;
  case 'm':
  case 'multiply':
    return $numOne * $numTwo ."<br>";
    break;
  
  default:
    return "Unkown Operation"."<br>";
    break;
}
}
// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200

echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 7
*/
function calculated(int $num_one, int $num_two):float {
  return $num_one + $num_two;
}

echo calculated(20, 10); // 30
echo gettype(calculated(20, 10)); // Double
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 8
*/
$message = "Hello";
//method using anonymous function
$$message=function ($name) use ($message){
  return "$message $name";
};

//method using arrow function
$$message=fn ($name)=> "$message $name";


echo $Hello("Osama"); // Hello Osama
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 9
*/
$greet=function($name){
  return"Greetings $name<br>";};
$greet=fn($name)=>"Greetings $name<br>";

// Needed Output
echo $greet("Osama"); // Greetings Osama
echo '<br>**********************<br>';
/********************************************************** */