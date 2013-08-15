<?php
  class contact_list
   {
   //  $contacts = array(); 
    
  
    
    public$name;
    public$address;
    public$phonenumber;
    }
   

  $contact1 = new contact_list;
  $contact1->name = 'asher rendler';
  $contact1->address = '74 kew gardens dr';
  $contact1->phonenumber = '732-901-9413';
  print_r ($contact1)
?> 
