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
        $NGOName=$_POST['NGOName'];
        $Contact=$_POST['Contact'];
        $Email=$_POST['Email'];
        $Location=$_POST['Location'];
        $Password=$_POST['Password'];
        
        $query2="INSERT INTO ngosignin3(NGOName,Contact,Email,Location,Password) VALUES('$NGOName','$Contact','$Email','$Location','$Password');";
        $res2=mysqli_query($conn,$query2);
        

        
        echo "<script>alert('You are successfully authenticated!');</script>";
        echo "<script>window.location.href='./ngo-login.php';</script>";
	
	
    } 



    ?>
 <div class="box">
        <div class="container">
    
            <div class="top">
               <!-- <span>Have an account?</span> -->
                <header>Sign Up</header>
                <form id="sign-up-data" class="sign-up-data" method="post" action="ngo-signup.php" >
            </div>
    
            <div class="input-field">
                <input type="text" class="input" placeholder="Username" id="" name='NGOName' required minlength="2" maxlength="100">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2a5 5 0 1 0 5 5a5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3a3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"/></svg></i>
            </div>
    
            <div class="input-field">
               
                <input type="email" class="input" placeholder=" Email" id="" name='Email' required>
                <i class='fas fa-envelope'> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223l-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044L20.002 18H4z"/></svg></i>
            
                
            </div>

            <div class="input-field">
                <input type="tel" class="input" placeholder="Contact" id="" name='Contact' required pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M17.707 12.293a.999.999 0 0 0-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 0 0 0-1.414l-4-4a.999.999 0 0 0-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435c.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 0 0 0-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712c-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414L9.586 7L8.293 8.293a1 1 0 0 0-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 0 0 .912-.271L17 14.414L19.586 17l-2.006 2.005z"/></svg></i>
            </div>

            <div class="input-field">
                <input type="text" class="input" placeholder="Location" id="" name='Location' required>
                <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4s-4 1.794-4 4s1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2s-2-.897-2-2s.897-2 2-2z"/><path fill="currentColor" d="M11.42 21.814a.998.998 0 0 0 1.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819zM12 4c3.309 0 6 2.691 6 6.005c.021 4.438-4.388 8.423-6 9.73c-1.611-1.308-6.021-5.294-6-9.735c0-3.309 2.691-6 6-6z"/></svg></i>
            </div>

            <div class="input-field">
                <input type="Password" class="input" placeholder="Password" id="" name='Password'  required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="please include 1 uppercase Character,1 lowercase Character and 1 number. ">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C9.243 2 7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zm6 10l.002 8H6v-8h12zm-9-2V7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9z"/></svg></i>
            </div>
    
            <div class="input-field">
                <input type="submit" class="submit" value="Sign Up" id=""name='submitsignup'>
            </div>
</form>
        </div>

    </div>  

<!---<div class="container">
    
        <div class="sign-up" data-aos="zoom-in-up" data-aos-duration="1000"
        data-aos-easing="ease-in-out"> 
        <h1>Sign Up</h1>
            
            <form id="sign-up-data" class="sign-up-data" method="post" action="NGOsignup.php" >
                
                <label for="text" >NGO Name</label>
                <input type="text" id="name" placeholder="Full name" name="NGOName"
                required minlength="2" maxlength="100" />
                <label for="text" >Contact</label>
                <input type="tel" id="phone" placeholder="555-555-5555" name="Contact"
                required pattern="[0-9]{3}[0-9]{3}[0-9]{4}" />
                <label for="text" >Email Address</label>
                <input type="email" id="email" placeholder="email@address.com" name="Email" required />
                <label for="text" >Location</label>
                <textarea type="text" placeholder=" enter location" name="Location"></textarea>
                <label for="text" >Password</label>
                <input type="password" id="password1" placeholder="Create Password (Min. 8 Characters)" name="Password"
                required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="please include 1 uppercase Character,1 lowercase Character and 1 number. "
          />
                <label for="text" >Confirm Password</label>
                <input type="password" id="password2" placeholder="Create Password (Min. 8 Characters)" name="ConfirmPassword"
                required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" title="please include 1 uppercase Character,1 lowercase Character and 1 number. "
          />
                <button type="submit" name="submitsignup" >SignUp</button>-->
        
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="ngologin-signupScript.js"></script>
</body>
</html>