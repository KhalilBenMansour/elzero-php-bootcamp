<?php
/**
 * Using ${var} in strings is deprecated, use {$var} instead
 * You can assign value into double or single quote but when you print use double quotes to read it as variable
 */

/**
 * assign1
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
