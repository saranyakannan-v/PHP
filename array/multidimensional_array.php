<?php
/*-----------Multidimensional arrays---------
As seen before, you can store all types of values in an array... including other arrays! Your array then becomes a multidimensional Array. Very useful because now you can store many things that come as groups. For intance, let's add your favourite movies to the $mearray : */

$me = array(
	'age'	=> 45 , 
	'firstname' 		=> 'Alexandre' ,
	'lastname' 	  		=> 'Plennevaux' ,
	'favourite_movies' 	=> array('My Own Private Idaho', 'Her', 'Matrix')
);

echo '<pre>';
print_r($me);
echo '</pre>';
echo '<br>';

//-----------Exercices---------
// A multidimensional array is an array containing one or more arrays.
// 1. Add your hobbies using an array to your $me array

$me = array(
    'age' => 28, 
    'favourite_season' => 'Fall', 
    'soccer' => false
); 
$me['hobbies'] = array ('Singing', 'Cooking','Watching Movies'); 
$mother = array(
    'age' => 56, 
    'favourite_season' => 'Winter', 
    'soccer' => false, 
    'hobbies' => array('Watching Series', 'Temple visits','Spending time with family')
); 
print_r($mother['hobbies']); 
$me['mother'] = $mother; 
echo '<pre>'; 
print_r($me); 
echo '</pre>';  

?>