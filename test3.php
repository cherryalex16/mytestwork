<?php
  class blueprint {
    protected $myname;
    public $email;
    private $address;
  }
  class radio extends blueprint {
    public $station = '107.9';
    
    function __construct() {
       

