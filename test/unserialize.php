<?php

require('./Foobar.php');

$filename = './serialized.txt';
$filecontents = file_get_contents($filename);

$object = unserialize($filecontents);

var_dump($object->get_state());
var_dump($object);

?>
