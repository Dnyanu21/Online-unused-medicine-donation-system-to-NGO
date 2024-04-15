<?php
    $host = "localhost";
    $user = "root";
    $pass = "root123";
    $db = "node";
    $conn = mysqli_connect($host, $user, $pass, $db) or die('Error Connecting');
?> 



<!DOCTYPE html>
<html lang="en">
<h>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login-signup.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<style>
input:focus {
  background-color: #f2f2f2;
}
</style>
</head>

<body>

<?php
    if(isset($_POST['submitsignup']))
    {
        $NGOName=$_POST['DonarName'];
        $Contact=$_POST['Contact'];
        $Email=$_POST['Email'];
        $Location=$_POST['Location'];
        $Password=$_POST['Password'];
        $query2="INSERT INTO donarsign2(DonarName,Contact,Email,Location,Password) VALUES('$NGOName','$Contact','$Email','$Location','$Password');";
        $res2=mysqli_query($conn,$query2);
        
      
    } 



if(count($_POST)>0) {
	$result = mysqli_query($conn,"SELECT * FROM donarsign2 WHERE Password = '". $_POST["Password1"]."'and DonarName= '". $_POST["DonarName1"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "<script>alert('Invalid username or Password!!');</script>";
		
		echo "<script>window.location.href='./donarlogin.php';</script>";
		exit();
		//$message = "Invalid Username or Password!";
	} else
		echo "<script>alert('You are successfully authenticated!');</script>";
		echo "<script>window.location.href='./Doner-home.html';</script>";
									
}


    ?>  





<div class="box">
    <div class="container">

        <div class="top">
           <!-- <span>Have an account?</span> -->
            <header>Login</header>
            <form  id="login" class="login-data" method="post" action="donarlogin.php" >
        </div>

        <div class="input-field">
            <input type="text" class="input" placeholder="Username" id="" name='DonarName1' required minlength="2" maxlength="100">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" id="" name='Password1' required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="please include 1 uppercase Character,1 lowercase Character and 1 number. ">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" class="submit" value="Login" id="" name='login=data'>
        </div>

        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="./donar-signup.php">Don't have an account?</a></label>
            </div>
        </div>
</form>
    </div>
</div>  







  <!--  <div class="container">
        <div class="login" data-aos="zoom-in-up" data-aos-duration="1000"
        data-aos-easing="ease-in-out">
            <h1>Login</h1>
            <form  id="login" class="login-data" method="post" action="donarlogin-signup.php">
                <label for="text" >Name</label>
                <input type="text" id="Donar-name" placeholder="Full name" name="DonarName1"
                required minlength="2" maxlength="100" />
              
                <label for="text" >Password</label>
                <input type="password" id="ngo-password" placeholder="Create Password (Min. 8 Characters)" name="Password1"
                required pattern="^(?=.\d)(?=.[a-z])(?=.[A-Z])(?=.[a-zA-Z]).{8,}$" 
                title="please include 1 uppercase Character,1 lowercase Character and 1 number. "/>
                
                <button type="submit" name="submitid">Login</button>
            
            </form>
        </div>-->
        
    <!--  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="ngologin-signupScript.js"></script>-->
</body>
</html>