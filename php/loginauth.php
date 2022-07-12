<?php
session_start();
$hostname="localhost";
$username="root";
$password="";
$dbname="ufb";
$table2="users";
$pass=$_POST["pass"];
$ID=$_POST["ID"];

$link=mysqli_connect($hostname,$username,$password,$dbname);

if ($link===false) {
    die("Error: Could not connect. ".mysqli_connect_error());
}
else {
    echo "Connected!";
}

$sql_select="SELECT * FROM $table2 where ID = '$ID' AND pass = '$pass' ";
$results =mysqli_query($link,$sql_select);
if (mysqli_num_rows($results) == TRUE) {

    while ($row = mysqli_fetch_array($results)) {
        if($row['usertype']=="UFB"){
            
            $name=$row['IName']; 
        
       
        
            $_SESSION['login_user']= $name;
            header("location:UFB.php");

        }
        
       
        
        elseif($row['usertype']=="CUE"){
            header("location:CUE.php");
            $name=$row['IName']; 
        
       
        
            $_SESSION['login_user']= $name;
        }
        elseif($row['usertype']=="KUCCPS"){
            header("location:KUCCPS.php");
            $name=$row['IName']; 
        
       
        
            $_SESSION['login_user']= $name;
        }
        
            elseif($row['usertype']=="UNI"){
            $name=$row['IName']; 
        
       
        
            $_SESSION['login_user']= $name;
            header("location:home.php");
        }
      

           
        

        

       
       }

  
}
     else {
        echo "ERROR: Could not login . Ensure credentials are correct $sql_select. " . mysqli_error($results);
   
}
?>