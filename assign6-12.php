<?php 
/** 
 *  assign 1
*/
echo (int)(15.2 + 14.7 + (10.5 + 10.5)); // 50
echo '<br>';
echo gettype((int)(15.2 + 14.7 + (10.5 + 10.5))); // Integer
echo '<br>**********************<br>';


/********************************************************** */
/** 
 *  assign 2
*/
echo gettype(100);
echo "<br>";
var_dump(100);
echo "<br>";
echo get_debug_type(100);
echo '<br>**********************<br>';

/*********************************************************** */
/** 
 *  assign 3
*/
echo "Hello \"Elzero\" \\\\ \"\"\" We love \"$\$PHP\"";

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
echo '<br>**********************<br>';

/************************************************************ */
/** 
 *  assign 4
*/
echo nl2br("We \n Love \n Elzero \n Web \n School");

echo '<br>**********************<br>';
/************************************************************ */
/** 
 *  assign 5
*/
echo nl2br(<<<'now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
now);
echo '<br>**********************<br>';
/************************************************************ */
/** 
 *  assign 6
*/
$something = "Programming";

echo <<<code
Hello \PHP\
We Love $something
code;

// [1] Fix The Error(indentation)
// [2] Remove 2 Characters To Get The Output(two single quotes)

// Needed Output
// Hello \PHP\ We Love Programming
echo '<br>**********************<br>';
/************************************************************ */
/** 
 *  assign 7
*/
echo (bool)"Hello PHP";
echo '<br>';
echo gettype((int)"Hello PHP");

echo '<br>**********************<br>';
/************************************************************ */
/** 
 *  assign 8
*/
echo '<pre>';
print_r([
    
    
      "FrontEnd" => [
          "HTML",
           "CSS",
          "JS" => [
            
              "Vuejs" => 
                  ["2" => "v2",
                  "3" => "v3"]
                
    
              , "Reactjs",
              "Svelte"
            ]],
        
    
      "BackEnd" => 
        [
          "PHP",
          "MySQL",
          "Security"
        ]
    
      ,"Git"
      ,"Github"
      ,"Testing" => [
        
           "Unit Testing",
          "End To End",
          "Integration"
        ]
    
]);
echo '</pre>';
echo '<br>**********************<br>';
/************************************************************ */