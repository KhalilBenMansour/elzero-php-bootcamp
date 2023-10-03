<!-- assign1 --> 
<?php
/*
This is multiple line
-I should use the end tag of php to read correctly the comment and don't mixed with html tags
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset=<?php echo "UTF-8";?>>
     
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        
    <?= 'My First PHP Page '/*= is shortcut for php echo */; ?>
    </title>
  </head>
  <body>
    <div>
        <?php echo "We Love"?>
    </div>
    <div>
        <?= "Elzero Channel"?>
    </div>
  </body>
</html>

<!-- assing 2 -->
<?php
// echo 'Prevent Me From Running Please';
# echo 'Prevent Me From Running Please';
/* echo 'Prevent Me From Running Please'*/;
?>

<!-- assign 3 -->
<?php
/*
 My Application
 Version 1.0
 Created By Elzero
 */
?>

<!-- assign 4 -->
<?php
// ## First Comment
# // # Second Comment
/* /* /* Third Comment */
////// Fourth Comment

/*
all comments above are correctly 
*/
?>


