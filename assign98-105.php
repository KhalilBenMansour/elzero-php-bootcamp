<?php
/** 
 *  assign 1
*/
setcookie("style[layout]","boxed",strtotime("+2 months +5 days"),'/');
setcookie("style[font]","Swat",strtotime("+2 months +5 days"),'/');
setcookie("style[color]","blue",strtotime("+2 months +5 days"),'/');
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 2
*/
echo "<pre>";
  print_r($_COOKIE);
echo "</pre>";
echo "Your Color Is ".$_COOKIE["style"]["color"]." And Your Font Is ".$_COOKIE["style"]["font"];
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 3
*/
setcookie("style[layout]","boxed",time()-1,"/");
echo '<br>***********************************************<br>';
/********************************************************** */
/** 
 *  assign 4
*/
setcookie("style[font]","Swat",0,'/');
setcookie("style[color]","blue",0,'/');
echo '<br>***********************************************<br>';
/********************************************************** */