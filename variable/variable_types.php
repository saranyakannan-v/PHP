<html>
  <head><title>Variable Types</title></head>
  <body>
    <?php
    $first_name = "Saranya";
    $age = 28;
    $eye_color = "Black";
    $my_family = array('Mom','Dad','Hubby','baby','sissy');
    $stored_info = true;
    ?>
  <p> <?php echo "Hi! My name is $first_name";?> </p>
  <p> <?php echo "I am $age years old."; ?> </p>
  <p> <?php echo "My eyes are $eye_color"; ?></p>
  <p> <?php echo "The first person in my family is $my_family[0]"; ?></p>
  <p><?php if ($stored_info == true) {
    echo "whether you are hungry or not ?";
}
?>
  </body>
</html>