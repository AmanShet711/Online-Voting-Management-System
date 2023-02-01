
<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "Aman@0711";
 $db = "aman";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
?>    