<?php
/** 
 *  assign 1
*/
$a = 100;
$b = 200;
$c = 100;

/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/

if($a<$b):
    if($a===$c):
        if($a+$c===$b):
            echo "Yes";
        endif;
    endif;
endif;
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 2
*/
$a = 200;
$b = 200;
$c = 100;
if($a>$b){
    echo "A Is Larger Than B";
}elseif($a>$c){
    echo "A Is Larger Than C";
}else{
    echo "A Is Not Larger Than B Or C";
}
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 3
*/
?>
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
<?php
$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    echo "The Request Method Is Post And Username Is ". $_POST['user'] ."<br>";
    if($_POST["user"]=== $admins[0]||$_POST["user"]=== $admins[1]||$_POST["user"]=== $admins[2]){
        echo "This Username {$_POST["user"]} Is Admin";
    }
}
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 4
*/
$a = 30;
$b = 20;
$c = 10;

echo($a + $b === $c) ? "A + B = C":(($a + $c === $b)?"A + C = B":(($b + $c === $a) ? "B + C = A":"The End"));

// Output
// "B + C = A"

echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 5
*/
$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) echo "The Age Is Good To Go<br>"; if (gettype($name) === "string") echo "The Name Is Good To Go<br>"; if ($country === "Egypt")   echo "The Country Is Good To Go<br>";
    

// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 6
*/
$genre = "Hack And Slash";

switch ($genre) {
case "RPG":
    echo "I Recommend Ys Games";
    break;
case"Hack And Slash":
  echo "I Recommend Castlevania Games";
  break;
case "FPS":
  echo "I Recommend Uncharted Games";
  break;
case "Platform":
  echo "I Recommend Megaman Games";
  break;
case"Puzzle":
  echo "I Recommend Megaman Games";
  break;
default: 
  echo "I Recommend Shadow Of Mordor And Shadow Of War";
}

// Needed Output
// "I Recommend Castlevania Games"
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 7
*/
$num_one = 23;
$num_two = 5;
$op = "/";
switch ($op) {
    case "+":
        echo $num_one + $num_two;
        break;
    case"-":
      echo $num_one - $num_two;
      break;
    case "*":
        echo $num_one * $num_two;
      break;
    case "/":
        echo (int)($num_one / $num_two);
        echo "<br>";
        echo $num_one % $num_two;
      break;
    default: 
      echo "Unkown Operation";
    }
echo '<br>**********************<br>';
/********************************************************** */
/** 
 *  assign 8
*/
$day = "Sat";

if($day==="Sat"||$day==="Sun"||$day==="Mon") 
    echo "We Are Open All The Day";
elseif($day==="Tue"||$day==="Wed")
    echo "We Are Open From 08:12";
elseif($day==="Thu"||$day==="Fri")
    echo "We Are Closed";
else
    echo "Unknown Day";


echo '<br>**********************<br>';
/********************************************************** */