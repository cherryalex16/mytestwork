<?php

  $obj = new account(1000);
  $obj->debit(100);
  $obj->credit(200);
  $obj->debit(500);

  class account{

    public $starting_balance; 
    public $current_balance;
    
    public function __construct($amount) {
     $this->starting_balance = $amount;
     $this->current_balance = $amount;
    } 


    public function debit($amount) {
      $this->current_balance = $this->current_balance - $amount;
    }

    public function credit($amount){
      $this->current_balance = $this->current_balance + $amount;
    }
    public function __destruct() {
     echo 'your starting balance was:' . $this->starting_balance . '<br>';
     echo 'your ending balance is:' . $this->current_balance . '<b>';  
    }
  }






 ?>
