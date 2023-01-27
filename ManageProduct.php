<?php
// Define the database credentials
// $host = "localhost";
// $port = "3306";
// $user = "root";
// $password = "";
// $database = "myproducts";

// // Create a connection
// $conn = mysqli_connect($host, $user, $password, $database, $port);

// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
           border-collapse: collapse;
           width: 50%;
           margin: auto;
           margin-top: 5%;
        }

        th,td{
            border: 1px solid black;
        }
    </style>
</head>
<body>

    <table>
        <tr>
          <th>Sl. No.</th>
          <th>Category</th>
          <th>Subcategory</th>
          <th>Product Name</th>
          <th>Unit Price</th>
          <th>Price</th>
          <th>Option</th>
        </tr>
        <!-- <tr>
          <td>1</td>
          <td>Electronics</td>
          <td>Computers</td>
          <td>Laptop</td>
          <td>2 Unit</td>
          <td>$1000</td>
          <td><a href="#">View</a> | <a href="#">Edit</a> | <a href="#">Delete</a></td>
        </tr> -->

        <?php

$host = "localhost";
$port = "3306";
$user = "root";
$password = "";
$database = "myproducts";

// Create a connection
$conn = mysqli_connect($host, $user, $password, $database, $port);

    $sql = "SELECT id, category, sub_category, product_name, unit, price FROM products";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['category'] . "</td>";
        echo "<td>" . $row['sub_category'] . "</td>";
        echo "<td>" . $row['product_name'] . "</td>";
        echo "<td>" . $row['unit'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
            echo "<td>";
            echo "<a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."'>Delete</a>";
            echo "</td>";
            // other data rows
            echo "</tr>";
        echo "</tr>";
    }
    ?>

      </table>



      
      
    
</body>
</html>