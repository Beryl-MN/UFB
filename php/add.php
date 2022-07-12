<?php
 session_start();
 $hostname="localhost";
 $username="root";
 $password="";
 $dbname="ufb";
 $table2="users";
 
 $ID=$_POST['ID']; 
 $pass=$_POST['pass'];
 $IName=$_POST['IName']; 
 $usertype=$_POST ['usertype'];
 
 $UName=$_SESSION['login_user'];
 $link=mysqli_connect($hostname,$username,$password,$dbname);

 //Check connection
 if ($link===false) {
     die("Error: Could not connect. ".mysqli_connect_error());
 }
 else {
     echo "Connected!";
 }
 $sql="INSERT INTO $table2 (ID,pass,IName,usertype)  VALUES ('$ID','$pass','$IName','$usertype')";

 if(mysqli_query($link,$sql)){
    
echo '<script type="text/javascript">
       window.onload = function () { alert("Records added successfully"); } 
</script>'; 
header("location:UFB.php");


   
}
 else {

echo '<script type="text/javascript">
       window.onload = function () { alert("Error"); } 
</script>'; 
header("location:UFB.php");

 }
 ?>