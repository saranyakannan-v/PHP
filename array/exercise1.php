<?php
//1. Here is an array of countries :
$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 
echo $countries[2];
echo "<br>";

// 2. Create an array representing your family members
$myFamily = ['Mom','Dad','Hubby','Baby','Sissy'];
echo $myFamily[1];
echo '<br>';

//3. Display its content using the print_r function
// The print_r() function prints the information about a variable in a more human-readable way.

print_r ($myFamily);
echo '<br>';

// 4. Then, create an array describing your favourite recipes

$myFavRecipe = ['Biriyani','Shrimp gravy','Mutton sukka','Cauliflower pakkoda'];
// 5. Display its content using the print_r
print_r ($myFavRecipe);
echo '<br>';

// 6. Then, create an array listing your favourite films

$myFavFilm = ['Alaipayudae','Soorarai Pottru','Vikram Vedha','Cloverfield', 'Exodus gods and kings'];
//7. Then, using that array, display only the one film you like best using its index
echo $myFavFilm[0];
echo '<br>';
?>