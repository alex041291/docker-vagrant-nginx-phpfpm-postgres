<?php

//$env = getenv('POSTGRES_PORT_5432_TCP_ADDR');

$array = [
  "postgresTcp" => getenv('POSTGRES_PORT_5432_TCP_ADDR'),
  ];

var_dump($array);
exit;

//phpinfo();


?>
