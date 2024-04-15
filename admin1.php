<?php
    $host = "localhost";
    $user = "root";
    $pass = "root123";
    $db = "node";
    $conn = mysqli_connect($host, $user, $pass, $db) or die('Error Connecting');
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="login-signup.css">
</head>
<body>
    <?php

if(isset($_POST['submitid']))
    {
        $Name=$_POST['Name'];
        $Password=$_POST['Password'];
        

$sql ="SELECT * FROM admin WHERE Name = '$Name' and Password = '$Password'";
//$row=mysqli_num_rows()
$query=mysqli_query($conn,$sql);
$row=mysqli_num_rows($query);

    if($row==1)
    {
    
        echo "<script>
        alert('login done') ;
        </script>";
        header('location:Admin-user-list.php');
    
    }
    else
     {
        echo "<script>
        alert('failed') ;
        </script>";
            
    
    }
    

 
}

    ?>




<div class="box">
    <div class="container">

        <div class="top">
           <!-- <span>Have an account?</span> -->
            <header>Login</header>
        </div>
        <form id="admin_form" action="admin1.php" method="post">
        <div class="input-field">
            <input type="text" class="input" placeholder="Username" id="" name="Name" required minlength="2" maxlength="100">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" id="" name="Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="please include 1 uppercase Character,1 lowercase Character and 1 number. ">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" class="submit" value="Login" id="" name="submitid">
        </div>
        </form>
    </div>
</div>  


  <!--  <div class="main-container">
        <div class="container"  data-aos="zoom-in-up" data-aos-duration="1000"
        data-aos-easing="ease-in-out">
            <h1>Admin Login</h1>
            <form id="admin_form" action="admin.php" method="post">
                <label for="name" >Name</label>
                <input type="text" id="name" placeholder="Full name" name="Name"
                required minlength="2" maxlength="100"/>
                <label for="password" >Password</label>
                <input type="password" id="password" placeholder="Enter Password" name="Password"
                required   />
                <br><br>
                <input type="submit" name="submitid" value="Log in">
                
            </form>
        </div>
    </div>-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
<script src="adminstyle.js"></script>
    
</body>
</html>
