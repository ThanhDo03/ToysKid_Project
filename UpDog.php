<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PetShop Dog Upload</title>
    <link rel="stylesheet" href="./UpLoadDog.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <div>
        <p><a href="./Pet.php">Home</a></p>
    </div>
    <!-- Add -->
    <form action="" method="POST" enctype="multipart/form-data" class="form1">
        <label for="" class="Logo">Dog</label>
        <label for="">ID</label>
        <input type="text" name="id" class="input">
        <br>
        <br>
        <label for="">Name</label>
        <input type="text" name="name" class="input">
        <br>
        <br>
        <label for="">Price</label>
        <input type="text" name="price" class="input">
        <br>
        <br>
        <label for="">Amount</label>
        <input type="text" name="amount" class="input">
        <br>
        <br>
        <label for="">Image</label>
        <input type="file" name="image" class="input1">
        <br>
        <br>
        <label for="">Des</label>
        <textarea name="des" id="" cols="30" rows="10" class="input"></textarea>
        <br>
        <button type="submit" name="sub">ADD</button>

    </form>
    <?php

    use LDAP\Result;

    $connect = mysqli_connect('localhost', 'root', '', 'demo');
    if (!$connect) {
        # code...
        echo "Not Connect";
    }

    if (isset($_POST['sub'])) {
        # code...
        $ID = trim($_POST['id']);
        $name = $_POST['name'];
        $price = $_POST['price'];
        $amount = $_POST['amount'];
        $des = $_POST['des'];
        // Chú ý nhận dữ liệu kiểu file từ Form
        $image = $_FILES['image']['name'];
        // Đưa ảnh từ máy tính lên tmp
        $image_tmp = $_FILES['image']['tmp_name'];
        // Di chuyển ảnh từ tmp sang thư mục cần lưu
        move_uploaded_file($image_tmp, "Dog/$image");
        if ("" === "$ID") {
            echo "<script>alert('No')</script>";
        } else {
            $sql = "INSERT INTO product VALUES('$ID','$name','$price','$amount','$image','$des')";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                echo "<script>alert('Thêm sản phẩm thành công') </script>";
            } else {
                echo "<script>alert('Thêm thất bại') </script>";
            }
        }
    }
    ?>
    <div id="ShowListDog">

        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'demo');
        if (!$connect) {
            echo 'Not Connect';
        }
        $sql = "SELECT * FROM product";
        $result = mysqli_query($connect, $sql);
        echo "<table>
        <tr>
            <th><h1>ID</h1></th>
            <th><h1>Name</h1></th>
            <th><h1>Price</h1></th>
            <th><h1>Amount</h1></th>
            <th><h1>Image</h1></th>
            <th><h1>Des</h1></th>
        </tr>";
        while ($row_product = mysqli_fetch_array(($result))) {
            $pro_id = $row_product['ProductID'];
            $pro_name = $row_product['ProductName'];
            $pro_price = $row_product['Price'];
            $pro_amount = $row_product['Amount'];
            $pro_image = $row_product['Image'];
            $pro_des = $row_product['Des'];


            echo "
        <tr>
            <td><h1>$pro_id</h1></td>
            <td><h1>$pro_name</h1></td>
            <td><h1>$pro_price</h1></td>
            <td><h1>$pro_amount</h1></td>
            <td><h1>$pro_image</h1></td>
            <td><h1>$pro_des</h1></td>
        </tr>
        ";
        }
        echo "</table>";
        ?>
    </div>
    <!-- Edit -->
    <form action="" method="POST" enctype="multipart/form-data" class="form2">
        <label for="" class="Logo">Dog</label>
        <label for="">ID</label>
        <input type="text" name="id1" class="input">
        <br>
        <br>
        <label for="">Name</label>
        <input type="text" name="name1" class="input">
        <br>
        <br>
        <label for="">Price</label>
        <input type="text" name="price1" class="input">
        <br>
        <br>
        <label for="">Amount</label>
        <input type="text" name="amount1" class="input">
        <br>
        <br>
        <label for="">Image</label>
        <input type="file" name="image1" class="input1">
        <br>
        <br>
        <label for="">Des</label>
        <textarea name="des1" id="" cols="30" rows="10" class="input"></textarea>
        <br>
        <button type="submit" name="sub1">Update</button>

    </form>
    <?php
    $connect = mysqli_connect('localhost', 'root', '', 'demo');
    if (!$connect) {
        echo "Not Connect";
    }
    if (isset($_POST['sub1'])) {
        $proid = $_POST['id1'];
        $proname = $_POST['name1'];
        $proprice = $_POST['price1'];
        $proamount = $_POST['amount1'];
        $prodes = $_POST['des1'];

        $proimage = $_FILES['image1']['name'];
        $image_tmp = $_FILES['image1']['tmp_name'];
        move_uploaded_file($image_tmp, "Dog/$proimage");
        if ("" === "$proid") {
            echo "<script>alert('No')</script>";
        } else {
            $sql = "UPDATE product SET ProductName = '$proname', Price = '$proprice', Amount = '$proamount', Image = '$proimage', Des = '$prodes' WHERE ProductID = '$proid'";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                echo "<script>alert('Fixed product') </script>";
            } else {
                echo "<script>alert('Failure') </script>";
            }
        }
    }
    ?>

    <!-- Delete -->
    <form action="" method="POST" class="form3">
        <label for="" class="Logo" style="color:#e79531;">Dog</label>
        <label for="" style="color:#e79531;">ID</label>
        <input type="text" name="Id" class="input">
        <button type="submit" name="sub2">DELETE</button>
    </form>
    <?php
    $connect = mysqli_connect('localhost', 'root', '', 'demo');
    if (!$connect) {
        echo 'Not Connect';
    }
    if (isset($_POST['sub2'])) {
        $ProId = $_POST['Id'];
        $sql = "DELETE FROM product WHERE ProductID = '$ProId'";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "<script>alert('Delete product successfully') </script>";
        } else {
            echo "<script>alert('Failure') </script>";
        }
    }
    ?>
</body>

</html>