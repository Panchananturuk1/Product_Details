<?php
    // Connect to the database
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myproducts";
    $conn = mysqli_connect($host, $username, $password, $dbname);
    
    // Get the product ID from the URL
    // $product_id = $_GET['product_id'];
    $id = $_GET['id'];

    
    // Delete the product from the database
    $sql = "DELETE FROM products WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    // Redirect to the product list page
    header("Location: ManageProduct.php");
?>
