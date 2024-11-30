<?php require_once 'admincp/config/config.php';?>
  <?php
  $err=[];
  if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = trim($_POST['password']);
    $rPassword = trim($_POST['rPassword']);
    if(empty($username)){
        $err['username'] = "Bạn chưa nhập username";
    }
    if(empty($email)){
        $err['email'] = "Bạn chưa nhập email";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err['email'] = "Email không hợp lệ";
    }
    if(empty($phone)){
        $err['phone'] = "Bạn chưa nhập phone";
    }
    if (!preg_match('/^[0-9]{10,11}$/', $phone)) {
        $err['phone'] = "Số điện thoại không hợp lệ";
    }    
    if(empty($password)){
        $err['password'] = "Bạn chưa nhập password";
        
    }if (empty($rPassword)) {
        $err['rPassword'] = "Bạn chưa nhập xác nhận mật khẩu";
    } elseif ($rPassword != $password) {
        $err['rPassword'] = "Mật khẩu xác nhận không trùng khớp";
    }
    // var_dump(empty($err));
    // die();
    if(empty($err)==true){
        $pass= password_hash($password,PASSWORD_DEFAULT);
        // var_dump($pass);
        // die();
        // if($conn -> query("INSERT INTO tbl_user (Username,Email,Phone,Password) VALUES ('$username','$email','$phone','$pass') ")){
        //     // echo "<script>alert('Đăng ký thành công');</script>";
        //     // header('Location: login.php');
        //     echo "<script>alert('Đăng ký thành công'); window.location.href='login.php';</script>";
        //     exit();
        // }
        $sql = "INSERT INTO tbl_user(username,email,Phone,Password)VALUES ('$username','$email','$phone','$pass')";       
        mysqli_query($conn,$sql);
        echo "<script>alert('Đăng ký thành công');window.location.href='login.php';</script>";
        // die();
        // header('Location: login.php');
        exit();
    }
}
$conn ->close();
  ?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        p.error {
            color: red;
        }

    </style>
</head>
<body>
    <div class="container">
        <?php
        include 'header_user.php';
        ?>
        <div class="width-section">
            <div class="box-login">
                <div class="box-login-title">
                    <a href="login.php">Đăng Nhập</a>
                    <a class="active" href="register.php">Đăng ký</a>
                </div>
                <span style="text-align:center; display:block">ĐĂNG KÝ</span><br>
                <form action="" method="POST">
                    <div class="form-signup">
                        <input type="text" name="username" id="" placeholder="Họ Và Tên">
                    </div>
                    <p class="error"><?php echo (isset($err['username']))?$err['username']:'' ?></p>
                    <div class="form-signup">
                        <input type="text" name="email" id="" placeholder="Email">
                    </div>
                    <p class="error"><?php echo (isset($err['email']))?$err['email']:'' ?></p>

                    <div class="form-signup">
                        <input type="text" name="phone" id="" placeholder="Phone">
                    </div>
                    <p class="error"><?php echo (isset($err['phone']))?$err['phone']:'' ?></p>

                    <div class="form-signup">
                        <input type="password" name="password" id="" placeholder="Password">
                    </div>
                    <p class="error"><?php echo (isset($err['password']))?$err['password']:'' ?></p>

                    <div class="form-signup">
                        <input type="password" name="rPassword" id="" placeholder="Confirm password">
                    </div>
                    <p class="error"><?php echo (isset($err['rPassword']))?$err['rPassword']:'' ?></p>

                    <button class="form-signup btn-login" name="submit" type="submit">ĐĂNG KÝ</button>
                    <span class="quenmk">Hoặc đăng nhập bằng</span>
                    <div class="mxh">
                        <a href=""><img src="https://bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg" alt="" class="fb-google"></a>
                        <a href=""><img src="https://bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg" alt="" class="fb-google"></a>
                    </div>
                </form>
            </div>
        </div>
        <?php
            include 'footer.php';
            ?>
</body>
</html>