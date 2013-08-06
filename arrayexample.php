<?
  $record = array('first_name' => 'asher', 'last_name' => 'rendler');
    print_r($record);

  $records = array();
  $records[] = $record;
  $record ['first_name'] = 'asher';
  $record['last_name'] = 'rendler';
  $records[] = $record;
  $record['first_name'] = 'josh';
  $record['last_name'] = 'steven';
  $records[] = $record;



  print_r ($records);




?>
