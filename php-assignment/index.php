<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'connection.php';
    mysqli_select_db($connect, "product");

    $name=$_POST['name'];
    $category=$_POST['category'];
    $price=$_POST['price'];
    $discount=$_POST['discount'];

    $sql="INSERT INTO product (pname, category, price, discount) VALUES ('$name', '$category', '$price', '$discount')";
    $result=mysqli_query($connect,$sql);

    header("Location:display.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Adding</title>
</head>

<body>
    <div class="container">
        <h3>Products</h3>
        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="Enter Product Name" required>
            <input type="text" name="category" placeholder="Enter Category" required>
            <input type="number" name="price" placeholder="Enter Price" required>
            <input type="number" name="discount" placeholder="Enter Discount" required>
            <button type="submit">Submit</button>

        </form>
    </div>
</body>

</html>