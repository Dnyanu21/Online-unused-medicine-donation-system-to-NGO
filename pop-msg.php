<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Message</title>
    <link rel="stylesheet" href="./Donate-form.css">
    
    <style>
    /* Styles for the popup message page */
    body {
        background: #AEE2FF;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        color: #fff;
        font-family: Arial, sans-serif;
    }
    .popup {
        width: 400px;
        background: #fff;
        border-radius: 6px;
        text-align: center;
        padding: 30px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.3);
    }
    .popup img {
        width: 100px;
        margin-bottom: 20px;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
    .popup h2 {
        font-size: 38px;
        font-weight: 500;
        margin: 10px 0;
        color: black;
    }
    .popup p {
        margin-bottom: 20px;
        color: black;
    }
    .popup button {
        padding: 10px 20px;
        background: #6fd649;
        color: #fff;
        border: 0;
        outline: none;
        font-size: 18px;
        border-radius: 4px;
        cursor: pointer;
        box-shadow: 0 5px 5px rgba(0,0,0,0.2);
    }
    a{
        text-decoration: none;
        color: white;
    }
    </style>
</head>
<body>
<div class="popup">
    <img src="./IMAGES/tick.jpg" alt="">
    <h2>Thank You!</h2>
    <p>Your details have been successfully submitted. Thanks!</p>
    <button type="button" ><a href="./Doner-home.html">OK</a></button>
</div>
</body>
</html>