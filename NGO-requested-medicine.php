<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "root123";
$database = "node";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the database
$query = "SELECT * FROM ngo_med_request1"; // Replace "your_table_name" with your actual table name
$search_result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
  <title>Donation-history</title>

  <style>
    .name{
      margin:0;
      background-color: #AEE2FF;
            
    }
    a{
      color: rgb(13, 110, 253);
    }
    body{
    margin: 0;
    padding:0;
    }
    .navbar{
      display: flex;
      position: relative;
      background-color: #F0EEED;
      margin-bottom: 20px;
            
    }
    .navbar li{
      list-style: none;
    }
    .navbar-links ul{
      display: flex;
      gap: 15px;
      padding-left: 10px;
      margin-top: 16px;
    }
    
    h4{
      font-family: "'Suez One', serif";
      margin:0;
      padding: 5px;
      font-size: 25px;
    }
    h2{
      font-family: "'Suez One', serif";
      margin-left: 30px;
      font-size: 30px;
    }
    #myInput {
    background-image: url('./IMAGES/Search-icon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 1030px; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
    margin-left: 30px;
  }
  
  #myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 1090px; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
    margin-left: 30px;
  }
  
  #myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
  }
  
  #myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd;
  }
  
  #myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
  }
  #Logout{
    padding-left: 650px;
  }
   /* Additional styles for desktop */
   @media (min-width: 1920px) {
        .container {
            max-width: 1400px; /* Adjust the maximum width based on your preference */
            margin: 0 auto;
        }
    }
  </style>
</head>

<body>

    <div class="name">
        <h4><strong>Online Medicine Donation</strong></h4>
    </div>
    <div class="navbar">
        <div class="navbar-links">
        <ul>
            <li><a href="./NGO-home.html">Home</a></li>
            <li><a href="./ngo-request.php">Request Medicine</a></li>
            <li><a href="./NGO-requested-medicine.php">List of Requested Medicine</a></li>
            <li id="Logout"><a href="./Myhome.html">Logout</a></li>
        </ul>
        </div>
    </div>

  <h2>List of Requested Medicine</h2>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<table id="myTable">
  <tr class="header">
   <!-- <th>S.No</th>-->
    <th>Medicine Name</th>
    <th>Description</th>
    <th>Delivery Address</th>
    <th>Quantity</th>
  </tr>
        <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
            
                <td><?php echo $row['Medicine_name']; ?></td>
                <td><?php echo $row['Description']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><?php echo $row['Quantity']; ?></td>
            </tr>
        <?php endwhile;?>
    </table>
  </tr>
</table>

<script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>

</body>
</html>