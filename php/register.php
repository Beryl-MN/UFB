<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/regstyle.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register Students| UFB </title>
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
    

   <div class="form">
    
    <h2>
    <?php

echo $_SESSION['login_user'];
 ?>
    </h2>
    
    

    <h3>
        Enter student details :
    </h3>
    <br>

  
    
    
    <section class="entry">
        <form method="POST"  action="conn.php">
        <label for="Sname">Name : </label>
        <input type="text " placeholder="  Name" name="Sname">
        <br>
        <br>
        <label for="ID">Student ID: </label>
        <input type="text " placeholder="  Student_ID" name="ID">
        <br>
        <br>
        <label for="indexno ">Index number : </label>
        <input type="text " placeholder="  KCSE index number" name="indexno">
        <br>
        <br>
        <label for="kcseyr">KCSE year : </label>
        <input type="text " placeholder="  KCSE year" name="kcseyr">
        <br>
        <br>
        <label for="gender">Gender : </label>
        <select name="gender" class="dd">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
          </select>
        <br>
        <br>
        <label for="admyr">Year of admission: </label>
        <input type="text " placeholder=" Year of admission" name="admyr">
        <br>
        <br>
        <label for="programme"> Programme : </label>
        <input type="text " placeholder="  Enter programme" name="programme">
        <br>
        <br>
        <label for="studyyr">Year of study: </label>
        <input type="text " placeholder=" Year of study" name="studyyr">
        <br>
        <br>
        
        <label for="amountreq">Amount requested : </label>
        <input type="text " placeholder="  Enter amount requested" name="amountreq">
        <br>
        <br>
        <button type="submit" class="sbmt-bttn" name = "submit"><h5>Upload</h5></button>

        </form>
    </section>
   </div>
    
</body>
</html>