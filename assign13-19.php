<?php
/**
 * Using ${var} in strings is deprecated, use {$var} instead
 * You can assign value into double or single quote but when you print use double quotes to read it as variable
 */

/**
 * assign 1
 * you can use content=<?php echo "'$subject'" ?> or content="<?php echo $name; ?>"
 */

$subject="Elzero Courses";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php echo "'$subject'" ?>> 
    <title>Welcome To <?php echo $subject?></title>
  </head>
  <body>
    <h1><?php echo $subject?></h1>
    <p>Here In <?php echo $subject?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $subject?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $subject?></footer>
  </body>
</html>
<?php
echo '<br>**********************<br>';

/*********************************************************** */
/**
 * assign 2
 */
$name = "elzero";
$$name = "Web";
echo $$name;
echo $elzero;
echo "{$$name}";
echo "$elzero";
echo <<<"task"
$elzero
task ;
echo <<<"task"
{$$name}
task ;

echo '<br>**********************<br>';

/*********************************************************** */
/**
 * assign 3
 */
$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100
echo '<br>**********************<br>';
/*********************************************************** */
/**
 * assign 4
 */
echo '<pre>';
echo  $_SERVER["DOCUMENT_ROOT"];
echo '<br>';
echo  $_SERVER["SERVER_NAME"];
echo '<br>';
echo  $_SERVER["SystemRoot"];
echo '<br>';
echo  $_SERVER["OPENSSL_CONF"];
echo '</pre>';
echo '<br>**********************<br>';
/*********************************************************** */
/**
 * assign 5
 */
/* 10 reserved keywords in PHP
clone
break
function
final
include
switch
use
const 
require
public
*/
echo '<br>**********************<br>';
/*********************************************************** */
/**
 * assign 6
 */
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo '<br>**********************<br>';
/*********************************************************** */