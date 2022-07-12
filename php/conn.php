
 <?php
 session_start();
 $hostname="localhost";
 $username="root";
 $password="";
 $dbname="ufb";
 $table1="studentdata";
 $Sname=$_POST['Sname']; 
 $ID=$_POST['ID']; 
 $indexno=$_POST['indexno'];
 $kcseyr=$_POST['kcseyr']; 
 $gender=$_POST ['gender'];
 $admyr=$_POST['admyr']; 
 $programme=$_POST['programme'];
 $studyyr=$_POST['studyyr'];  
 $amountreq=$_POST['amountreq']; 
 $UName=$_SESSION['login_user'];
 $link=mysqli_connect($hostname,$username,$password,$dbname);

 //Check connection
 if ($link===false) {
     die("Error: Could not connect. ".mysqli_connect_error());
 }
 else {
     echo "Connected!";
 }
 $sql="INSERT INTO $table1 (Sname,ID,indexno,kcseyr,gender,admyr,programme,studyyr,amountreq,UName )  VALUES ('$Sname','$ID','$indexno','$kcseyr','$gender','$admyr','$programme','$studyyr','$amountreq','$UName')";

 if(mysqli_query($link,$sql)){
   echo "Records added successfully.";
   
}
 else {
echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
 }
 ?>