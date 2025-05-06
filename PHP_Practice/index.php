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
