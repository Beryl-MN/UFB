
<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/regstyle.css"> 
    <title>View Students | <?php

echo $_SESSION['login_user'];
?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


    <div class="container">
        <h1>Student Data</h1>
        <table class= "table table-border">
            <thead>
            <th>ID</th>
                <th>Name</th>
            
                <th>Index no</th>
                <th>KCSE year</th>
                <th>Gender</th>
                <th>Admission year</th>
                <th>Programme</th>
                <th>Year of study</th>
                <th>Amount requested</th>
                <th >Operations</th>
            </thead>
           <tbody>
            <?php
             include ('include.php');
             $UName=$_SESSION['login_user'];
             $sql_select= " SELECT * FROM $table1 where Uname = '$UName'";
             $results =mysqli_query($link,$sql_select);
             
             if ($results = mysqli_query($link, $sql_select)) {
                if (mysqli_num_rows($results) == TRUE) {
                   
                    while ($row = mysqli_fetch_array($results)) {
                  

                     $Sname=$row['Sname']; 
                     $ID=$row['ID']; 
                     $indexno=$row['indexno'];
                     $kcseyr=$row['kcseyr']; 
                     $gender=$row['gender'];
                     $admyr=$row['admyr']; 
                     $programme=$row['programme'];
                     $studyyr=$row['studyyr'];  
                     $amountreq=$row['amountreq'];
                     echo '<tr >
                     <th scope="row">'.$ID.'</th>
                     <td> '.$Sname  .'</td>
                     <td> '.$indexno  .'</td>
                     <td> '. $kcseyr . '</td>
                     <td> '. $gender . '</td>
                     <td>' . $admyr . '</td>
                     <td>' . $programme . '</td>
                     <td>' . $studyyr . '</td>
                     <td>' . $amountreq. '</td>
                     <td>
              <button class ="btn btn-primary"> <a href="update.php? updateid='.$ID.'" class ="text-light"> UPDATE</a></button>
              
            </td>
                   
                     </tr>';
                 }
          
                 echo "</table>";
            
                    
                    }
                    
                 }
                    
                 else {
                     echo "ERROR: Could not login . Ensure credentials are correct $sql_select. " . mysqli_error($results);
                     }
            
            
                    
             
             
             
            ?>
         

    </div>
</body>
</html>