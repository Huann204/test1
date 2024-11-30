<?php require_once 'admincp/config/config.php';?>
<?php
session_start();
$err=[];
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM tbl_user WHERE email = '$email'";
    $query = mysqli_query($conn, $sql);
    $data =mysqli_fetch_assoc($query);
    $checkEmail = mysqli_num_rows($query);
    if($checkEmail==1){
        $checkPass = password_verify($password,$data['password']);
        if($checkPass==true){
            //lưu vào sesion
            $_SESSION['user'] =$data;
            header('location: user.php');
        }
        else{
            $err['password']='Sai mật khẩu';
        }
    }
    else{
        $err['email']='email không tồn tại';
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
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
                    <a class="active" href="">Đăng Nhập</a>
                    <a href="register.php">Đăng ký</a>
                </div>
                <span style="text-align:center; display:block">ĐĂNG NHẬP</span><br>
                <form action="" method = "POST">
                    <div class="form-signup">
                        <input type="text" name="email" id="" placeholder="Email">
                    </div>
                    <p class="error"><?php echo (isset($err['email']))?$err['email']:'' ?></p>
                    <div class="form-signup">
                        <input type="password" name="password" id="" placeholder="Password">
                    </div>
                    <p class="error"><?php echo (isset($err['password']))?$err['password']:'' ?></p>
                    <button class="form-signup btn-login" name="submit" type="submit">ĐĂNG NHẬP</button>
                    <span class="quenmk">Quên mật khẩu</span>
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