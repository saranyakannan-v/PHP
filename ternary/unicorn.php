<?php 

// 10. Ternary exercises
/*In a new file unicorn.php, create an html form asking "Are you a human, a cat or a unicorn ?". When submitted, the screen displays an animated Gif showing either a human, a cat or a unicorn, as per the user input (you can find gifs here). Use GET or POST as method, whichever you like. Use a ternary operation to evaluate the condition.*/

if(!isset($_POST['species']) || !in_array($_POST['species'], ['human', 'cat', 'unicorn'])){
    echo '
        <form action = "unicorn.php" method = "post">
            <p>Are you a human, a cat or a unicorn ?</p>
            <label for = "human">Human</label>
            <input type = "radio" name = "species" id = "human" value = "human"/> <br/>
            <label for = "cat">Cat</label>
            <input type = "radio" name = "species" id = "cat" value = "cat"/> <br/>
            <label for = "unicorn">Unicorn</label>
            <input type = "radio" name = "species" id = "unicorn" value = "unicorn"/> <br/>
            <input type = "submit" value = "send"/>
        </form>
    ';
   
}else{
    $you = $_POST['species'];
    switch($you){
        case 'human' :
            echo '<img src="https://media.giphy.com/media/eke4aucrezwK4uRYH3/giphy.gif">';
            break;
        case 'cat' :
            echo '<img src="https://media.giphy.com/media/9Jz6qdf1CAMATMXTGH/giphy.gif">';
            break;
        default:
            echo '<img src="https://media.giphy.com/media/26vUw5sYGcqmMDoBy/giphy.gif">';
    }                
}

?>