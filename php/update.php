<?php

session_start();
include('include.php');

$hostname="localhost";
$username="root";
$password="";
$dbname="ufb";
$table1="studentdata";
if (isset($_POST['submit'])){
    
   
   
    $Sname=$_POST['Sname']; 
    $ID=$_POST['ID']; 
    $indexno=$_POST['indexno'];
    $kcseyr=$_POST['kcseyr']; 
    $gender=$_POST ['gender'];
    $admyr=$_POST['admyr']; 
    $programme=$_POST['programme'];
    $studyyr=$_POST['studyyr'];  
    $amountreq=$_POST['amountreq']; 
  
    $link=mysqli_connect($hostname,$username,$password,$dbname);
   
 
    $sql="UPDATE $table1  set ID =$ID , Sname ='$Sname',indexno ='$indexno', kcseyr = '$kcseyr ', gender ='$gender' , admyr='$admyr' , programme='$programme' , studyyr='$studyyr' , amountreq='$amountreq' where ID =$ID ";

     if(mysqli_query($link,$sql)){
       echo "Records updated successfully.";
     }

     else {
    echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
    
}
 

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/regstyle.css"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Update Students | <?php

echo $_SESSION['login_user'];
?></title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<style>
    .container{
        margin-top: 70px;
       padding-left:50px;
    } 

    .nava {
  
  text-align: right;
 
  padding: 10px;
}

.nava ul li {
  top:-100px;
  text-align: right;
 
  padding: 10px;
  list-style: none;
  display: inline-block;
  
  position: relative;
}

.nava ul li a {
  color: black;
  text-decoration: none;
  font-size: 20px;
  top:-100px;
  font-weight: 500;

  

}
.nava ul li ::after {
  content: '';
  width: 0%;
  height: 2px;
  background: #F7911D;
  display: block;
  margin: auto;
  transition: 0.5s;
}

.nava ul li :hover::after {
  width: 100%;
}


</style>

  </head>

  <body>
  <section class="header">

<a href=""><img src="../images\Logo.jpg"></a>
<div class="nava">
    <ul>
        <li> <a href="home.php"> HOME </a> </li>
        <li> <a href=""> CONTACT US </a> </li>

    </ul>

</div>

</section>
<div class="sidebar">
<header>
<?php

echo $_SESSION['login_user'];
?>
</header>
<ul>
<li>
<a href="view.php"> <i class= "fa fa-eye"></i>  View Students</a> <br>
<a href="update.php"> <i class= "fa fa-pencil"> </i>  Update data</a> <br>
<a href="register.php"> <i class= "fa fa-user-plus"> </i>  Register Students</a> <br>

<a href="logout.php"> <i class= "fa fa-sign-out"> </i> Logout </a>



</li>
</ul>
</div>
    <div class="container my-5">
    <form method="POST">
  <div class="form-group">
    <label >ID </label>
    <input type="text" class="form-control" placeholder="Update Student ID " name = "ID" autocomplete = "off" >
</div>
<div class="form-group">
    <label >Student name</label>
    <input type="text" class="form-control" placeholder="Update student name " name="Sname" autocomplete = "off">
</div>
<div class="form-group">
    <label >Index Number</label>
    <input type="text" class="form-control" placeholder="Update Index Number " name = "indexno" autocomplete = "off">
</div>
<div class="form-group">
    <label >KCSE year</label>
    <input type="text" class="form-control" placeholder="Update KCSE year " name = "kcseyr" autocomplete = "off">
</div>
<div class="form-group">
    <label >Gender</label>
    <input type="text" class="form-control" placeholder="Update gender " name = "gender" autocomplete = "off">
</div>
<div class="form-group">
    <label >Admission year</label>
    <input type="text" class="form-control" placeholder="Update admission year " name="admyr" autocomplete = "off">
</div>
<div class="form-group">
    <label >Programme</label>
    <input type="text" class="form-control" placeholder="Update programme " name="programme" autocomplete = "off">

</div>
  <div class="form-group">
    <label >Year of Study</label>
    <input type="text" class="form-control" placeholder="Update year of study" name="studyyr" autocomplete = "off">
</div>
<div class="form-group">
    <label >Amount requested</label>
    <input type="text" class="form-control" placeholder="Update amount requested " name="amountreq" autocomplete = "off">
</div>
  <button type="submit" class="btn btn-primary" name = "submit">Update</button>
</form>
    </div>
    
  </body>
</html>