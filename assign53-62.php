<?php
/** 
 *  assign 1
*/
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str[(int)$num_two]=$let_two;
$str[$num_one]=$let_one;

echo $str; // Elzero
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 2
*/
$str = "Orezle";
echo ucfirst(strrev(lcfirst($str)));
// Elzero
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 3
*/
$str = 'aAa';
$num = 3;
$char = "_";

echo str_repeat(strtolower(substr_replace($str, $char, $num)),$num);// aaa_aaa_aaa_
echo '<br>';
echo str_repeat(strtolower(chunk_split($str,$num,$char)),$num);// aaa_aaa_aaa_

echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 4
*/
$str = "<div><b>Elzero</b></div>";
echo strip_tags($str, "<b>");// <b>Elzero</b>

echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 5
*/
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, $e, $four)."<br>";// 1
echo substr_count($str, strtolower($o), -$four)."<br>";// 2

echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 6
*/
$chars = ["E", "l", "z", "e", "r", "o"];

 echo implode($chars);// "Elzero"
 echo join($chars);// "Elzero"

echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 7
*/
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

echo ucfirst(strtolower(strtr(implode($chars),[1 => "", 2 => ""])));//"Elzero"
echo ucfirst(strtolower(substr_replace(implode($chars), "", 1, 2)));//"Elzero"
echo ucfirst(strtolower( str_replace([1,2],"",implode($chars))));//"Elzero"
echo '<br>**********************<br>';
/********************************************************** */