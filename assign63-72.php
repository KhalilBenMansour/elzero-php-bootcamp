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
/** 
 *  assign 10
*/
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 11
*/
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 12
*/
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 13
*/
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 14
*/
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