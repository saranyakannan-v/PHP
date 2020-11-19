<?php
/*
Series of exercises on PHP conditional structures.
*/
/*
1. Clean your room!
1.1. Read, then fix this code
 */
$room_is_filthy = true;

if( $room_is_filthy == false){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}


// 1.2 Clean your room Exercise, improved
// Create the array of possible states

$possible_states= ["health hazard", "filthy", "dirty", "clean", "immaculate"];
// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[3];

if ($room_filthiness == $possible_states[0] ){
    echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == $possible_states[1]) {
    echo "<br>Yuk, Room is dirty : let's clean it up !";
} else if( $room_filthiness== $possible_states[2]) {
    echo "<br>not clean man, make an effort";
} else if($room_filthiness == $possible_states[3]){
    echo "<br>nice! but could be better";
} else{
    echo "<br>Nothing to do, room is neat.";
}

// 2. "Different greetings according to time" Exercise

/*Write a script that implements these specifications : 
    - If the time is between 05h00 and 09h00, display "Good morning !".  
    - If the time is between 09h01 and 12h00, affiche "Good day !".  
    - If the time is between 12h01 and 16h00, affiche "Good afternoon !".  
    - If the time is between 16h01 and 21h00, affiche "Good evening !".  
    - If the time is between 21h01 and 04h59, affiche "Good night !".  
    **Tip:** you can combine multiple conditions (using `AND` / `OR`).*/
    $now = [date('H:i')]; // How to get the current time in PHP ? 'H'is hours and 'i' is minutes
    echo "<br> $now[0]";
if($now[0]>= '05h00' && $now[0] <= 'O9h00'){
	echo '<p>Good morning</p>'; 
}elseif($now[0]>= '09h01' && $now[0] <= '12h00'){
	echo '<p>Good day</p>';
}elseif($now[0]>= '12h01' && $now[0] <= '16h00'){
	echo '<p>Good afternoon</p>';
}elseif($now[0]>= '16h01' && $now[0] <= '21h00'){
	echo '<p>Good evening</p>';
}else{
	echo'<p>Good night</p>'; 
}
// 3. "Different greetings according to age" Exercise
/*
Let's continue to make our robot a little more civil and greet humans properly, taking into account their age.
Here is the user experience we aim for :   
First, users see a form asking for their age :
> Please type your age : __
   
When they submit the form, the page displays the right message:
- if age is less than 12 years old, display "Hello kiddo!"  
- if age is between 12 and 18 years old, display "Hello Teenager !"  
- if age is between 18 and 115 years old, display Hello Adult !"  
- if age is beyond 115 years old, display "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?"
Have both the form and the processing script in the same file. Use the GET method.  
*/

// $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get". $_GET can also collect data sent in the URL. $_GET is an array of variables passed to the current script via the URL parameters. GET method is visible to everyone "


// The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL. This function returns true if the variable exists and is not NULL, otherwise it returns false.

if(!isset($_GET['age']) || !(int) $_GET['age']){
    // form processing
	echo ' 
		<form method = "get" action = "conditions.php">
			<label for="age">Please enter your age </label>
			<input type="age" name="age">
			<input type="submit" name="submit" value="Greet me now">
		</form>
	'; 
}else{
	$_GET['age'] = (int) $_GET['age'];
	if($_GET['age'] < 0){
		echo 'Hello baby';
	}elseif ($_GET['age'] < 12){
		echo 'Hello kiddo';
	}elseif($_GET['age'] < 18){
		echo 'Hello Teenager';
	}elseif($_GET['age'] < 115){
		echo 'Hello Adult'; 
	}else{
		echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?'; 
	}
}

// 3. Display a different greeting according to the user's age and gender.

/*
Improve the previous form to add another question: "Man or Woman?". Use an input of type `radio` to capture the data.
If gender is "Woman", the displayed message should be adapted accordingly.
For example, if the user age is between 12 and 18 and the gender is female, display "Hello Miss Teen!" otherwise, display "Hello mister Teen!".
Do the same for all the other age ranges. 

Tip: You can nest conditional structures inside others.
*/

//   "?:" ----- A conditional operator is represented by the symbol '?:'. The first operand (specified before the '?:') is the evaluating (conditional) expression. It has to be such that the type of evaluated expression can be implicitly converted to 'boolean'

if(!isset($_GET['age']) || !(int) $_GET['age'] || !isset($_GET['gender'])){
	echo ' 
		<form method = "get" action = "conditions.php">
            <label for = "male">Male</label>
            <input type = "radio" name = "gender" value = "male"/> <br/>
            <label for = "female">Female</label>
            <input type = "radio" name = "gender" value = "female"/> <br/>
			<label for="age">Please Enter your age </label>
			<input type="age" name="age">
			<input type="submit" name="submit" value="Greet me now">
		</form>
	'; 
}else{
	$people = ''; 
	$_GET['age'] = (int) $_GET['age'];
	if($_GET['age'] < 0){
		echo 'Hello baby';
	}elseif ($_GET['age'] < 12){
		$people = ($_GET['gender'] == 'male') ? 'kiddo Boy' : 'kiddo girl'; 
	}elseif($_GET['age'] < 18){
		$people = ($_GET['gender'] == 'male') ? 'Tennage Boy' : 'Teenage Girl'; 
    }else if($_GET['age']< 115){
        $people = ($_GET['gender']== 'male')? 'Adult Boy' : 'Adult Girl';
    }
    else{
		$people = ($_GET['gender'] == 'male') ? 'Robot Boy' : 'Robot Girl';
	}
	echo '<br/>Hello </n>' . $people;  
}

/* 4. Display a different greeting according to the user's age, gender and mothertongue.
Improve the previous form to add yet another question: "Do you speak English ? ". Use an input of type radio to capture the data. Possible answers: "yes" or "no".

Then modify your form processing script to implement this :

If age is below 12 and the user replies "yes", display : "Hello boy!" or "Hello Girl!" according to the gender indicated.
If the answer is "no", display "Aloha boy" or "Aloha Girl"
Adapt all the other answers accordingly, using "Aloha" instead of "Hello".*/

if(!isset($_GET['age']) || !(int) $_GET['age'] || !isset($_GET['gender']) || !isset($_GET['english'])){
	echo ' 
        <form method = "get" action = "conditions.php">
            <label for = "english">Yes</label>
            <input type = "radio" name = "english" value = "yes"/><br/>
            <label for = "english">No</label>
            <input type = "radio" name = "english" value = "no"/><br/>
            <label for = "male">Male</label>
            <input type = "radio" name = "gender" value = "male"/> <br/>
            <label for = "female">Female</label>
            <input type = "radio" name = "gender" value = "female"/> <br/>
			<label for="age">Please Enter your age </label>
			<input type="age" name="age">
			<input type="submit" name="submit" value="Greet me now">
		</form>
	'; 
}else{
    $greetings = '';
	$people = ''; 
	$_GET['age'] = (int) $_GET['age'];
	if($_GET['age'] < 0){
		echo 'Hello baby';
	}elseif ($_GET['age'] < 12){
		$people = ($_GET['gender'] == 'male') ? 'kiddo Boy' : 'kiddo girl'; 
	}elseif($_GET['age'] < 18){
		$people = ($_GET['gender'] == 'male') ? 'Tennage Boy' : 'Teenage Girl'; 
    }else if($_GET['age']< 115){
        $people = ($_GET['gender']== 'male')? 'Adult Boy' : 'Adult Girl';
    }
    else{
		$people = ($_GET['gender'] == 'male') ? 'Robot Boy' : 'Robot Girl';
	}
    $greetings = ($_GET['english'] == 'yes') ? '</br>Hello' : '</br>Aloah'; 
	echo $greetings .  $people;  
}

/* 5. The Girl Soccer team
You want to create a soccer team for girls between 21 and 40 years old.

Create a form asking for the age, gender and name of the person. Use the $age and $gender variables in an if/else to display a "welcome to the team !" or "Sorry you don't fit the criteria" message. */

/* Here i'm using Post method $_POST to make the data entered by the users will be invisible ---- for security purpose*/
if(!isset($_POST['age']) || !isset($_POST['gender']) || !isset($_POST['name']) || (!(int)($_POST['age']) || (int)($_POST['age']) > 40 || (int)($_POST['age']) < 21) || $_POST['gender'] != 'female'){
	echo ' 
		<form method = "post" action = "conditions.php">
            <label for = "male">Male</label>
            <input type = "radio" name = "gender" value = "male"/> <br/>
            <label for = "female">Female</label>
            <input type = "radio" name = "gender" value = "female"/> <br/>
			<label for="age">Please Enter your age : </label>
			<input type="age" name="age"><br/>
			<input type = "text" name = "name"/>
			<input type="submit" name="submit" value="Validate your application">
		</form>
	'; 
}else{
	echo "welcome to the team"; 
}
/*7. "School sucks!" Exercise
Start a new form that would allow a (nasty) teacher to grade a student.

It would display a different message according to the number annotated :

note below 4 : "This work is really bad. What a dumb kid! "
note between 5 and 9 : "This is not sufficient. More studying is required."
note equals 10 : "barely enough!"
note is 11, 12, 13 or 14 : "Not bad!"
note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
note is 19 or 20 : "Too good to be true : confront the cheater!"*/

/*----- The is_numeric() function checks whether a variable is a number or a numeric string.

This function returns true (1) if the variable is a number or a numeric string, otherwise it returns false/nothing. 
Syntax: 
is_numeric(variable);
----*/

if(!isset($_POST['average']) || ! is_numeric($_POST['average'])){
	echo '
		<form action = "conditions.php" method = "post">
			<label for = "average">Average</label><input type = "text" name = "average" id = "average"/> <br/>
			<input type = "submit" value = "submit"/>
		</form>
	';
}else{
	$average = (float) $_POST['average']; 
	if($average < 4){
		echo 'This work is really bad. What a dumb kid! '; 
	}elseif($average < 9){
		echo 'This is not sufficient. More studying is required.';
	}elseif($average == 10){
		echo 'barely enough!';
	}elseif($average < 15){
		echo 'Not bad!';
	}elseif($average < 19){
		echo 'Bravo, bravissimo!'; 
	}
	elseif($average <= 20){
		echo 'Too good to be true : confront the cheater!';
	}else{
		echo 'Nasty Teacher';
	}
}
?>