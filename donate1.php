<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $host = "localhost";
    $user = "root";
    $pass = "root123";
    $db = "node";
    $conn = mysqli_connect($host, $user, $pass, $db) or die('Error Connecting');

    $Name = $_POST['Name'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $Medicine_name = $_POST['Medicine_name'];
    $Manufacture_date = $_POST['Manufacture_date'];
    $Expiry_date = $_POST['Expiry_date'];
    $Description = $_POST['Description'];
    $Quantity = $_POST['Quantity'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];

    $query1 = "INSERT INTO donar3(Name, Phone, Email, Medicine_name, Manufacture_date, Expiry_date, Description, Quantity, Address, City) VALUES ('$Name', '$Phone', '$Email', '$Medicine_name', '$Manufacture_date', '$Expiry_date', '$Description', '$Quantity', '$Address', '$City')";
    $res1 = mysqli_query($conn, $query1);

    if ($res1) {
       // echo "<script>alert('You have successfully donated!');</script>";
        echo "<script>window.location.href='./pop-msg.php';</script>";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="Donate-form.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
        a {
            color: grey;
        }
        a:hover {
            color: black;
        }
    </style>
</head>
<body>
<div class="container">
    <form id="donate-form" class="donate-form" data-aos-easing="ease-in-out" method="post" action="donate1.php">
    <form action="./Popup-msg.php" target="_blank">
        <div class="row">
            <div class="col">
                <h3 class="title">Donor details</h3>
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="Enter Full Name" name="Name" required minlength="2" maxlength="100">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="example@example.com" name="Email" required>
                </div>
                <div class="inputBox">
                    <span>Contact no. :</span>
                    <input type="tel" placeholder="555-555-5555" name="Phone" required pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="room - street - locality" name="Address" required>
                </div>
                <div class="inputBox">
                    <span>City :</span>
                    <input type="text" placeholder="mumbai" name="City" required>
                </div>
            </div>
            <div class="col">
                <h3 class="title">Medicine Details</h3>
                <div class="inputBox">
                    <span>Medicine name :</span>
                    <input type="text" placeholder="Enter Medicine name" name="Medicine_name" required minlength="2" maxlength="100">
                </div>
                <div class="inputBox">
                    <span>Manufacture Date :</span>
                    <input type="date" placeholder="MM/DD/YYYY" name="Manufacture_date" required>
                </div>
                <div class="inputBox">
                    <span>Expiry date :</span>
                    <input type="date" placeholder="MM/DD/YYYY" name="Expiry_date" required>
                </div>
                <div class="inputBox">
                    <span>Description :</span>
                    <input type="text" placeholder="Description of medicine" name="Description" required>
                </div>
                <div class="inputBox">
                    <span>Count :</span>
                    <input type="number" placeholder="eg. 5" name="Quantity" required>
                </div>
            </div>
        </div>
        <input type="submit" value="Donate" class="submit-btn" name="submitid">
    </form>
    </form>
</div>    

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="donateScript.js"></script>
</body>
</html>
