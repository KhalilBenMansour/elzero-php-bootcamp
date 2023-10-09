<?php 
/** 
 *  assign 1
*/
// Replace ? With Arithmetic Operators
echo 10 * 20 + 15 % 3 + 190 + 10 - 400 ; // 0
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 2
*/
$a = "10";
//method 1
echo +$a;
echo '<br>';
echo gettype(+$a);
echo '<br>';
//method 2
echo (int)$a;
echo '<br>';
echo gettype((int)$a);
echo '<br>';
//method 3
echo 1*$a;
echo '<br>';
echo gettype(1*$a);
echo '<br>';
//method 4 searching
echo intval($a);
echo '<br>';
echo gettype(intval($a));
echo '<br>';
//method 5 searching
 settype($a, 'integer');
 echo $a;
echo '<br>';
echo gettype($a);
echo '<br>';
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 3
*/
$a = 10;
$b = 20;
// Needed Output -1
echo ($a<=>$b);

echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 4
*/
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c > $a); // True
var_dump($a<= $b); // True
var_dump($a <> $b); // True
var_dump($a != $c); // True
var_dump($a !== $c); // True
 var_dump(gettype($a) ==gettype($b)); // True
 var_dump(gettype($a) === gettype($b)); // True
 var_dump(gettype((float) $a) != gettype($b)); // True // I can't find another operator so used !=
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 5
*/
$points = 10;

$points++;
$points++;
$points++;

echo $points; // 13

$points--;
$points--;
$points--;
$points--;
$points--;

echo $points; // 8;
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 6
*/
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = "$a $b $c";

// Method Two
$d = "{$a} {$b} {$c}";

// Method Three
$d = $a . " " .$b. " " . $c;;

// Method Four
$d =<<<"word"
$a $b $c
word;

echo $d; // Elzero Web School
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 7
*/
$a = 10;
$b = 20;

echo (($a + $b) * ($a + $b) + $a * $a) * $a; // 10000 = ((10 + 20) * (10 + 20) + 10 * 10 )* 10
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 8
*/
// Code 1
$a = @$b or die("Custom Error ");

// Code 2
$f = @file("Not_A_File") or die("Custom Error ");

// Code 3
(@include("Not_A_File")) or die("Custom Error ");;
echo '<br>**********************<br>';
/********************************************************** */