<?php
  class messagePrint {
    function __construct($message) {
      echo $message .'<br>';
    }
  }


  $MyMessage = 'message in a bottles';
  $obj = new messagePrint($MyMessage);
  $asher = 'asher';  
  $obj = new messagePrint($asher);
  $asherrendler =  'asher rendler';
  $obj = new messagePrint($asherrendler);
?> 
