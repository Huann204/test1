
<div class="head">
        <div class="width-section">
          <div class="header">
            <div class="logo">
              <img src="./assets/img/logo/logo.webp" alt="" />
            </div>
            <div class="btn-header">
              <div class="input-search">
                <input type="text" name="" id="" placeholder="  Bạn muốn tìm gì ?"/>
                <i class="bx bx-search"></i>
                <!-- <div class="search">
                  <i class="bx bx-search"></i>
                </div> -->
              </div>
              <div class="btn-info">
                <ul>
                  <li class="hotline">
                    <i class='bx bxs-phone-call bx-tada' ></i></i>
                    <p>Hotline: 03555 39891</p>
                  </li>
                  <li class="user"><img src="./assets/img/icon header/user.png" alt="">
                  <?php if(isset($user) && isset($user['username'])) { ?>
                      <ul class="sign">
                        <li class="signup"><a href="user.php">Tài Khoản</a></li>
                        <li class="signin"><a href="logout.php">Đăng xuất</a></li>
                      </ul>
                   <?php } else { ?>
                    <ul class="sign">
                      <li class="signup"><a href="login.php">Đăng nhập</a></li>
                      <li class="signin"><a href="register.php">Đăng ký</a></li>
                    </ul>
                  <?php } ?>
                  </li>
                  <li><img src="./assets/img/icon header/map.png" alt=""><span class="count">8</span></li>
                  <li><img src="./assets/img/icon header/heart.png" alt=""><span class="count">0</span></li>
                  <li><img src="./assets/img/icon header/shopping.png" alt=""><span class="count">0</span></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="nav">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="">Sản phẩm</a></li>
                <li><a href="">Sản phẩm khuyến mãi</a></li>
                <li><a href="">Tin tức</a></li>
                <li><a href="introduce.php">Giới thiệu</a></li>
                <li><a href="">Liên hệ</a></li>
                <li style="background-color: red;"><a href="">Đặt hàng nhanh</a></li>
                <li><a href="">chính sách thành viên</a></li>

                
            </ul>
          </div>
        </div>
        <div class="box-real"><img src="https://bizweb.dktcdn.net/100/485/131/themes/906771/assets/breadcrumb.jpg?1710378366461 " alt="" class="real" style = "width:1519px;height:200px"></div>
      </div>