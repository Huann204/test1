<?php require_once 'admincp/config/config.php';?>
<?php
session_start();
$user= $_SESSION['user'];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php
        include 'header_user.php';
        ?>
        <div class="width-section">
         <div class="account">
            <div class="title-account">
                <h5>TRANG TÀI KHOẢN</h5>
                <p>Xin chào <span><?php echo $user['username']?></span> !</p>
            </div>
            <div class="info-acccount">
                <h5>THÔNG TIN TÀI KHOẢN</h5>
                <p><strong>Họ Tên:</strong> <?php echo $user['username']?></p>
                <p><strong>Email:</strong> <?php echo $user['email']?></p>
            </div>
         </div>
    
        </div>
        <?php
            include 'footer.php';
            ?>
</body>
</html>