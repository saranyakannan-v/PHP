<?php
$weather = 'rain';
switch ($weather) {
	case 'rain':
		echo "Take an umbrella";
		break;
	case 'storm':
		echo "Don't get out today!";
		break;
	default:
		echo "Weather will be ok to day";
}
?>

<?php 
/*
 Series of exercises on PHP conditional structures.
 8. The "Switch" structure.

"School sucks!" Exercise
Start a new form that would allow a (nasty) teacher to grade a student.

It would display a different message according to the number annotated :

note below 4 : "This work is really bad. What a dumb kid! "
note between 5 and 9 : "This is not sufficient. More studying is required."
note equals 10 : "barely enough!"
note is 11, 12, 13 or 14 : "Not bad!"
note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
note is 19 or 20 : "Too good to be true : confront the cheater!" */
?>
 <form method="get" action="">
            <label for="grade"><br>Grade a student:</label>
            <br>
            <input type="text" name="grade">
            <input type="submit" name="submit" value="Click me!">
            <br>
    </form>

<?php

    if(isset($_GET['grade'])){ // isset() is used to determine the variable is declared otherwise it returns Null
        $result = $_GET['grade'];
        switch (true) {
            case $result < 5:
                echo "This work is really bad. What a dumb kid! ";
                break;
            case $result < 10:
                echo  "This is not sufficient. More studying is required.";
                break;
            case $result == 10:
                echo  "barely enough!";
                break;
            case $result < 15:
                echo "Not bad!";
                break;
            case $result < 19:
                echo "Bravo, bravissimo!";
                break;
            default:
                echo "Too good to be true : confront the cheater!";
        }    
    }
?>
