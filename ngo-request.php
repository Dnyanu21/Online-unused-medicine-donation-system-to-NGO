<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $host = "localhost";
    $user = "root";
    $pass = "root123";
    $db = "node";
    $conn = mysqli_connect($host, $user, $pass, $db) or die('Error Connecting');

    $NGOName = $_POST['NGOName'];
    $Email = $_POST['Email'];
    $Address = $_POST['Address'];
    $Medicine_name = $_POST['Medicine_name'];
    $Quantity = $_POST['Quantity'];
    $Description = $_POST['Description'];

    $query1 = "INSERT INTO ngo_med_request1(NGOName, Email,Address, Medicine_name, Quantity,Description) VALUES ('$NGOName' , '$Email','$Address', '$Medicine_name', '$Quantity','$Description')";
    $res1 = mysqli_query($conn, $query1);

    if ($res1) {
        echo "<script>window.location.href='./pop-msg.php';</script>";
        echo "<script>window.location.href='./NGO-home.html';</script>";
	
    } else {
        echo "<script>alert('Error occurred while donating. Please try again.');</script>";
	

    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO request form</title>
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="Donate-form.css">

</head>
<body>

<div class="container">


    <form id="request-form" class="request-form" data-aos-easing="ease-in-out" method="post" action="ngo-request.php">
        <h2 style="text-align: center;">Request Medicine</h2>

        <div class="row">

            <div class="col">

                <div class="inputBox">
                    <span>NGO Name:</span>
                    <input type="text" placeholder="Enter Full Name" name='NGOName' required minlength="2" maxlength="100">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="example@example.com" name='Email' required>
                </div>
        
                <div class="inputBox">
                    <span>Delivery Address :</span>
                    <input type="text" placeholder="room - street - locality" name='Address' required>
                </div>

            <div class="col">

                <div class="inputBox">
                    <span>Medicine name :</span>
                    <input type="text" placeholder="Enter Medicine name" name='Medicine_name' required minlength="2" maxlength="100">
                </div>

                <div class="inputBox">
                    <span>Count :</span>
                    <input type="number" placeholder="eg.5" name='Quantity' required>
                </div>

                <div class="inputBox">
                    <span>Description :</span>
                    <input type="text" placeholder="Description of Medicine" name="Description" required>
                </div>
               
             
            </div>
    
        </div>

        <input type="submit" value="Request" class="submit-btn" name="REQUEST_METHOD">

    </form>

</div>    
    
</body>
</html>