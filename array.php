<?

// $myarray = array('steve','joe','stan')





 $associative_array = array('name1'=>'joe', 'name2' => 'stan','name3' =>'asher');
// echo  $myarray[1] .    $myarray[2];
 $j = 0;
 foreach ($associative_array as $item)
 {
  echo "$j: $item<br>";
  ++$j;
 }


 //echo count($associative_array);
 //echo count($myarray);



?>

