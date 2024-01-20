<?php

$dbhost = "localhost";
$dbuser = "francis";
$dbpass = "100703ultron";
$dbname = "phonebook";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}
