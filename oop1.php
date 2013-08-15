<?php
  class contact_list
   {
    
   /* public function put_contacts_tolist;
       { 
           $contacts = array($contact1);
           foreach ($contact1 as $item);

           { echo ($item);}
  
       }   */    
    public$name;
    public$address;
    public$phonenumber;
    
  } 

  $contact1 = new contact_list;
  $contact1->name = 'asher rendler';
  $contact1->address = '74 kew gardens dr';
  $contact1->phonenumber = '732-901-9413';
  $contact2 = new contact_list;
  $contact2->name = 'raizy rendler';
  $contact2->address = '76 kew gardens dr';
  $contact2->phonenumber = '917-968-7147';
  $contacts = array ($contact1, $contact2);
     foreach($contacts as $key => $value)
           foreach($value as $keys =>$values)
  echo "$keys: $values<br>";
  print_r ($contacts);
?> 
