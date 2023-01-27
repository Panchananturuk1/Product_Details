<?php
include('Database.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $category = $row['category'];
        $sub_category = $row['sub_category'];
        $product_name = $row['product_name'];
        $unit = $row['unit'];
        $price = $row['price'];
    }
}

if(isset($_POST['update'])) {
    $id = $_GET['id'];
    $category = $_POST['category'];
    $sub_category = $_POST['sub_category'];
    $product_name = $_POST['product_name'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];

    $query = "UPDATE products SET category = '$category', sub_category = '$sub_category', product_name = '$product_name', unit = '$unit', price = '$price' WHERE id = $id";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="post">
        <div>
            <label for="category">Category:</label>
            <input type="text" name="category" value="<?php echo $category; ?>">
        </div>
        <div>
            <label for="sub_category">Sub Category:</label>
            <input type="text" name="sub_category" value="<?php echo $sub_category; ?>">
        </div>
        <div>
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" value="<?php echo $product_name; ?>">
        </div>
        <div>
            <label for="unit">Unit:</label>
            <input type="text" name="unit" value="<?php echo $unit; ?>">
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" name="price" value="<?php echo $price; ?>">
        </div>
        <div>
            <button type="submit" name="update">Update</button>
        </div>
    </form>
</body>
</html>
<?php
mysqli_close($conn);
?>