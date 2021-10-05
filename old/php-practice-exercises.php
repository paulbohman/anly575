<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice Page</title>
</head>
<body>

<?php


$nl = "\r\r";

/*
NOTE: in all cases where the exercise asks you to echo or print the result to the web page,
please precede the value with the exercise number, and put a line break <br> at the end
(or enclose the whole thing in paragraphs, or in a <div>, if appropriate)
to separate the values visually on the web page.

Example:

echo '4.1 ' . $myVariable . '<br>';

or:

echo '<p>4.1 ' . $myVariable . '</p>';

or:

echo '<div>4.1 ' . $myVariable . '</div>';

*/



/*
TOPIC 1: THE BASICS -- VARIABLES, STRINGS, COMMENTS
*/

/*
1.1 Declare a variable without setting a value for that variable.
*/

$var1 = null;
echo $nl . '<p>Task 1.1</p>';
echo $nl . '<p>The value is: ' . $var1 . '</p>';

/*
1.2 Set a variable to an empty string.
*/

$var2 = '';
echo $nl . '<p>Task 1.2</p>';
echo $nl . '<p>The value is: ' . $var2 . '</p>';

/*
1.3 Set variable to a string of text.
*/

$var3 = 'This is text';
echo $nl . '<p>Task 1.3</p>';
echo $nl . '<p>The value is: ' . $var3 . '</p>';

/* 
1.4 Set a variable to an integer.
*/

$var4 = 6;
echo $nl . '<p>Task 1.4</p>';
echo $nl . '<p>The value is: ' . $var4 . '</p>';

/*
1.5 Set a variable to a numeric string.
*/

$var5 = '46';
echo $nl . '<p>Task 1.5</p>';
echo $nl . '<p>The value is: ' . $var5 . '</p>';

/*
1.6 Set one of the variables above to a new value. (Redefine the value of a the variable.)
*/

$var3 = 'the new value';
echo $nl . '<p>Task 1.6</p>';
echo $nl . '<p>The value is: ' . $var3 . '</p>';

/*
1.7 Set a variable to a string that starts with multiple spaces and ends with multiple spaces
*/

$var6 = '       This text has spaces on both sides       ';
echo $nl . '<p>Task 1.7</p>';
echo $nl . '<p>The value is: ' . $var6 . '</p>';

/*
1.8 Use the trim() function to strip the spaces from the above variable.
*/

$var7 = trim($var6);
echo $nl . '<p>Task 1.8</p>';
echo $nl . '<p>The value is: ' . $var7 . '</p>';

/*
1.9 Set a new variable as the concatonation (combination) of two of the above string variables.
*/

$var8 = $var3 . ' ' . $var5;
echo $nl . '<p>Task 1.9</p>';
echo $nl . '<p>The value is: ' . $var8 . '</p>';

/*
1.10 Set a string variable using double quotes, with one of the above variables inside.
*/


echo $nl . '<p>Task 1.10</p>';
echo $nl . "<p>The value is: $var8 </p>";

/* 
1.11 Set a variable that concatonates a string in single quotes and a string in double quotes.
*/

/*
1.12 Set a string variable with double quotes and escaped double quotes inside of it.
*/

/*
1.13 Echo one of the above variables to the web page, followed by an HTML break tag.
*/

/*
1.14 Replace characters within the above variable with other characters, and echo the new value to the web page, followed by an HTML break tag.
*/

echo $nl . '<p>Task 1.14</p>';
echo str_replace('value', 'George', $var8);


/*
1.15 Set a string variable with some HTML tags in it, and echo it to the web page, followed by an HTML break tag.
*/

$var9 = '<h2>Whatever</h2><br>';
echo $nl . '<p>Task 1.15</p>';
echo $nl . $var9;

/* 
1.16 Use strip_tags() on the above variable and echo it to the web page again, followed by an HTML break tag.
*/

/* 
1.17 Set a variable in single quotes that includes the following inside: double quotes, an ampersand, less than, greater than.
*/

/* 
1.18 Use htmlentities() on the above variable, and echo it to the web page, followed by an HTML break tag,
THEN view the source code of the page in a browser and 
THEN create a multi-line PHP comment in this file
THEN copy and paste the exact text of that variable as it appears in the HTML source code.
*/

/* 
1.19 Write a single line PHP comment.
*/

// This is my single line comment

/* 
1.20 Use PHP to get the current date and time, and echo it to the web page in this format: YYYY-MM-DD HH:MM:SS where HH is 24 hour time (not 12 hours).
*/

echo $nl . '<p>Task 1.20</p>';
$var10 = date("Y-m-d");
echo $nl . '<p>' . $var10 . '</p>';
// this is unfinished


/*
TOPIC 2: ARRAYS
*/

/*
2.1 Declare variable as an empty array.
*/

$array1 = array();
echo $nl . '<p>Task 2.1</p>';
echo '<pre>' . print_r($array1, true) . '</pre>';

/* 
2.2 Add five values, one at a time, to the above array (as a simple array)
*/

$array1[] = 'banana';
$array1[] = 'orange';
$array1[] = 'apple';
$array1[] = 'strawberry';
$array1[] = 'blueberry';

echo $nl . '<p>Task 2.2</p>';
echo '<pre>' . print_r($array1, true) . '</pre>';


/*
2.3 Create a simple array with 5 values already in the array when you declare it.
*/

$array2 = array('pumpkin','blackberry','pear','mango');

echo $nl . '<p>Task 2.3</p>';
echo '<pre>' . print_r($array2, true) . '</pre>';

/*
2.4 Use print_r() on one of the arrays above
*/

/*
2.5 Use print_r() surrounded by <pre> tags on one of the arrays above.
*/

/*
2.6 Combine the two arrays into one array.
*/

$array3 = array_merge($array1, $array2);
echo $nl . '<p>Task 2.3</p>';
echo '<pre>' . print_r($array3, true) . '</pre>';

/*
2.7 Use print_r() surrounded by <pre> tags on the combined array.
*/

/*
2.8 Sort the combined array alphabetically and use print_r() surrounded by <pre> tags on the array.
*/


sort($array3);
echo $nl . '<p>Task 2.8</p>';
echo '<pre>' . print_r($array3, true) . '</pre>';

/*
2.9 Sort the combined array in reverse alphabetical order and use print_r() surrounded by <pre> tags on the array.
*/

/*
2.10 Set a new variable to the resulting value of using implode() on the combined array, 
with a space as a separator, and echo the result to the web page,
THEN paste the result into an HTML comment.
*/

$var20 = implode(', ', $array3);
echo $nl . '<p>Task 2.10</p>';
echo $nl . '<p>' . $var20 . '</p>';

/* 
2.11 Use a built-in PHP function to count the total number of items in the array.
*/

/*
2.12 Echo the second item in the array, using the numeric key of the array.
*/

/*
2.13 Create a multi-dimensional array of 5 key/value pairs.
*/

$array4 = [
	'California' => 'Sacramento',
	'Virginia' => 'Richmond',
	'Maryland' => 'Annapolis',
	'New York' => 'Albany',
	'New Jersey' => 'Trenton'
];

echo $nl . '<p>Task 2.13</p>';
echo '<pre>' . print_r($array4, true) . '</pre>';

/*
2.14 Use a built-in PHP function to sort this array by the keys, and use print_r() surrounded by <pre> tags on the array.
*/

/*
2.14 Use a built-in PHP function to sort this array by the values, and use print_r() surrounded by <pre> tags on the array.
*/

/*
2.15 Add another key/value pair to this array, then sort it again by the keys, and use print_r() surrounded by <pre> tags on the array.
*/

$array4['Texas'] = 'Austin';
echo $nl . '<p>Task 2.15</p>';
echo '<pre>' . print_r($array4, true) . '</pre>';



/*
TOPIC 3: CONDITIONAL LOGIC
*/


/*
3.1 Write a simple if/else test to see if a variable contains any value, and echo the result to the web page.
*/
echo $nl . '<p>Task 3.1</p>';
$var30 = 'pumpkin';
if ($var30) {
	echo $nl . '<p>The variable has a value, which is: ' . $var30 . '</p>';
} else {
	echo $nl . '<p>The variable has NO value</p>';
}

/* 
3.2 Write an if/else test with 4 possibilities. For example, if it is equal to x, y, or z (you can choose what values to test for), else default,
and echo the result to the web page.
*/

echo $nl . '<p>Task 3.2</p>';
if ($var30 == 'pumpkin') {
	echo $nl . '<p>The variable is "pumpkin"</p>';
} elseif ($var30 == 5) {
	echo $nl . '<p>The variable is "5"</p>';
} elseif ($var30 == 'Sacramento') {
	echo $nl . '<p>The variable is "Sacramento"</p>';
} elseif ($var30 == 'hello world') {
	echo $nl . '<p>The variable is "hello world"</p>';
} elseif ($var30 == 'universe') {
	echo $nl . '<p>The variable is "universe"</p>';
} else {
	echo $nl . '<p>The variable did not match any of our conditions</p>';
}

/*
3.3 Write a test for the exact same conditions as above, but use switch/case syntax, and echo the result to the web page.
*/

/*
3.4 Write an if/else test in which two conditions must both be true, and echo the result to the web page.
*/

$var31 = 'California';
$var32 = 5;
if ( (is_int($var31)) && (is_int($var32)) ) {
	echo $nl . '<p>Both conditions are true</p>';
} else {
	echo $nl . '<p>At least one of the conditions is false.</p>';
}

/* 
3.5 Write an if/else test in which either one condition or the other must be true, and echo the result to the web page.
*/

/*
3.6 Write an if/else test in which either two conditions must both be true or another condition must be true, and echo the result to the web page.
*/

/*
3.7 Write an if/else test using the not operator (the exclamation mark), and echo the result to the web page.
*/

/*
3.8 Write an if/else test to find out if the first character of a string is the letter "A", and echo the result to the web page.
*/

/* 
3.9 Write an if/else test to find out if a variable value is an integer, or an array, or if neither, and echo the result to the web page.
*/

/*
3.10 Write an if/else test to find out if a simple array contains a particular value 
(you can use one of your simple arrays that you created earlier in this file), and echo the result to the web page.
*/

/*
3.11 Use the null coalescing operator to set the value of a variable to either:
1. the value of another variable, if it is not empty, or
2. a default value
and echo the resulting value of the variable to the web page.
*/



/*
TOPIC 4: MATH CALCULATIONS
*/

/*
4.1 Create two variables as integers, then create a third variable as the sum of the first two, and echo the result to the web page.
*/

/*
4.2 Create another variable as the product (multiplied value) of the two variables, and echo the result to the web page.
*/

/*
4.3 Create another variable as the quotient (divided by) of the two variables, and echo the result to the web page.
*/





/*
TOPIC 5: LOOPS
*/

/*
5.1 Write a for() loop to echo each value of a simple array (you can use one of your arrays above), with each item on its own line on the web page.
*/

/*
5.2 Write a while() loop to do the same task as above.
*/

/*
5.3 Write a foreach() loop to do the same task as above.
*/




/*
5.4 Write a foreach() loop to echo the key/value pairs of a multidimensional array (you can use one of your multidimensional arrays above).
*/

/*
5.5 Write a foreach() loop to find out if a multidimensional array contains a particular KEY, and echo the result to the web page.
*/

/*
5.6 Write a foreach() loop to find out if a multidimensional array contains a particular VALUE, and echo the result to the web page.
*/

/*
echo '<table><caption>State capitals</caption><thead><tr><th scope="col">State</th><th scope="col">Capital</th></tr></thead><tbody>';
foreach($array4 as $key => $value) {
	echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
}
echo '</tbody></table>';
*/

/*
TOPIC 6: FUNCTIONS
*/

/*
6.6 Write a function to do the task in exercise 5.5 above, and send an array into that function, 
plus the value to check for (2 parameters in total), and echo the result to the web page.
You don't have to write new logic here. Just take the same logic as in 5.5. and wrap it in a function.
*/

function arrayToTable($array) {
	$output = '';
	$output .= '<table><caption>State capitals</caption><thead><tr><th scope="col">State</th><th scope="col">Capital</th></tr></thead><tbody>';
	foreach($array as $key => $value) {
		$output .= '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
		//echo '<br>'.$key.$value;
	}
	$output .= '</tbody></table>';
	return $output;
}

echo arrayToTable($array4);
echo arrayToTable($array1);
echo arrayToTable($array3);

/*
6.7 Create another function that can check either the key or the value (the logic from 5.5. and 5.6 above). To call this function,
you want to send three parameters to it:
1. an array
2. the value you want to find
3. whether to search for it in the key or in the value of the array's key/value pairs.
*/

?>

</body>
</html>