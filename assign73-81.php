<?php
/** 
 *  assign 1
*/
echo rand(11,19);
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 2
*/
$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

echo $friends[rand(0,count($friends)-1)];
echo '<br>**********************************************<br>';
/********************************************************** */
/** 
 *  assign 3
*/
$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo  round($num1,0,PHP_ROUND_HALF_DOWN)."<br>";
echo  round($num2,1)."<br>";
echo  round($num3,0,PHP_ROUND_HALF_DOWN)."<br>";
echo '<br>**********************************************<br>';
/********************************************************** */
/** 
 *  assign 4
*/
// method 1
// $keys=[];
// foreach(filter_list()as $item){
//     $keys[]=filter_id($item);
// }
// $arr=array_combine($keys,filter_list());
// method 2
$arr=[];
foreach(filter_list()as $item){
    $arr[filter_id($item)]=$item;
}
echo "<pre>";
print_r($arr);
echo "</pre>";
echo '<br>**********************************************<br>';
/********************************************************** */
/** 
 *  assign 5
*/
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo (filter_var($url1, FILTER_VALIDATE_URL)?"A Valid URL":"Not A Valid URL")."<br>";
echo (filter_var($url2, FILTER_VALIDATE_URL)?"A Valid URL":"Not A Valid URL")."<br>";
echo (filter_var($url3, FILTER_VALIDATE_URL)?"A Valid URL":"Not A Valid URL")."<br>";
echo (filter_var($url4, FILTER_VALIDATE_URL)?"A Valid URL":"Not A Valid URL")."<br>";
// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"
echo '<br>**********************************************<br>';
/********************************************************** */
/** 
 *  assign 6
*/
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1,FILTER_SANITIZE_URL)."<br>";
echo filter_var($url2,FILTER_SANITIZE_URL)."<br>";
echo filter_var($url3,FILTER_SANITIZE_URL)."<br>";
echo filter_var($url4,FILTER_SANITIZE_URL)."<br>";
// Output
// http://www.elzero.org
// http://elzero.org
// https://elzero.org
// https://elzero.org
echo '<br>**********************************************<br>';
/********************************************************** */