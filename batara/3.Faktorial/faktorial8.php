
<?php

function Factorial($number){
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++){
      $factorial = $factorial * $i;
    }
    return $factorial;
}
  

$number = 8;
$fact = Factorial($number);
echo "Factorial = $fact";
?>