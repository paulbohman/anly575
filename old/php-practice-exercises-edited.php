<?php


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

$nl = "\n\n";

$top = '<!DOCTYPE html>';
$top .= $nl . '<html lang="en">';
$top .= $nl . '<head>';
$top .= $nl . '<title>Practice PHP Page</title>';
$top .= $nl . '</head>';
$top .= $nl . '<body>';

$bottom = $nl . '</body>';
$bottom .= $nl . '</html>';

echo $top;

$var1 = null;
echo $nl . '<p>Task 1.1:</p>';
echo $nl . 'oh ' . $var1 . ' hello';

/*
1.2 Set a variable to an empty string.
*/

$var2 = '';
echo $nl . '<p>Task 1.2:</p>';
echo $nl . '<p>' . $var2 . '</p>';

/*
1.3 Set variable to a string of text.
*/

$var3 = 'some text';
echo $nl . '<p>Task 1.3:</p>';
echo $nl . '<p>' . $var3 . '</p>';

/* 
1.4 Set a variable to an integer.
*/

$var4 = 4;
echo $nl . '<p>Task 1.4:</p>';
echo $nl . '<p>' . $var4 . '</p>';

/*
1.5 Set a variable to a numeric string.
*/

$var5 = '5';
echo $nl . '<p>Task 1.5:</p>';
echo $nl . '<p>' . $var5 . '</p>';

/*
1.6 Set one of the variables above to a new value. (Redefine the value of a the variable.)
*/

$var5 = 5;
echo $nl . '<p>Task 1.6:</p>';
echo $nl . '<p>' . $var5 . '</p>';

/*
1.7 Set a variable to a string that starts with multiple spaces and ends with multiple spaces
*/

$var6 = '   hello   ';
echo $nl . '<p>Task 1.7:</p>';
echo $nl . '<p>' . $var6 . '</p>';

/*
1.8 Use the trim() function to strip the spaces from the above variable.
*/

$var6 = trim($var6);
echo $nl . '<p>Task 1.8:</p>';
echo $nl . '<p>' . $var6 . '</p>';

/*
1.9 Set a new variable as the concatonation (combination) of two of the above string variables.
*/

$var7 = $var1 . $var2;
echo $nl . '<p>Task 1.9:</p>';
echo $nl . '<p>' . $var7 . '</p>';

/*
1.10 Set a string variable using double quotes, with one of the above variables inside.
*/

$var8 = "This is a string with a variable value ($var6) inside";
echo $nl . '<p>Task 1.10:</p>';
echo $nl . '<p>' . $var8 . '</p>';

/* 
1.11 Set a variable that concatonates a string in single quotes and a string in double quotes.
*/

$var9 = 'string1 ' . "string2";
echo $nl . '<p>Task 1.11:</p>';
echo $nl . '<p>' . $var9 . '</p>';

/*
1.12 Set a string variable with double quotes and escaped double quotes inside of it.
*/

$var10 = "This string has \"quotes\" inside of quotes";
echo $nl . '<p>Task 1.12:</p>';
echo $nl . '<p>' . $var10 . '</p>';

/*
1.13 Echo one of the above variables to the web page, followed by an HTML break tag.
*/

echo $var10 . '<br>';
echo $nl . '<p>Task 1.13:</p>';
echo $nl . '<p>' . $var10 . '</p>';

/*
1.14 Replace characters within the above variable with other characters, and echo the new value to the web page, followed by an HTML break tag.
*/

$var11 = str_replace('string', 'selection of text', $var10);
echo $nl . '<p>Task 1.14:</p>';
echo $nl . $var11 . '<br>';

/*
1.15 Set a string variable with some HTML tags in it, and echo it to the web page, followed by an HTML break tag.
*/

$var12 = '<h2>This is a heading level 2</h2> <br>';
echo $nl . '<p>Task 1.15:</p>';
echo $nl . $var12;

/* 
1.16 Use strip_tags() on the above variable and echo it to the web page again, followed by an HTML break tag.
*/
echo $nl . '<p>Task 1.16:</p>';
echo $nl . (strip_tags($var12)) . '<br>';

/* 
1.17 Set a variable in single quotes that includes the following inside: double quotes, an ampersand, less than, greater than.
*/

$var13 = 'This string of text has "double quotes" and an ampersand & and less than < and greater than >';
echo $nl . '<p>Task 1.17:</p>';
echo $nl . '<p>' . $var13 . '</p>';

/* 
1.18 Use htmlentities() on the above variable, and echo it to the web page, followed by an HTML break tag,
THEN view the source code of the page in a browser and 
THEN create a multi-line PHP comment in this file
THEN copy and paste the exact text of that variable as it appears in the HTML source code.
*/
$var14 = htmlentities($var13);
echo $nl . '<p>Task 1.18:</p>';
echo $nl . '<p>' . $var14 . '</p>';

/* 
1.19 Write a single line PHP comment.
*/

// this is a single line comment

/* 
1.20 Use PHP to get the current date and time, and echo it to the web page in this format: YYYY-MM-DD HH:MM:SS where HH is 24 hour time (not 12 hours).
*/
date_default_timezone_set("America/New_York");
$var15 = date('Y-m-d H:i:s');
echo $nl . '<p>Task 1.20:</p>';
echo $nl . '<p>' . $var15 . '</p>';


/*
TOPIC 2: ARRAYS
*/

/*
2.1 Declare variable as an empty array.
*/

$array1 = array(); // or $array1 = [];
echo $nl . '<p>Task 2.1:</p>';
echo $nl . '<pre>' . print_r($array1, true) . '</pre>';


/* 
2.2 Add five values, one at a time, to the above array (as a simple array)
*/

$array1[] = 'apple';
$array1[] = 'orange';
$array1[] = 'banana';
$array1[] = 'kiwi';
$array1[] = 'grape';

echo $nl . '<p>Task 2.2:</p>';
echo $nl . '<pre>' . print_r($array1, true) . '</pre>';

/*
2.3 Create a simple array with 5 values already in the array when you declare it.
*/

$array2 = array('grapefruit','plum','nectarine','strawberry','blackberry');
echo $nl . '<p>Task 2.3:</p>';
echo $nl . '<pre>' . print_r($array2, true) . '</pre>';

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
echo $nl . '<p>Task 2.6:</p>';
echo $nl . '<pre>' . print_r($array3, true) . '</pre>';

/*
2.7 Use print_r() surrounded by <pre> tags on the combined array.
*/

/*
2.8 Sort the combined array alphabetically and use print_r() surrounded by <pre> tags on the array.
*/

sort($array3);
echo $nl . '<p>Task 2.8:</p>';
echo $nl . '<pre>' . print_r($array3, true) . '</pre>';

/*
2.9 Sort the combined array in reverse alphabetical order and use print_r() surrounded by <pre> tags on the array.
*/

rsort($array3);
echo $nl . '<p>Task 2.9:</p>';
echo $nl . '<pre>' . print_r($array3, true) . '</pre>';

/*
2.10 Set a new variable to the resulting value of using implode() on the combined array, 
with a space as the separator, and echo the result to the web page,
THEN paste the result into an HTML comment.
*/

$var20 = implode(' ' , $array3);
echo $nl . '<p>Task 2.10:</p>';
echo $nl . '<p>' . $var20 . '</p>';
echo $nl . '<!-- ' . $var20 . ' -->';

/* 
2.11 Use a built-in PHP function to count the total number of items in the array.
*/

$var21 = count($array3);
echo $nl . '<p>Task 2.11:</p>';
echo $nl . '<p>' . $var21 . '</p>';

/*
2.12 Echo the second item in the array, using the numeric key of the array.
*/

echo $nl . '<p>Task 2.12:</p>';
echo $nl . '<p>' . $array3[1] . '</p>';

/*
2.13 Create a multi-dimensional array of 5 key/value pairs.
*/

$array4 = [
	'California' => 'Sacramento',
	'Virginia' => 'Richmond',
	'Maryland' => 'Annapolis',
	'Delaware' => 'Dover',
	'New York' => 'Albany'
];

echo $nl . '<p>Task 2.13:</p>';
echo $nl . '<pre>' . print_r($array4, true) . '</pre>';

/*
2.14 Use a built-in PHP function to sort this array by the keys, and use print_r() surrounded by <pre> tags on the array.
*/

ksort($array4);
echo $nl . '<p>Task 2.13:</p>';
echo $nl . '<pre>' . print_r($array4, true) . '</pre>';

/*
2.14 Use a built-in PHP function to sort this array by the values, and use print_r() surrounded by <pre> tags on the array.
*/

asort($array4);
echo $nl . '<p>Task 2.13:</p>';
echo $nl . '<pre>' . print_r($array4, true) . '</pre>';

/*
2.15 Add another key/value pair to this array, then sort it again by the keys, and use print_r() surrounded by <pre> tags on the array.
*/

$array4['Idaho'] = 'Boise';

ksort($array4);
echo $nl . '<p>Task 2.13:</p>';
echo $nl . '<pre>' . print_r($array4, true) . '</pre>';


/*
TOPIC 3: CONDITIONAL LOGIC
*/


/*
3.1 Write a simple if/else test to see if a variable contains any value, and echo the result to the web page.
*/

$var30 = 'This is a random sentence.';
echo $nl . '<p>Task 3.1</p>';
if ($var30) {
	echo $nl . '<p>The variable contains a value.</p>';
} else {
	echo $nl . '<p>The variable contains a value.</p>';
}

/* 
3.2 Write an if/else test with 4 possibilities. For example, if it is equal to x, y, or z (you can choose what values to test for), else default,
and echo the result to the web page.
*/

$var31 = 59;
echo $nl . '<p>Task 3.1</p>';
if (1 == $var31) {
	echo $nl . '<p>The value is 1</p>';
} elseif (3 == $var31) {
	echo $nl . '<p>The value is 3</p>';
} elseif (5 == $var31) {
	echo $nl . '<p>The value is 5</p>';
} else {
	echo $nl . '<p>The value is not equal to any of the pre-defined values.</p>';
}



/*
3.3 Write a test for the exact same conditions as above, but use switch/case syntax, and echo the result to the web page.
*/

/*
3.4 Write an if/else test in which two conditions must both be true, and echo the result to the web page.
*/

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

$ul = $nl . '<ul>';
foreach ($array3 as $k => $v) {
	$ul .= '<li>' . $v . '</li>';
}
$ul .= '</ul>';
echo $nl . '<p>Task 5.3</p>';
echo $nl . $ul;

/*
5.4 Write a foreach() loop to echo the key/value pairs of a multidimensional array (you can use one of your multidimensional arrays above).
*/

$ul2 = $nl . '<ul>';
foreach ($array4 as $k => $v) {
	$ul2 .= '<li>' . $k . ': ' . $v . '</li>';
}
$ul2 .= '</ul>';
echo $nl . '<p>Task 5.4</p>';
echo $nl . $ul2;

/*
5.5 Write a foreach() loop to find out if a multidimensional array contains a particular KEY, and echo the result to the web page.
*/
$keySearch = 'Nebraska';
echo $nl . '<p>Task 5.5</p>';
if (array_key_exists($keySearch, $array4)) {
	echo $nl . '<p>' . $keySearch . ' is one of the array keys</p>';
} else {
	echo $nl . '<p>' . $keySearch . ' is NOT one of the array keys</p>';
}

/*
5.6 Write a foreach() loop to find out if a multidimensional array contains a particular VALUE, and echo the result to the web page.
*/

$valueSearch = 'Boise';
echo $nl . '<p>Task 5.6</p>';
if (in_array($valueSearch, $array4)) {
	echo $nl . '<p>' . $valueSearch . ' is one of the array values</p>';
} else {
	echo $nl . '<p>' . $valueSearch . ' is NOT one of the array values</p>';
}

/*
TOPIC 6: FUNCTIONS
*/

/*
6.6 Write a function to do the task in exercise 5.5 above, and send an array into that function, 
plus the value to check for (2 parameters in total), and echo the result to the web page.
You don't have to write new logic here. Just take the same logic as in 5.5. and wrap it in a function.
*/


function checkArrayKey($keySearch, $array) {
	$nl = "\r\r";
	if (array_key_exists($keySearch, $array)) {
		return $nl . '<p>' . $keySearch . ' is one of the array keys</p>';
	} else {
		return $nl . '<p>' . $keySearch . ' is NOT one of the array keys</p>';
	}
}

echo $nl . '<p>Task 6.6</p>';
$output = checkArrayKey('North Carolina', $array4);
$output .= checkArrayKey('South Carolina', $array4);
$output .= checkArrayKey('California', $array4);
$output .= checkArrayKey('New York', $array4);
echo $output;

/*
6.7 Create another function that can check either the key or the value (the logic from 5.5. and 5.6 above). To call this function,
you want to send three parameters to it:
1. an array
2. the value you want to find
3. whether to search for it in the key or in the value of the array's key/value pairs.
*/

echo $bottom;
