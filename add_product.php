<?php
   // Database connection code
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "myproducts";
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

if(isset($_POST['submit'])) { 
    $category = $_POST['category'];
    $sub_category = $_POST['sub_category'];
    $product_name = $_POST['product_name'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
 
    $sql = "INSERT INTO products (category, sub_category, product_name, unit, price)
    VALUES ('$category', '$sub_category', '$product_name', '$unit', '$price')";
    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    $run = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if($run){

          echo  '<script> alert("Product Sucessfully  added"); </script>';
        // echo "Product added successfully.";
        
                header("Location: http://localhost/products/ManageProduct.php");
      }else
      {
        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "ERROR.";
      }	


    $conn->close();
}
?>
