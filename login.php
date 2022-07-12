<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login|UFB</title>
    <!--<link rel="stylesheet" href="css/loginstyle.css"> -->
    <style>
        * {
    margin: 0;
    padding: 0;
    font-family: 'Josefin Sans', sans-serif;
    box-sizing: border-box;
}
.header{
    width:100%;
    height:120px;
    background-color: #33B9FF;

}

.header img {
    top:20px;
    width: 120px;
    height: 120px;
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
body {
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100vh;
    background-color:white;
    background-position: center;
    background-size: cover;
}



.head {
    text-align: center;
    padding-top: 80px;
}

.head h1 {
    color: black;
    font-size: 45px;
    margin-bottom: 80px;
}

.main {
    text-align: center;
}

.main input {
    width: 300px;
    height: 40px;
    border: none;
    outline: none;
    padding-left: 40px;
    box-sizing: border-box;
    font-size: 15px;
    color: black;
    margin-bottom: 40px;
    border-bottom: 1px solid #33B9FF;
}

button {
    margin-top: 30px;
    width: 200px;
    padding: 15px 0;
    text-decoration: none;
    text-align: center;
    margin: 70px auto 0;
    display: inline-block;
    margin: 20px 10px;
    border-radius: 10px;
    padding: 12px 0;
    font-weight: bold;
    border: 2px solid #33B9FF;
    background: transparent;
    color: black;
    cursor: pointer;
    position: relative;
}

button:hover {
    border: 1px solid black;
    background: #33B9FF;
    transition: 1s;
}

.main span {
    position: relative;
}

input {
    background: transparent;
}

::placeholder {
    color: black;
    font-weight: bolder;
}
.container{
    background: #F4F2F1;
    margin-top: 100px;
    width: 750px;
    height:550px;
    position: center;
    border-style:double;
 

}
    </style>

</head>
<section class="header">

            <a href=""><img src="images\Logo.jpg"></a>
            <div class="nav">
                <ul>
                    <li> <a href="homepage.php"> HOME </a> </li>
                    <li> <a href=""> CONTACT US </a> </li>

                </ul>

            </div>
       
</section>
<section class="body">

    <body>
        <div class="container">
            <div class="head">
                <h1> Login

                </h1>
            </div>
            <div class="main">
                <form  method="POST" action = "php/loginauth.php">
                    <span>
                    
                    <input type="text " placeholder="Enter ID" name="ID">
                </span><br>
                    <span>
                   
                    <input type="password " placeholder="Password" name="pass">
                </span><br>
                    <button type="submit"> LOGIN </button>
                </form>
            </div>
        </div>
    </body>
</section>

</html>

