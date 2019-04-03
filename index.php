
<!doctype html>
<!-- Bruce Turner, IT 328, W2019 -->
<!-- https://bturner.greenriverdev.com/328/index.php -->
<!-- 04-03-19 Rev6.0 -->
<!-- Pair Programming #1 -->
<!-- 1.	Create an index.php file in your pp1 directory and give it a title
        and header “Pair Program 1.”

     2.	Define an array called $numbers, which contains 7, 9, 8, 9, 8, 8, 6.
        Write a function printArr() that takes an array as a parameter and
        prints the array, one item per line.
        Print the array using your function.

    3.	Move your print function into an include file called functions.php.
        Add a function called largest() that takes an array as a parameter and
        returns the largest value in the array.
        Test the function from your index page.

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
        Test the function from your index page.

-->
<!-- -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pair Program 1 with Robert Hill</title>
	    <header>
	      	 <h2>Pair Programming 1 04-03-2019</h2>
        </header>
</head>
<body>

<?php # 1st things first. Let's set up error reporting !
// Flag variable for site status:
define('LIVE', FALSE);
include("includes/functions.php");
// Use my error handler:
set_error_handler('my_error_handler');
// start of the specific code
// 2.	Define an array called $numbers, which contains 7, 9, 8, 9, 8, 8, 6.
$numbers = array(0=>7,1=>9,2=>8,3=>9,4=>8,5=>8,6=>6);
$originalCount = count($numbers);
//      Print the array using your function.
printArr($numbers);
$biggest = largest($numbers);
echo "<br> Largest Value in array: $biggest";
$result = average($numbers);
echo "<br> Average of all Values in array: $result";
$numbersNoDuplicates = removeDups($numbers);
//be cognizant that the number of non-null elements differs is a duplicate
//was found
echo "<br> array with duplicate Values removed follows <br>";
var_dump($numbersNoDuplicates);
/*
$numElNew = count($numbersNoDuplicates);
    for ($i = 0; $i < $originalCount; $i++) {
        if($numbersNoDuplicates[$i] !== null)echo "$numbersNoDuplicates[$i] <br>";
    }
//printArr($numbersNoDuplicates);
*/
echo "<br> associative array with occurances follows <br>";
$foo = distribution($numbers);
print_r($foo);
/*
foreach($foo as $key => $val){
    echo "$key = $val\n";
}
*/
?>

</body>
</html>