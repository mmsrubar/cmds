#!/bin/bash

FILE=serialized.txt

echo "Removing previous files:"
echo "------------------------"
echo "rm ./$FILE"
echo
echo "Serialize an object into a file $FILE"
echo "php -f serialize.php"
echo
echo "Unserialize the object from the file $FILE"
echo "php -f unserialize.php"
