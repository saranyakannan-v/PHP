<?php
/*---------------PHP functions------------

A function is a block of statements that can be used repeatedly in a program.
A function will not execute automatically when a page loads.
A function will be executed by a call to the function.

A user-defined function declaration starts with the word function:

function functionName() {
  code to be executed;
}
*/
// Now, look at this code. It does exactly the same, but the code to be repeated is aliased into a function:

//First, you need to declare the function to make it available. It is stored in memory, not ran.
/*function say_hello($firstname){
	echo "<p>Hello $firstname!</p>";
	echo '<hr>';
}

// Function calls during "Runtime" :
say_hello("Maurice");
say_hello("Alice");
say_hello("Jésus");
say_hello("Judas");*/

/*  ---------------- -----------------

function make_orange_juice($oranges){
	// do things to $input, for example : capitalize it
	$juice = squash($oranges);
	//then return it to get it out of the factory
	return $juice;
}

function is a keyword that tells PHP you want to declare a function.
make_orange_juice is the function name. Choose a name that make it clear what it does.
$oranges is called an argument. It can be whatever you want.
return stops the function processing and makes available the result outside the factory. (here: the content of $juice). */
// -------------------------------------
// Example: transform a string
// str_shuffle() - It is used to shuffle the characters of a given text.
/* $str = 'This is going to be shuffled !';
$str = str_shuffle($str);
echo $str; */

/* --------------Chaining-----------------
Here is a function that would make sure something sent via an online form is not harmful (a process called "sanitization") : */

/* function sanitize( $input ){
	//	argument manipulation to clean them up
	return strip_tags( trim( $input) );
	
} */
/* To understand this, a good tip is to read from right to left.
The $input argument is sent to trim() , whose result is returned to the strip_tags() function, which then returns its value to the return function which... returns the result outside of the custom function I chose to call sanitize() , which allows me to perform both trim and strip_tags operations in one go. */

// Now that we've declared it, we can use it. Here is a typical form processing logical block :

	// This condition checks if form is submitted...
	/*"if (isset($_POST) && !empty($_POST) ){
	
		// input sanitization
		$name = sanitize( $_POST['name'] );
		$email = sanitize( $_POST['email'] );
	
		// validation...
	}*/

// =============== Excercises Starts Now ;p ==============

// 1. Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile"

// ucfirst() - Convert the first character of first word to uppercase

/* $firstLetter = 'emile';
$capFirst = ucfirst($firstLetter);
echo $capFirst;
echo '<br>'; */

// 2. Use the native function allowing you to display the current year.
/*  echo date('Y').'<br>'; */

// 3. Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.

/* echo date("l d-F-Y h:i:s A") . "<br>";*/

// 4. Create a "Sum" function that takes 2 numbers and returns their sum.

/* function sum($a,$b){
	$add =  $a+$b;
	return $add;
}
echo sum(5,9).'<br/>'; */

// 5. Improve that function so that it checks whether the argument is indeed a Number. If not, it should display : "Error: argument is not a number."
// is_numeric - The is_numeric() function checks whether a variable is a number or a numeric string.This function returns true (1) if the variable is a number or a numeric string, otherwise it returns false/nothing.

/* function add($a, $b){
    if(is_numeric($a) && is_numeric($b)){
        return $a + $b; 
    }else{
        exit('Error: argument is the not a number.');
    }
}
echo add(5, 'a').'<br/>'; */

// 6. Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word. Example: "In code we trust!" should return: ICWT).
// The explode() function breaks a string into an array.µ
// strtoupper() function make the strings to uppercase

/* $string = "Hello world have a nice day";

function initials($str) {
    $ret = '';
    foreach (explode(' ', $str) as $word){
		$ret .= strtoupper($word[0]);
	}
	return $ret;
}
echo initials($string); //  output "HWHAND" */

// 7. Create a function that replaces the letters "a" and "e" with "æ". Example: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca" should respectively return "cæcotrophie", "chænichthys","microsphæra", "sphærotheca".

// str_replace - The str_replace() function replaces some characters with some other characters in a string.

/* $word = "caecotrophie";
function replace($string){
    return str_replace('ae', 'æ', $string); 
}
echo replace($word); */

// 8. Create the opposite function, which replaces "æ" by "ae" in : cæcotrophie, chænichthys, microsphæra, sphærotheca

/* $word = "caecotrophie";
function opposite($string){
    return str_replace('æ', 'ae', $string); 
}
echo opposite($word); */

// 9. Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : the "message", and the "css class" (values: "info", "error", "warning"). This function would allow us to write this :
/* echo feedback("Incorrect email address", "error");
which will produce this html :

<div class="error">Error: Incorrect email address.</div> */

 /* function feedback($message, $css_class){
    if (!in_array($css_class, ['info','warning','error'])) { 
        exit('Incorrect array value'); 
    }else {
        echo '<div class = '. "$css_class" . '>' . ucfirst($css_class) . ':' . ucfirst($message) . '</div>'; 
    }
}
echo feedback("please enter your email address", "info");
echo feedback("warning for your input", "warning");
echo feedback("incorrect email address", "error"); */

// 10. Improve that function by giving the default class the value of "info". Look into the documentation [documentation php](http://php.net/manual/en/functions.arguments.php).

//The in_array() function searches an array for a specific value. 
// Syntax : in_array(search, array, type)

/* function feedback($message, $css_class = 'info'){
    if (!in_array($css_class, ['info', 'error', 'warning'])) { 
        exit('Incorrect array value'); 
    }else {
        echo '<div class = '. "$css_class" . '>' . ucfirst($css_class) . ':' . ucfirst($message) . '</div>'; 
    }
}
echo feedback("please enter your email address");
echo feedback("warning for your input", "warning");
echo feedback("incorrect email address", "error"); */

// 11. Create a random words generator, that generates 2 words: one whose length is between 1 to 5 letters, the other between 7 and 15 letters. The screen will display a title "Generate a new word", then the two generated words, and underneath, a button with the text "Generate").
/* function getRandomWord1($len1 = 5) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len1);
}
function getRandomWord2($len2 = 9) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len2);
}
echo '<label>' . "Generate a new word  : " .'</label>';
echo '<button>'."Generate" .'</button>';
echo getRandomWord1()." ". getRandomWord2(); */

// 12. De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"
//The strtolower() function converts a string to lowercase.

/* echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!"); */

// 13. In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume 
// The pow() function returns x raised to the power of y. pow(x,y);
// The pi() function returns the value of PI.


// Volume of a cone which ray is 5 and height is 2 
$volume = 5 * 5 * 3.14 * 2 * (1/3);  
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
// Volume of a cone which ray is 3 and height is 4  
$volume = 3 * 3 * 3.14 * 4 * (1/3);  
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />';  
###Solution 
function calculate_cone($ray, $height){
    $volume =  pow($ray, 2) * pi() * $height * (1/3); 
    echo 'The volume of a cone which ray is ' . $ray . ' and height is ' . $height . ' = ' . $volume  . 'cm<sup>3</sup><br/>'; 
}
calculate_cone(5, 2);

?>