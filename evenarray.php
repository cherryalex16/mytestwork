<?php 
  function isEven($aNumber)
  {
     return $aNumber % 2 ==0;
  }
  $theEvenNumbers = Array();

   for($i = 1; $i <1001; $i++)
 {
    if(isEven($i) == true)
       {array_push ($theEvenNumbers, $i);
       }
}    
    print_r ($theEvenNumbers);
