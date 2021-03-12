<?php

require('./Foobar.php');

$object = new Foobar();
$object->set_state('Active');

$data = serialize($object);

/*
 * Object's private memebers have the class name prepended to the member name;
 * -> "\000Foobar\000state"
 * protected memebers have a '*' prepended to the member name. 
 * -> "\000*\000pro"
 * These prepended values have null bytes on either side.
 * string(84) "O:6:"Foobar":2:{s:13:"\000Foobar\000state";s:6:"Active";s:6:"\000*\000pro";s:12:"notProtected";}"
 */

echo var_dump($data);

file_put_contents('./serialized.txt', $data);
?>
