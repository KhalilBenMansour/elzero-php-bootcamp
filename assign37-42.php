<?php
/** 
 *  assign 1
*/
$index = 10;
for(;$index>=1;$index--){
    echo "$index<br>";
}
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 2
*/

//While
$index = 0;
while($index<20){
    $index+=2;
    echo $index . "<br>";
}
//For
$index = 0;
for(;$index<20;){
    $index+=2;
    echo $index . "<br>";
}
//Do While
$index = 0;
do{
    $index+=2;
    echo $index . "<br>";
}while($index<20);
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 3
*/
$num = 2;
$i=3;
while ($num < 520) {
    echo $num-1 . '<br>';
    $num+=$i;
    $i*=2;
}
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 4
*/
$start = 10;
$end = 0;
$stop = 3;
for($i=$start;$i>=$stop;$i--){
    echo $i<$start?"$end$i<br>":"$i<br>";
}
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 5
*/
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for($i=$start;$i<count($mix);$i++){
    if($i===$start){
        continue;
    }
    if(gettype($mix[$i])==="integer"){
        echo $mix[$i]."<br>";
    }
}
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 6
*/
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
foreach($money as $name=>$amount){
    echo "The Name Is $name And I Need $amount Pound From Him<br>";
}

echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 7
*/
$mix = [1, 2, "A", "B", "C", 3, 4];
$numbers_count=0;
$letters_count=0;
for($i=0;$i<count($mix);$i++){
    if(gettype($mix[$i])==="integer"){
        $numbers_count++;
        echo $mix[$i]."<br>";
    }else{
        $letters_count++;
    }
}
echo "$numbers_count Numbers Printed<br>";
echo "$letters_count Letters Ignored<br>";
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 8
*/
$nums = [1, 13, 12, 20, 51, 17, 30];
$i=0;
while($i < count($nums) ){
    if($nums[$i] % 2 === 0){

        echo $nums[$i]/2 . "<br>";
    }
    $i++;
}
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 9
*/
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
for($i=$nums[$help_num];$i<$help_num;$i++){
    echo $names[$i] . "<br>";
}
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 10
*/
$help_num = 4;
$nums = [2, 4, 5, 6, 10];
foreach($nums as $key=>$value){
    echo $nums[$key]."+". $nums[$help_num-$key]. "=".$nums[$key] + $nums[$help_num-$key] . "<br>";
}
echo '<br>**********************<br>';
/********************************************************** */