<?php
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | UFB</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .header{
    width:100%;
    height:120px;
    background-color: #33B9FF;

}

.header img {
    top:20px;
    width: 100px;
    height: 100px;
    padding: 10px;
}

.nav {
  
    text-align: right;
   
    padding: 10px;
}

.nav ul li {
    top:-100px;
    text-align: right;
   
    padding: 10px;
    list-style: none;
    display: inline-block;
    
    position: relative;
}

.nav ul li a {
    color: black;
    text-decoration: none;
    font-size: 20px;
    top:-100px;
  
    

}
.nav ul li ::after {
    content: '';
    width: 0%;
    height: 2px;
    background: black;
    display: block;
    margin: auto;
    transition: 0.5s;
}

.nav ul li :hover::after {
    width: 100%;
}
        body{
            font-family: 'Roboto' , sans-serif;
        }
        *{
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;

        }
        .sidebar {
            position: fixed;
            left:-310px;
            width :310px;
            height: 100% ;
            background:#33B9FF ;
  
           
           
        }
        .sidebar header{
            font-size:22px;
            color:white;
            text-align: center;
            line-height:70px;
            background: #09AAB8;
        }
        .sidebar ul a{
            display:block;
            height: 100%;
            width: 100%;
            line-height: 65px;
            font-size:20px;
            color:white;
            padding-left:40px;
            box-sizing: border-box;
            border-top: 1px solid rgba(255,255,255, .1);
            
           transition: 1s;

        }
        ul li :hover a {
            padding-left: 50px;
            transition: 1s;


        }

        .sidebar ul a i {
            margin-right: 16px;
        }
        #check{
            display: none;


        }
        label #btn,label #cancel{
            position:absolute;
            cursor: pointer;
            background: blue;
            border-radius:3px;


        }
        label #btn{
            left: 40px;
            top: 125px;
            font-size:35px;
            color:white;
            padding: 6px 12px;
            transition: all .5s;
           
        }
        label #cancel{
            z-index: 1111;
            left: -260px;
            top:17px;
            font-size:30px;
            color:white;
            padding: 4px 9px;
            transition: all .5s ease;
        }
        #check:checked ~ .sidebar{
            left:0;

        }
        #check:checked ~ label #btn{
            left:250px;
            opacity:0;
            pointer-events:none;

        }
        #check:checked ~ label #cancel{
            left:260px;
           

        }
      
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
    <input type="checkbox" id = "check">
    <label for="check">
        <i class ="fa fa-bars" id= "btn"> </i>
        <i class ="fa fa-times" id= "cancel"> </i>
    </label>
    <div class="sidebar">
        <header>
        <?php

echo $_SESSION['login_user'];
 ?>
        </header>
        <ul>
        <li>
            <a href="viewuni.php"> <i class= "fa fa-eye"></i>  View universities</a> <br>
            <a href="adduser.php"> <i class= "fa fa-user-plus"> </i> Add user</a> <br>
            <a href="register.php"> <i class= "fa fa-check-circle-o"> </i> Verify</a> <br>
           
            <a href="../login.php"> <i class= "fa fa-sign-out"> </i> Logout </a>
            
            
            
        </li>
    </ul>
    </div>
    
</body>
</html>