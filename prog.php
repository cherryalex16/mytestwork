<?
  class blueprint {
  protected $myname;
  public $email;
  private $address;
  }

  class radio extends blueprint {

    public $station = '105.9';

  } 
  $object = new radio;
  $object->email = 'yaarendler@gmail.com';
  

  print_r($object);
?>
