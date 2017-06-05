<?php
	$host	= "localhost";
	$user = "root";
	$password = "";
	$database = "berbagiilmu";

$link = mysqli_connect($host,$user,$password,$database);


if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
?> 