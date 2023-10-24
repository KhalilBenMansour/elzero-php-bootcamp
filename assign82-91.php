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
function change_permissions(string $filename){
    if(pathinfo($filename,PATHINFO_EXTENSION)){
        if(pathinfo($filename,PATHINFO_EXTENSION)==="txt"){
            clearstatcache();
            chmod($filename, 0700);
            // Not working for windows because chmod is ignored on windows
            if(substr(sprintf('%o', fileperms($filename)), -4)=="0700"){

            return "Permissions Changed";
            }

        }else{
            return "File Extension Is Not Txt<br>";
        }
    }else{
        return "This Is Directory And Only Files Allowed<br>";
    }
}
// fopen("Result.txt","a");
echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed
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