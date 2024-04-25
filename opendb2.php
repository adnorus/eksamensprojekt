<?php

include 'config2.php';
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Error " . mysqli_error($link)); 

// Change character set to utf8
mysqli_set_charset($link,"utf8");
?>