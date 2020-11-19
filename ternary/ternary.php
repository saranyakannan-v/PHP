<?php
/* 9. Ternary operators
This weird term simply refers to a more terse way to write conditions. A bit like a shortcut notation. Its syntax goes like this :

condition ? value_if_true : value_if_false ;
Example:

$age = 24;
$is_adult = ($age >= 18) ? true : false;
// $is_adult is true
Which is a shorter way to write the following :

$age = 24;
if ($age >= 18)
{
	$is_adult = true;
} else {
	$is_adult = false;
}
// $is_adult is true */

/*
1. In a new file `ternary.php` declare a `$hello` variable which value is a greeting message. 
That greeting message depends on another variable `$gender`, which can either be "M" or "F". Finish by displaying the resulting message.
*/
$gender = 'F'; 
$hello = ($gender == 'M') ? 'Hello Boy' : 'Hello girl'; 
echo $hello; 

?>