<?php
require_once('Client.php');
require_once('Server.php');

$server = new Server();

echo "### Test 1: \r\n";
echo "Notify without any observers: \r\n";
$message = new stdClass();
$message->text = "No one shall read this!";
$server->notify($message);
echo "### Test 1 END \r\n";


echo "### Test 2: \r\n";
echo "Register one observer and send a new message: \r\n";
$message->text = "You may read this.";
$client1 = new Client();
$server->attach($client1);
$server->notify($message);
echo "### Test 2 END \r\n";
