<?php
/** 
 *  assign 1
*/
echo round(disk_total_space("C:") / 1024 / 1024 /1024/1024,2) . " Terabyte<br>";
echo round(disk_total_space("D:") / 1024 / 1024 /1024/1024,2) . " Terabyte<br>";
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 2
*/
$vidsize=0;
if(file_exists("C:\Users\win10\Desktop\GoMyCode\khalil-css-cv/Gmc.mp4")){
    $vidsize=filesize("C:\Users\win10\Desktop\GoMyCode\khalil-css-cv/Gmc.mp4");
}
echo "Size In Megabyte Is ". round($vidsize/1024**2) ."<br>";
echo "Size In Kilobyte Is ". round($vidsize/1024) ."<br>";
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 3
*/

if(!file_exists("Programming/PHP")){
    mkdir("Programming/PHP", 0711,True);
}
if(is_dir("Programming/PHP")&&rmdir("Programming/PHP")){
    echo "Directory Programming/PHP Removed<br>";
}
if(is_dir("Programming")&&rmdir("Programming")){
    echo "Directory Programming Removed<br>";
}
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 4
*/
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 5
*/
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 6
*/
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 7
*/
echo '<br>***********************************************<br>';
/********************************************************** */