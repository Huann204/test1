<?php require_once 'config/config.php';?> 

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $sql = "INSERT INTO quanlysanpham(name, price) VALUES ('$name', '$price')";
    mysqli_query($conn,$sql);
    header("Location: " . $_SERVER['PHP_SELF']);
}
$sanPham = mysqli_query($conn,"SELECT * FROM quanlysanpham");
// var_dump($sanPham);
?>



<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Sản Phẩm</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../assets/css/quanlysanpham.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Quản Lý Sản Phẩm</h1>
        </header>
        <div class="main-content">
        <div class="add-product-form">
                <h2>Thêm Sản Phẩm</h2>
                <form action = "" method = "POST">
                    <div class="form-group">
                        <label for="product-name">Tên Sản Phẩm</label>
                        <input type="text" id="product-name" name = "name" placeholder="Nhập tên sản phẩm" required>
                    </div>
                    <div class="form-group">
                        <label for="product-price">Giá</label>
                        <input type="text" id="product-price" name = "price" placeholder="Nhập giá sản phẩm" required>
                    </div>
                    <button type="submit" name = "submit" class="add-btn">Thêm</button>
                </form>
            </div>
            
            <div class="product-list">
            <h1>Quản Lý Sản Phẩm</h1>
                <table class="product-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Hành Động</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sanPham as $key => $value) :?>
                        <tr>
                            <td><?php echo $key+1 ?></td>
                            <td><?php echo $value['name'] ?></td>
                            <td><?php echo $value['price'] ?> VND</td>
                            <td>
                                <a href="edit.php?id=<?php echo $value['id'] ?>"><button title = "Sửa" class="edit-btn">Chỉnh sửa</button></a>
                                <a href="delete.php?id=<?php echo $value['id']?>"><button title = "Xóa" class="delete-btn">Xóa</button></a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                        <!-- <tr>
                            <td>2</td>
                            <td>Laptop</td>
                            <td>20,000,000 VND</td>
                            <td>
                                <button class="edit-btn">Chỉnh sửa</button>
                                <button class="delete-btn">Xóa</button>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</body>
</html>