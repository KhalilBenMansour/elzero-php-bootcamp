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
echo basename(__FILE__)."<br>";
echo pathinfo(__FILE__, PATHINFO_BASENAME)."<br>";
echo pathinfo(__FILE__)["basename"]."<br>";
echo pathinfo(__FILE__, PATHINFO_FILENAME).".".pathinfo(__FILE__, PATHINFO_EXTENSION)."<br>";
echo glob("*.*")[9]."<br>";
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 6
*/
$handle = fopen("elzero.txt", "r");
//1
echo fgets($handle). fgets($handle)."<br>";
rewind($handle);
//2
echo fread($handle, 26)."<br>";
fseek($handle,0);
//3
while (ftell($handle) <=18) {
    echo fgets($handle);
  }
echo "<br>";
rewind($handle);
//4
for($i=0;$i<2;$i++){
    echo fgets($handle);
}
echo"<br>";
rewind($handle);
//5
echo file_get_contents("elzero.txt", true, NULL, 0, 26)."<br>";

fclose($handle);
// echo mb_strlen("Hello Elzero Web\r\nSchool");
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 7
*/
$str= str_replace("Osamaa","Elzero",file_get_contents("elzeroo.txt"));
file_put_contents("elzeroo.txt",$str);
echo '<br>***********************************************<br>';
/********************************************************** */