<?php

//-----Check the content of an array for debugging-----
$countries =  ['Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine']; 
echo '<br>';
// The <pre> tag defines "preformatted text". Text in a <pre> element is displayed in a fixed-width font, and the text preserves both spaces and line breaks. The text will be displayed exactly as written in the HTML source code.
echo '<pre>';
print_r($countries);
echo '</pre>';
// The var_dump() function dumps information about one or more variables. The information holds type and value of the variable(s).
var_dump($countries);
echo '<br>';

//------Retrieve and display an element------
echo $countries[2];
echo '<br>';

//------Add an element-------
$countries[] = 'England';
// or array_push($countries, 'England');
var_dump($countries);
echo '<br>';

//-----Replace the value of a key by another one----

//Say $person describes, Jeanne, a Junior Web Developer :

$person['function'] = 'Junior Web Developer';
echo $person['function'];
// returns 'Junior Web Developer'
// After a few years in the industry, she's promoted to Senior.

$person['function'] = 'Junior Web Developer';
echo '<br>';
$person['function'] = 'Senior Web Developer';
echo $person['function'];
echo '<br>';
// returns 'Senior Web Developer'
// or we can use array_replace() function replaces the values of the first array with the values from following arrays.
$person1 = ['Junior Web Developer'];
$person2 = ['Senior Web Developer'];
print_r(array_replace($person1,$person2));
?>