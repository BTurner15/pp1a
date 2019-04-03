
/**
 * Created by PhpStorm.
 * User: Dracula
 * Date: 4/3/2019
 * Time: 2:18 PM
 */
<?php # functions.php
/* Bruce Turner, IT 328, S2019 -->
   https://bturner.greenriverdev.com/328/includes/functions.php -->
   04-04-19 Rev.2
   3.	Move your print function into an include file called functions.php.
        Add a function called largest() that takes an array as a parameter and
        returns the largest value in the array.
   4.	In your include file, define a function called average() that takes an
        array as a parameter and returns the average of the values in the
        function.
        Test the function from your index page.
   5.	In your include file, define a function called removeDups() that takes
        an array as a parameter and returns an array with duplicates removed.
        So, given the $numbers array, removeDups() would return [7, 9, 8, 6].
        (Order doesn’t matter.) Test the function from your index page.

   6.	In your include file, define a function called distribution() that takes
        an array as a parameter and returns an associative array with each value
        from the original array, and the number of times that value occurs in the
        original array. The keys should be sorted.
        So, given the $numbers array:  [7, 9, 8, 9, 8, 8, 6]
        distribution() would return [6=>1, 7=>1, 8=>3, 9=>2]
*/
//------------------------------------------------------------------------------
//                          average()
//takes an array as a parameter and returns the average of the values in the
//function.
function average($numbers){
    $numElements = count($numbers);
    $sumOfElements = 0.0;
    for ($i = 0; $i < $numElements; $i++) {
        $sumOfElements += (double)$numbers[$i];
    }
    return round($sumOfElements/(double)$numElements,2);
}// End of average() definition
//------------------------------------------------------------------------------
//                          distribution()
//takes an array as a parameter and returns an associative array with each value
//from the original array, and the number of times that value occurs in the
//original array. The keys should be sorted.
function distribution($numbers){
    $returnArray = array_count_values($numbers);
    //print_r($returnArray);
    /*
    $returnArray2 = asort($returnArray);
    */
    return $returnArray;
}// End of distribution() definition
//------------------------------------------------------------------------------
//                          largest()
// Add a function called largest() that takes an array as a parameter and
// returns the largest value in the array.
function largest($numbers){
    $largestInArray = -1000;
    $numElements = count($numbers);
    for ($i = 0; $i < $numElements; $i++) {
        if($numbers[$i] > $largestInArray) $largestInArray = $numbers[$i];
    }
    return $largestInArray;
}// End of largest() definition.
//------------------------------------------------------------------------------
//                          my_error_handler()
// Create the error handler:
function my_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars) {
    // Build the error message:
    $message = "An error occurred in script '$e_file' on line $e_line: $e_message\n";
    // Append $e_vars to  $message:
    $message .= print_r ($e_vars, 1);
    if (!LIVE) { // Development (print the error).
        echo '<pre>' . $message . "\n";
        debug_print_backtrace();
        echo '</pre><br>';
    } else { // Don't show the error.
        echo '<div class="error">A system error occurred. We apologize for the inconvenience.</div><br>';
    }
}// End of my_error_handler() definition.
//------------------------------------------------------------------------------
//                          printArr()
//takes an array as a parameter and prints the array, one item per line.
function printArr($numbers){
    $numElements = count($numbers);
    for ($i = 0; $i < $numElements; $i++) {
        echo "$numbers[$i] <br>";
    }
}// End of printArr() add idefinition.
//------------------------------------------------------------------------------
//                          removeDups()
//takes an array as a parameter and returns an array with duplicates removed.
function removeDups($numbers){
    $resultOne = array_unique($numbers);
    $resultTwo = array_filter($resultOne);
    return $resultTwo;
}// End of removeDups() definition.
//------------------------------------------------------------------------------
?>