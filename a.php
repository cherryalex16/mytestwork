<?php
function adder($a, $b)
  {
    return $a +$b;
  }
  
  function doIt()
  {
    $x = adder(5,6);
    $y = adder(7,8);
    $z = adder($x, $y);
    echo $z;
  }
  
  doIt();
?>


