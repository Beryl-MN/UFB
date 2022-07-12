<?php
 $hostname="localhost";
 $username="root";
 $password="";
 $dbname="ufb";
 $table1="studentdata";
 $table2="ufb";

 $link=mysqli_connect($hostname,$username,$password,$dbname);

 if ($link===false) {
     die("Error: Could not connect. ".mysqli_connect_error());
 }
 
 ?>