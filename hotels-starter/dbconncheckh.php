<?php
 $servername ="localhost";
 $username ="root";
 $password ="";
 $dbname ="hotel";

 $conn = mysqli_connect($servername,$username,$password,$dbname);

 if($conn)
 {
 	echo "connection ok";
 }
 else
 {
 	echo "connection failed";
 }
?>