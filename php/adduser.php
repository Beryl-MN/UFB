<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/regstyle.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register users| <?php

echo $_SESSION['login_user'];
?> </title>
    <style>

      
    </style>
</head>
<body>

<section class="header">

            <a href=""><img src="../images\Logo.jpg"></a>
            <div class="nav">
                <ul>
                    <li> <a href="homepage.php"> HOME </a> </li>
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
           
            <a href="../login.php"> <i class= "fa fa-sign-out"> </i> Logout </a>
            
            
            
        </li>
    </ul>
    </div>
    
    <div class="container my-5">
    <form method="POST" action="add.php">
  <div class="form-group">
    <label >ID</label>
    <input type="text" class="form-control" placeholder="Enter ID " name = "ID" autocomplete = "off">
</div>
<div class="form-group">
    <label >Password</label>
    <input type="text" class="form-control" placeholder="Enter Password " name = "pass" autocomplete = "off">
</div>
<div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" placeholder="Enter Name" name = "IName" autocomplete = "off">
</div>
<div class="form-group">
    <label >User Type</label>
    <input type="text" class="form-control" placeholder="Enter User type " name = "usertype" autocomplete = "off">
</div>

  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
</form>
    </div>
    
</body>
</html>