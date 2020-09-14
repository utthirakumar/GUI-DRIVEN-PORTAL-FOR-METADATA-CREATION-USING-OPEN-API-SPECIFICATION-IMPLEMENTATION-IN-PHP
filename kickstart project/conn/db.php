<?php

   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = tests";
   $credentials = "user = postgres password=1212";
$conn = pg_connect("$host $port $dbname  $credentials");
if (!$conn) {
	$conn = pg_connect("$host $port  $credentials");
   $query="CREATE DATABASE tests;";
   echo "<script>alert('New databse created & click the insert button');document.location='../index.php'</script>";
if(pg_query($conn,$query)){
	// echo "success fully";
	$conn = pg_connect("$host $port $dbname  $credentials");
}
} 

?>

