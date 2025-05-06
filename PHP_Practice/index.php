<?php
  // Declare a PHP variable
  $name = "John Doe";
  $age = 20;
?>

<?php
    function calculateSquareRoot($number){
        if($number >=0){
            $sqrt = sqrt($number);
            return $sqrt;
        }
        else{
            return "Cannot calc sqrt";
        }
    }
?>

<?php

$fruits = ["Apple", "Banana", "Mango", "Orange"];

echo "<br>";
echo "<h1>Fruits</h1>";
echo "<ul>";
foreach ($fruits as $fruit) {
    echo "<li>" . $fruit . "</li>";
}
echo "</ul>";

?>


<!DOCTYPE html>
<html>
<head>
  <title>PHP Variable Display</title>
</head>
<body>

  <h1>Welcome!</h1>
  
  <p>
    <?php echo "My name is $name."; ?>
  </p>

  <p>
    <?php echo sqrt(-25); ?>
  </p>


  <p>
    <?php echo "I am $age years old."; ?>
  </p>

</body>
</html>
