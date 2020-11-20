<?php
//------Count the number of elements------ 

/*Count the number of elements
Say you want to know how many hobbies your mother has. Try to guess the native php function that allows you to count the number of elements in an array.
Below, count your own hobbies
Below, add both totals and display the total amount of hobbies.*/ 

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
    'hobbies' => array('Watching Series', 'Visiting Temples','Cooking delicious foods','Spending time with family')
); 
print_r($mother['hobbies']); 
$me['mother'] = $mother; 
echo '<pre>'; 
print_r($me); 
echo '</pre>'; 
/* The count() function returns the number of elements in an array. 
 syntax : count(array, mode) - mode	Optional. Specifies the mode. Possible values:
0 - Default. Does not count all elements of multidimensional arrays
1 - Counts the array recursively (counts all the elements of multidimensional arrays)*/ 

echo count($me['hobbies']); 
echo '<br>';
echo count($me['mother']['hobbies']); 
echo '<br>';
echo count($me['hobbies']) + count($me['mother']['hobbies']); 
echo '<br>';

//--------Add an element in a multi-dimensional array---------

/* A friend introduced you to the joys of Taxidermy : it quickly becomes your new hobby. Try to find the right way to add that new hobby to your array's 'hobbies' key. */

$me['hobbies'][] = 'Taxidermy';
print_r($me);
echo '<br>';
//------------ Replace----------

/* You decide you need a reset and change your last name to Kannan. How would you update your array ? */

$me = array(
    'first_name' => 'Saranya',
    'lastname' =>'K',
    'age' => 28, 
    'favourite_season' => 'Fall', 
    'soccer' => false
); 
$me['lastname'] = 'Kannan'; 
print_r($me); 
echo '<br>';


//-------- Create a new array from 2 others (or more)---------
/* One day, you meet your $soulmate. Describe your soulmate as an array, with the same keys as yours.

Now, I wonder ... What are the potential hobbies your child could have ? It turns out there was a documentary on TV the other day, in which an expert in Genetics explained 2 possible scenarios that could answer that question :

either intersection (only the hobbies common to both arrays)
or a fusion (all the hobbies of each array together)
Try to guess the name of the 2 PHP functions that can make these two operations and look it up in the online PHP Manual. (Tip: both start with array_). Test their syntax and try to answer the question.

 */

$me = array(
    'first_name' => 'Saranya',
    'last_name' => 'Kannan',
    'age' => 28, 
    'favourite_season' => 'Fall', 
    'soccer' => false,
    'hobbies' => array ('Singing', 'Cooking','Watching Movies')
); 
$soulmade = array(
    'first_name' => 'Hanissh',
    'lastname' => 'Omanandan', 
    'age' => 2, 
    'favourite_season' => 'Winter', 
    'soccer' => false,
    'hobbies' => array ('drawing', 'Dance', 'Watching Cartoons')
); 
// The array_intersect() function compares the values of two (or more) arrays, and returns the matches.
$result_intersection=array_intersect($me['hobbies'],$soulmade['hobbies']); 

// The array_merge() function merges one or more arrays into one array.
$result_merge = array_merge($me['hobbies'], $soulmade['hobbies']); 

print_r($result_intersection); 
echo '<br>';
print_r($result_merge);
echo '<br>';

//Let's get more fluent in array manipulation : add, delete and replace elements.
 
/*
- Create an array ` $web_development` containing a `'frontend'` and a `'backend'` key. Assign an empty array to each key. 
- Then, add a line underneath that pushes `'xhtml'` in the right array.
- Then, add a line underneath that pushes `'Ruby on Rails'` in the right array.
- Then, add a line underneath that pushes `'CSS'` in the right array.
- Then, add a line underneath that pushes `'Flash'` in the right array.
- Then, add a line underneath that pushes `'JavaScript'` in the right array.
- Then, add a line underneath that replace `'xhtml'` by `'html'`.
- Then, add a line underneath that removes `'Flash'` from the array.
*/
$web_development = array(
    'frontend' => [],
    'backend' => []
); 

$web_development['frontend'][] = 'xhtml'; 
$web_development['backend'][] = 'Ruby on Rails'; 
$web_development['frontend'][] = 'CSS'; 
$web_development['frontend'][] = 'Flash'; 
$web_development['frontend'][] = 'Javascript'; 
$web_development['frontend'][array_search('xhtml', $web_development['frontend'])] = 'html'; 
unset($web_development['frontend'][array_search('Flash', $web_development['frontend'])]);
print_r($web_development); 
?>