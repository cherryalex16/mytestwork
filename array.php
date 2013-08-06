<?

// $myarray = array('steve','joe','stan')





 $associative_array = array('name1'=>'joe', 'name2' => 'stan','name3' =>'asher', 'name4'=> 'rendler');
// echo  $myarray[1] .    $myarray[2];
 
 foreach ($associative_array as $item => $description)
 {
  echo "$item: $description <br>";
  
 }

 echo count($associative_array);



?>

