<?php

$conn = new mysqli('localhost','root','','crud');

if ($conn -> connect_error) 
{
	echo "connection failed : " .$conn -> connect_error;	
}
?>