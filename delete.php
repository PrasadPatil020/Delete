<?php

include 'conn.php';


$country_id = $_GET['country_id'];

$q = " DELETE FROM `countries` WHERE country_id = $country_id ";

mysqli_query($conn, $q);
 
header('location:display.php');

?>