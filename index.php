



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="subcat.js"></script>
</head>
<body>

    <?php include("Database.php"); ?>
    <form action="add_product.php" method="post" class="container mt-4">
        <div class="form-row" >
            <div class="form-group col-md-4">
                <label for="inputState">Product Category</label>
                
                <select id="inputState" name="category" onchange="populateSubCategories()" class="form-control">
                <option selected>Choose...</option>
                <?php
                    // PHP code to fetch product categories from the database and populate the select options
                    $sql = "SELECT category FROM product_categories";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['category'] . "'>" . $row['category'] . "</option>";
                    }
                    ?>
                </select>
              </div>

              <div class="form-group col-md-4">
                <label for="sub_category">Sub-category</label>
                <select id="sub_category" name="sub_category" class="form-control">
                <option selected>Choose...</option>
                <option>Paste</option>
                <option>Soap</option>
                <!-- <script>console.log("hello world")</script> -->
                <?php
                    if(isset($_GET['category'])) {
                        $category = $_GET['category'];
                        $sql = "SELECT sub_category FROM product_sub_categories WHERE category_id = (SELECT id FROM product_categories WHERE category = '$category')";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['sub_category'] . "'>" . $row['sub_category'] . "</option>";
                        }
                    }
                ?>
                </select>
                </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Product Name</label>
                <input type="text" name="product_name" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </div>

            <div class="form-group col-md-4">
                <label for="inputState">Unit</label>
                <select id="inputState" name="unit" class="form-control">
                  <option selected>Choose...</option>
                  <?php
                        // PHP code to fetch units from the database and populate the select options
                        $sql = "SELECT unit FROM units";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['unit'] . "'>" . $row['unit'] . "</option>";
                        }
                        ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="formGroupExampleInput" name="price">Price</label>
                <input type="text" name="price"  class="form-control w-25" id="formGroupExampleInput" placeholder="Example input">
            </div>
        
        <br>
        <button type="submit"  name="submit" class="btn btn-primary">Add</button>
        <input type="reset" value="Reset" class="btn btn-primary">
      </form>
    
</body>
</html>