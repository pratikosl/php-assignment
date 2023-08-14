<?php
require 'connection.php';
mysqli_select_db($connect, "product");
session_start();
$cname='';
$plh=$_POST['fprice'];
$sql = " SELECT * FROM product ORDER BY id";
$result = mysqli_query($connect, $sql);

$selectedcategory = $_POST['fcategory'];

function selectCategory($selectedcategory){
    if($selectedcategory=='1') $cname="headphones";
    else if($selectedcategory=='2') $cname="Wired Earphones";
    else if($selectedcategory=='3') $cname="earbuds";
    else  $cname="Neckband";
    return $cname;
}

if($selectedcategory>'0' AND $plh=="a"){
    $category=selectCategory($selectedcategory);
    $sql="SELECT * FROM product WHERE category= '$category' ORDER BY price ASC";
    $result=mysqli_query($connect,$sql);
}

else if($selectedcategory>'0' AND $plh=="b"){
    $category=selectCategory($selectedcategory);
    $sql="SELECT * FROM product WHERE category= '$category' ORDER BY price DESC";
    $result=mysqli_query($connect,$sql);
}
else{
    echo "no filter chosen";
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catelog</title>
</head>

<body>
    <div class="filter">
        <form action="display.php" method="post">
            <h4>Filter by</h4>
            <select name="fcategory" >
                <option>Category</option>
                <option value="1"><?php echo $option = "headphones"; ?></option>
                <option value="2"><?php echo $option = "wired earphone"; ?></option>
                <option value="3"><?php echo $option = "earbuds"; ?></option>
                <option value="4"><?php echo $option = "neckband"; ?></option>
            </select>
            <select name="fprice" >
                <option value="">Sort by</option>
                <option value="a"><?php echo $option = "Price: Low to High";?></option>
                <option value="b"><?php echo $option = "Price: High to Low";?></option>
            </select>
            <button type="submit" name="search">Submit</button>
        </form>
    </div>
    <table align="center" border="1">
        <tr>
            <td>Product Name</td>
            <td>Category</td>
            <td>Price</td>
            <td>Discount</td>
        </tr>
        <?php
        while ($rows = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $rows['pname']; ?></td>
                <td><?php echo $rows['category']; ?></td>
                <td><?php echo $rows['price']; ?></td>
                <td><?php echo $rows['discount']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <script>

    </script>
</body>

</html>