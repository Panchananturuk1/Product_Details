<?php

// Define the database credentials
$host = "localhost";
$port = "3306";
$user = "root";
$password = "";
$database = "myproducts";

// Create a connection
$conn = mysqli_connect($host, $user, $password, $database, $port);

// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";


if(isset($_GET['category'])) {
    $category = $_GET['category'];
    $sql = "SELECT sub_category FROM product_sub_categories WHERE category_id = (SELECT id FROM product_categories WHERE category = '$category')";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row['sub_category'] . "'>" . $row['sub_category'] . "</option>";
    } 
} 
else{
    echo  '<script> alert("ERROR IN GET_SUB_CAT"); </script>';
}
?>
