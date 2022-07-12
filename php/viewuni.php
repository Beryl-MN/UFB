<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/regstyle.css"> 
    <title>View universities |<?php

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

<a href="view.php"> <i class= "fa fa-eye"></i>  View universities</a> <br>
            <a href="update.php"> <i class= "fa fa-user-plus"> </i> Add user</a> <br>
            <a href="register.php"> <i class= "fa fa-check-circle-o"> </i> Verify</a> <br>
           
            <a href="../login.php"> <i class= "fa fa-sign-out"> </i> Logout </a>


</li>
</ul>
</div>


    <div class="container">
        <h1>Universities</h1>
        <table class= "table table-border">
            <thead>
           
                <th>Name</th>
            
                
            </thead>
           <tbody>
           <?php
             include ('include.php');
             $UName=$_SESSION['login_user'];
             $sql_select= " SELECT DISTINCT UName FROM $table1 ";
             $results =mysqli_query($link,$sql_select);
             
             if ($results = mysqli_query($link, $sql_select)) {
                if (mysqli_num_rows($results) == TRUE) {
                   
                    while ($row = mysqli_fetch_array($results)) {
                  

                     $Uname=$row['UName']; 
                    
                     echo '<tr >
                     
                     <td> '.$Uname  .'</td>
                   
                     <td>
              
              
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
