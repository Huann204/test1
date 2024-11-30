<?php
session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user']; // Lấy dữ liệu người dùng từ session
} else {
    $user = null; //chưa đăng  Nếu nhập, gán giá trị null
}     
?>

<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bán Hàng</title>
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/main.css">

    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">

  </head>
  <body>
    <div class="container">
      <?php
      include("header.php");
      ?>

      <!-- content -->
      <div class="content">
        <div class="width-section">
            <div class="box-content">
                <div class="title-index">
                    <div class="title-name">
                        <a href="">Danh mục nổi bật</a> <img src="./assets/img/title-name/leaf.webp" alt="" class="leaf">
                    </div>
                    <div class="btn-control">
                        <div class="list-btn-control"><img src="./assets/img/btn control/trai.png" alt=""></div>
                        <div class="list-btn-control"><img src="./assets/img/btn control/phai.png" alt=""></div>

                    </div>
                </div>
                <div class="swiper-wrapper">
                  <div class="list-food">
                    <div class="food">
                      <img src="./assets/img/food-list/food1.webp" alt="">
                      <p>Rau củ</p>
                    </div>
                    <div class="food">
                      <img src="./assets/img/food-list/food2.webp" alt="">
                      <p>Trái cây</p>
                    </div>
                    <div class="food">
                      <img src="./assets/img/food-list/food3.webp" alt="">
                      <p>Đồ khô</p>
                    </div>
                    <div class="food">
                      <img src="./assets/img/food-list/food4.webp" alt="">
                      <p>Nước ép</p>
                    </div>
                    <div class="food">
                      <img src="./assets/img/food-list/food5.webp" alt="">
                      <p>Salad</p>
                    </div>
                    <div class="food">
                      <img src="./assets/img/food-list/food6.webp" alt="">
                      <p>Thực phẩm khác</p>
                    </div>
                  </div>
                </div>




                <!-- ok -->
                <div class="title-index">
                  <div class="title-name">
                      <a href="">Danh mục nổi bật</a> <img src="./assets/img/title-name/leaf.webp" alt="" class="leaf">
                      <span class="font16-block">Chương trình khuyến mãi hấp dẫn đang chờ đợi bạn</span>
                      <strong style="font-size: 14px;">Chương trình đã kết thúc, hẹn gặp lại trong thời gian sớm nhất!</strong>
                  </div>
                  <div class="btn-control">
                      <div class="list-btn-control"><img src="./assets/img/btn control/trai.png" alt=""></div>
                      <div class="list-btn-control"><img src="./assets/img/btn control/phai.png" alt=""></div>

                  </div>
              </div>
              <div class="swiper-wrapper">
                <div class="list-food">
                  <div class="food sale">
                    <img src="./assets/img/sale/1.webp" alt="">
                    <strong>Kim chi cải thảo cắt lát Bibigo Ông Kim's gói</strong>
                    <div class="price-box">
                      12000₫ <span>13500₫</span>
                    </div>
                    <div class="elio-productcount">
                      <div class="line">
                        <span style="width: 80%;"></span>
                        <i class="title">
                          Đã bán 163
                        </i>
                      </div>
                    </div>
                    <div class="smart">Giảm 11%</div>
                    <div class="shopping">
                     <a href=""> <a href=""><i class='bx bxs-shopping-bag' ></i></a></a>
                      <i class='bx bx-search' ></i>
                      <i class='bx bxs-heart'></i>
                    </div>
                  </div>
                  <div class="food sale">
                    <img src="./assets/img/sale/2.webp" alt="">
                    <strong>Xà lách búp mỡ</strong>
                    <div class="price-box">
                      16.000₫ <span>20.000₫</span>
                    </div>
                    <div class="elio-productcount">
                      <div class="line">
                        <span></span>
                        <i class="title">
                          Đã bán 128
                        </i>
                      </div>
                    </div>
                    <div class="smart">Giảm 11%</div>
                    <div class="shopping">
                      <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                      <i class='bx bx-search' ></i>
                      <i class='bx bxs-heart'></i>
                    </div>
                  </div>
                  <div class="food sale">
                    <img src="./assets/img/sale/3.webp" alt="">
                    <strong>Xà lách xoong Đà Lạt</strong>
                    <div class="price-box">
                      4.500₫ <span>9.000₫</span>
                    </div>
                    <div class="elio-productcount">
                      <div class="line">
                        <span style="width: 30%;"></span>
                        <i class="title">
                          Đã bán 61
                        </i>
                      </div>
                    </div>
                    <div class="smart">Giảm 11%</div>
                    <div class="shopping">
                      <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                      <i class='bx bx-search' ></i>
                      <i class='bx bxs-heart'></i>
                    </div>
                  </div>
                  <div class="food sale">
                    <img src="./assets/img/sale/4.webp" alt="">
                    <strong>Bột mì đa dụng Meizan cao cấp gói 1kg</strong>
                    <div class="price-box">
                      20.800₫ <span>26.300                                                                                                                                                                          ₫</span>
                    </div>
                    <div class="elio-productcount">
                      <div class="line">
                        <span style="width: 25%;"></span>
                        <i class="title">
                          Đã bán 49
                        </i>
                      </div>
                    </div>
                    <div class="smart">Giảm 11%</div>
                    <div class="shopping">
                      <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                      <i class='bx bx-search' ></i>
                      <i class='bx bxs-heart'></i>
                    </div>
                  </div>
                  <div class="food sale">
                    <img src="./assets/img/sale/5.webp" alt="">
                    <strong>Rong biển nấu canh Ottogi gói 20g</strong>
                    <div class="price-box">
                      21.000₫ <span>27.000₫</span>
                    </div>                                                                                                                                            
                    <div class="elio-productcount">
                      <div class="line">
                        <span style="width: 40%;"></span>
                        <i class="title">
                          Đã bán 101
                        </i>
                      </div>
                    </div>
                    <div class="smart">Giảm 11%</div>
                    <div class="shopping">
                      <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                      <i class='bx bx-search' ></i>
                      <i class='bx bxs-heart'></i>
                    </div>
                  </div>
                  
                
                </div>
                <div class="see-more">
                  <a class="see-more-btn">Xem tất cả</a>
                </div>
              </div>


              <!-- ok2 -->
              <div class="title-index">
                <div class="title-name">
                    <a href="">Dịch vụ đặc biệt của chúng tôi</a> <img src="./assets/img/title-name/leaf.webp" alt="" class="leaf">
                    <span class="font16-block">Những dịch vụ tốt nhất dành cho khách hàng của chúng tôi</span>
                    
                </div>
                <div class="btn-control">
                    <div class="list-btn-control"><img src="./assets/img/btn control/trai.png" alt=""></div>
                    <div class="list-btn-control"><img src="./assets/img/btn control/phai.png" alt=""></div>

                </div>
            </div>
            <div class="swiper-wrapper">
              <div class="list-food">
                <div class="food service">
                  <img src="./assets/img/service/1.webp" alt="">
                  <h3>Rau hữu cơ tươi</h3>
                  <p class="text">Được trồng theo phương pháp hiện đại nhất,<br> đạt tiêu chuẩn quốc tế, vô cùng an toàn khi sử dụng.</p>
                  <a href="" class="see-more-btn">Tìm hiểu thêm</a>
                </div>
                <div class="food service">
                  <img src="./assets/img/service/2.webp" alt="">
                  <h3>Giao hàng nhanh chóng</h3>
                  <p class="text">Giao hàng trong thời gian nhanh nhất để đảm bảo chất lượng tốt nhất cho những sản phẩm bạn đã đặt.</p>
                  <a href="" class="see-more-btn">Tìm hiểu thêm</a>
                </div>
                <div class="food service">
                  <img src="./assets/img/service/3.webp" alt="">
                  <h3>Thanh toán dễ dàng</h3>
                  <p class="text">Nhiều hình thức thanh toán làm cho việc đặt hàng của bạn và shop trở nên dễ dàng và tiện lợi hơn rất nhiều.</p>
                  <a href="" class="see-more-btn">Tìm hiểu thêm</a>
                </div>
              
              </div>
            </div>


            <!-- ok3 -->
            <div class="vegetable">
              <div class="img-title-vegetable">
                <div class="box-img-title-vegetable">
                  <img src="./assets/img/title left/image_product1.webp" alt="">
                </div>
              </div>
              <div class="box-body">
                <div class="title-index sub">
                  <div class="title-name">
                      <a href="">Rau củ</a> <img src="./assets/img/title-name/leaf.webp" alt="" class="leaf">
                      <span class="font16-block">Chương trình khuyến mãi hấp dẫn đang chờ đợi bạn</span>
                      <strong style="font-size: 14px;">Chương trình đã kết thúc, hẹn gặp lại trong thời gian sớm nhất!</strong>
                  </div>
                  <div class="btn-control">
                      <div class="list-btn-control"><img src="./assets/img/btn control/trai.png" alt=""></div>
                      <div class="list-btn-control"><img src="./assets/img/btn control/phai.png" alt=""></div>
    
                  </div>
                </div> 
                <div class="swiper-wrapper">
                  <div class="list-food">
                    <div class="food sale vegetable-sub">
                      <img src="./assets/img/vegetable/1.webp" alt="">
                      <strong>Rau dền 4KFarm 500gr</strong>
                      <div class="price-box price-box-sub">
                        12000₫ <span>13500₫</span>
                      </div>
                      
                      <div class="smart">Giảm 20%</div>
                      <div class="shopping">
                        <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                        <i class='bx bx-search' ></i>
                        <i class='bx bxs-heart'></i>
                      </div>
                    </div>
                    <div class="food sale vegetable-sub">
                      <img src="./assets/img/vegetable/2.webp" alt="">
                      <strong>Rau muống 4KFarm</strong>
                      <div class="price-box price-box-sub">
                        16.000₫ <span>20.000₫</span>
                      </div>
                      
                      <div class="smart">Giảm 80%</div>
                      <div class="shopping">
                        <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                        <i class='bx bx-search' ></i>
                        <i class='bx bxs-heart'></i>
                      </div>
                    </div>
                    <div class="food sale vegetable-sub">
                      <img src="./assets/img/vegetable/3.webp" alt="">
                      <strong>Cải thìa 4KFarm</strong>
                      <div class="price-box price-box-sub">
                        4.500₫ <span>9.000₫</span>
                      </div>
                      
                      <div class="smart">Giảm 99%</div>
                      <div class="shopping">
                        <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                        <i class='bx bx-search' ></i>
                        <i class='bx bxs-heart'></i>
                      </div>
                    </div>
                    
                    <div class="food sale vegetable-sub">
                      <img src="./assets/img/vegetable/3.webp" alt="">
                      <strong>Cải ngọt 4KFarm</strong>
                      <div class="price-box price-box-sub">
                        21.000₫ <span>27.000₫</span>
                      </div>                                                                                                                                            
                      
                      <div class="smart">Giảm 70%</div>
                      <div class="shopping">
                        <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                        <i class='bx bx-search' ></i>
                        <i class='bx bxs-heart'></i>
                      </div>
                    </div>
                  
                  </div>
                  <div class="see-more">
                    <a class="see-more-btn">Xem tất cả</a>
                  </div>
                </div>
              </div>
            </div>
            



            <div class="feeback-vegetable">
              <div class="img-title-vegetable">
                <div class="box-img-title-vegetable">
                  <img src="./assets/img/feedback/1.webp" alt="">
                </div>
              </div>
              <div class="img-title-vegetable">
                <div class="box-img-title-vegetable">
                  <img src="./assets/img/feedback/2.webp" alt="">
                </div>
              </div>
              <div class="img-title-vegetable">
                <div class="box-img-title-vegetable">
                  <img src="./assets/img/feedback/3.webp" alt="">
                </div>
              </div>
            </div>
          </div>  



          <div class="vegetable">
            <div class="img-title-vegetable">
              <div class="box-img-title-vegetable">
                <img src="./assets/img/frui/title left.webp" alt="">
              </div>
            </div>
            <div class="box-body">
              <div class="title-index sub">
                <div class="title-name">
                    <a href="">Trái cây</a> <img src="./assets/img/title-name/leaf.webp" alt="" class="leaf">
                    <span class="font16-block">Chương trình khuyến mãi hấp dẫn đang chờ đợi bạn</span>
                    <strong style="font-size: 14px;">Chương trình đã kết thúc, hẹn gặp lại trong thời gian sớm nhất!</strong>
                </div>
                <div class="btn-control">
                    <div class="list-btn-control"><img src="./assets/img/btn control/trai.png" alt=""></div>
                    <div class="list-btn-control"><img src="./assets/img/btn control/phai.png" alt=""></div>
  
                </div>
              </div> 
              <div class="swiper-wrapper">
                <div class="list-food">
                  <div class="food sale vegetable-sub">
                    <img src="./assets/img/frui/1.webp" alt="">
                    <strong>Bưởi da xanh trái 1.7kg trở lên</strong>
                    <div class="price-box price-box-sub">
                      90000₫ <span>13500₫</span>
                    </div>
                    
                    <div class="smart">Giảm 200%</div>
                    <div class="shopping">
                      <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                      <i class='bx bx-search' ></i>
                      <i class='bx bxs-heart'></i>
                    </div>

                  </div>
                  <div class="food sale vegetable-sub">
                    <img src="./assets/img/frui/2.webp" alt="">
                    <strong>Bưởi da xanh trái 1.7kg trở lên</strong>
                    <div class="price-box price-box-sub">
                      500.000₫ <span>20.000₫</span>
                    </div>
                    
                    <div class="smart">Giảm 300%</div>
                    <div class="shopping">
                      <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                      <i class='bx bx-search' ></i>
                      <i class='bx bxs-heart'></i>
                    </div>
                  </div>
                  <div class="food sale vegetable-sub">
                    <img src="./assets/img/frui/3.webp" alt="">
                    <strong>Xoài Đài Loan trái 600g trở lên</strong>
                    <div class="price-box price-box-sub">
                      4.500₫ <span>9.000₫</span>
                    </div>
                    
                    <div class="smart">Giảm 99%</div>
                    <div class="shopping">
                      <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                      <i class='bx bx-search' ></i>
                      <i class='bx bxs-heart'></i>
                    </div>
                  </div>
                  
                  <div class="food sale vegetable-sub">
                    <img src="./assets/img/frui/4.webp" alt="">
                    <strong>Chuối cau nải 800g trở lên ăn luôn</strong>
                    <div class="price-box price-box-sub">
                      21.000₫ <span>27.000₫</span>
                    </div>                                                                                                                                            
                    
                    <div class="smart">Giảm 70%</div>
                    <div class="shopping">
                      <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                      <i class='bx bx-search' ></i>
                      <i class='bx bxs-heart'></i>
                    </div>
                  </div>
                
                </div>
                <div class="see-more">
                  <a class="see-more-btn">Xem tất cả</a>
                </div>
              </div>
            </div>
          </div>
          


          <div class="slide-vegetable">
            <div class="img-title-vegetable">
              <div class="box-img-title-vegetable">
                <img src="./assets/img/slide-img/banner.webp" alt="">
              </div>
            </div>
          </div>

          <div class="vegetable">
            <div class="img-title-vegetable">
              <div class="box-img-title-vegetable">
                <img src="./assets/img/dokho/title.webp" alt="">
              </div>
            </div>
            <div class="box-body">
              <div class="title-index sub">
                <div class="title-name">
                    <a href="">Đồ khô</a> <img src="./assets/img/title-name/leaf.webp" alt="" class="leaf">
                    <span class="font16-block">Chương trình khuyến mãi hấp dẫn đang chờ đợi bạn</span>
                    <strong style="font-size: 14px;">Chương trình đã kết thúc, hẹn gặp lại trong thời gian sớm nhất!</strong>
                </div>
                <div class="btn-control">
                    <div class="list-btn-control"><img src="./assets/img/btn control/trai.png" alt=""></div>
                    <div class="list-btn-control"><img src="./assets/img/btn control/phai.png" alt=""></div>
  
                </div>
              </div> 
              <div class="swiper-wrapper">
                <div class="list-food">
                  <div class="food sale vegetable-sub">
                    <img src="./assets/img/dokho/1.webp" alt="">
                    <strong>Lạc cúc đỏ Lý Tưởng</strong>
                    <div class="price-box price-box-sub">
                      90000₫ <span>13500₫</span>
                    </div>
                    
                    <div class="smart">Giảm 200%</div>
                    <div class="shopping">
                      <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                      <i class='bx bx-search' ></i>
                      <i class='bx bxs-heart'></i>
                    </div>
                  </div>
                  <div class="food sale vegetable-sub">
                    <img src="./assets/img/dokho/2.webp" alt="">
                    <strong>Nấm hương khô Việt San</strong>
                    <div class="price-box price-box-sub">
                      500.000₫ <span>20.000₫</span>
                    </div>
                    
                    <div class="smart">Giảm 300%</div>
                    <div class="shopping">
                      <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                      <i class='bx bx-search' ></i>
                      <i class='bx bxs-heart'></i>
                    </div>
                  </div>
                  <div class="food sale vegetable-sub">
                    <img src="./assets/img/dokho/3.webp" alt="">
                    <strong>Đậu phộng việt san</strong>
                    <div class="price-box price-box-sub">
                      4.500₫ <span>9.000₫</span>
                    </div>
                    
                    <div class="smart">Giảm 99%</div>
                    <div class="shopping">
                      <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                      <i class='bx bx-search' ></i>
                      <i class='bx bxs-heart'></i>
                    </div>
                  </div>
                  
                  <div class="food sale vegetable-sub">
                    <img src="./assets/img/dokho/4.webp" alt="">
                    <strong>Bột mỳ đa dụng</strong>
                    <div class="price-box price-box-sub">
                      21.000₫ <span>27.000₫</span>
                    </div>                                                                                                                                            
                    
                    <div class="smart">Giảm 70%</div>
                    <div class="shopping">
                      <a href=""><i class='bx bxs-shopping-bag' ></i></a>
                      <i class='bx bx-search' ></i>
                      <i class='bx bxs-heart'></i>
                    </div>
                  </div>
                
                </div>
                <div class="see-more">
                  <a class="see-more-btn">Xem tất cả</a>
                </div>
              </div>
            </div>
          </div>


          <div class="slide-vegetable">
            <div class="img-title-vegetable">
              <div class="box-img-title-vegetable">
                <img src="./assets/img/raucusach.webp" alt="">
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <!-- footer -->
       <?php
       include 'footer.php';
       ?>
    </div>
  <script src="main.js"></script>
  </body>
</html>
