<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PetShop Cat Upload</title>
    <link rel="stylesheet" href="./CatUpLoad.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <div>
        <p><a href="./Pet.php">Home</a></p>
    </div>
    <form method="POST" enctype="multipart/form-data">
        <label for="" class="Logo">Cat</label>
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
        <button type="submit" name="sub">Update</button>

    </form>
    <?php
    $connect = mysqli_connect('localhost', 'root', '', 'demo');
    if (!$connect) {
        # code...
        echo "No";
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
        move_uploaded_file($image_tmp, "Cat/$image");
        //Viết sql
        if ("" === "$ID") {
            echo "<script>alert('No')</script>";
        } else {
            $sql = "INSERT INTO product1 VALUES('$ID','$name','$price','$amount','$image','$des')";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                echo "<script>alert('Thêm sản phẩm thành công')</script>";
            } else {
                echo "<script>alert('Thêm thất bại')</script>";
            }
        }
    }
    ?>

    <div id="ShowListCat">
        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'demo');
        if (!$connect) {
            echo 'Not Connect';
        }
        $sql = "SELECT * FROM product1";
        $result = mysqli_query($connect, $sql);
        echo "<table>
            <tr>
            <th><h1>ID</h1></th>
            <th><h1>Name</h1></th>
            <th><h1>Price</h1></th>
            <th><h1>Amount</h1></th>
            <th><h1>Image</h1></th>
            <th><h1>Des</h1></th>
            </tr>
            ";
        for ($i = 0; $i <= ($row_product1 = mysqli_fetch_array(($result))); $i++) {
            # code...
            $pro_id = $row_product1['ProductID'];
            $pro_name = $row_product1['ProductName'];
            $pro_price = $row_product1['Price'];
            $pro_amount = $row_product1['Amount'];
            $pro_image = $row_product1['Image'];
            $pro_des = $row_product1['Des'];
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
</body>

</html>