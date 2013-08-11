<?php  
  function isEven($aNumber)
  {
	$x = $aNumber % 2 == 0;
	return $x;
  }
  
  function checkANumber($x)
  {
	  $z = isEven($x);
	  
	  if ($z == true)
	  {
		echo "$x is even!";
	  }
	  else 
	  {
		echo "$x is odd";
	  }
  }
  
  checkANumber(5);
  echo "<BR>";
  checkANumber(6);
?>


