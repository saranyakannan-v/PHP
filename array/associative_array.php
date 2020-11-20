<?php
// PHP Associative Arrays - Associative arrays are arrays that use named keys that you assign to them.
/*Coding an Associative Array
It's pretty much the same as for "normal" arrays, except that you specify a label in front of each information.

$user = array (
    'firstname' => 'Juan',
    'lastname' => 'Pablo',
    'adress' => '3 Paradijsestraat',
    'city' => 'Antwerpen'
    );
Note 1: Although it spans over multiple line, there is really only one instruction (there is only one ;). PHP allows to write your code on several lines, should you find it more legible.

Note 2: Notice the arrow (=>) to assign the key to its value.

Thus, to display the user's lastname, you can simply do :

echo $user['lastname'];*/
/* ---------Exercise-------
Describe yourself using an associative array: $me. Specify your age, your favourite season of the year, wether you like soccer or not (boolean). Try to use the right variable type for each value.

Here is a head start :*/

$me = array('firstname' => 'Saranya',
'age' => '28',
'favourite season' => 'Autumn. When you think about it, Fall is the actual normal season. Winter is cold, summer is hot, and spring is rainy. ;)',
'whether you like soccer' => false);
echo '<pre>';
print_r($me);
echo '</pre>';

 ?>