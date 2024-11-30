<?php
session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user']; // Lấy dữ liệu người dùng từ session
} else {
    $user = null; // Nếu chưa đăng nhập, gán giá trị null
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
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
        .introduce{
            margin-top: 200px;
        }
        .introduce strong{
            font-weight: bold;
            font-size: 28px;
           
        }
        .introduce p{
            font-weight:500;
        }

    </style>
</head>
<body>
    <div class="container">
        <?php
        include 'header_user.php';
        ?>
        <div class="width-section">
          <div class="introduce">
                <strong>CÂU CHUYỆN CỦA CHÚNG TÔI </strong> <br>
                <p>Dola chuỗi cửa hàng thực phẩm hữu cơ với mục tiêu giúp người tiêu dùng Việt Nam có một cuộc sống khỏe mạnh hơn thông qua những loại thực phẩm hữu cơ có chứng nhận, thực phẩm tự nhiên và không có nguồn gốc biến đổi gene (GMO). Chúng tôi lựa chọn các loại thực phẩm hữu cơ, thực phẩm tự nhiên từ các nhà sản xuất, các công ty trong và ngoài nước thông qua quá trình lựa chọn kỹ càng về khả năng cung ứng, các giấy chứng nhận tiêu chuẩn do các tổ chức uy tín thế giới cấp. Chúng tôi yêu thích những gì chúng tôi làm và chúng tôi đam mê những lợi ích của một lối sống lành mạnh, tìm nguồn cung cấp sản phẩm hữu cơ chất lượng cao nhất cho khách hàng và cung cấp dịch vụ giao hàng tận nhà tốt nhất. Chúng tôi hoàn toàn tin tưởng rằng những sản phẩm tạo ra từ quá trình canh tác và sản xuất theo phương thức hữu cơ và tự nhiên tốt cho cơ thể mọi người, tốt hơn cho cộng đồng và tốt hơn cho hành tinh mà chúng ta đang sống. Một lần nữa, Dola được sáng lập bởi các nhà sáng lập muốn tạo dựng một cộng đồng thực phẩm sạch, dựa trên nền tảng hữu cơ (organic) và thuần từ thiên nhiên, nhằm mang lại sức khoẻ tốt nhất cho cộng đồng. </p>
                <strong>SỨ MỆNH KINH DOANH </strong>
                <p>Sứ mệnh của Dola đó là giúp mọi người dễ dàng tiếp cận hơn với các loại thực phẩm hữu cơ, thực phẩm tự nhiên. Không chỉ cung cấp các sản phẩm hữu cơ, chúng tôi còn đem đến những thông tin hữu ích về sức khỏe mà thực phẩm hữu cơ đem lại cho con người và cộng đồng. Mỗi người có nhu cầu và cách tiếp cận với thực phẩm hữu cơ, thực phẩm tự nhiên theo một cách khác nhau, vì vậy, chúng tôi có mặt ở đây để hỗ trợ bạn bằng cách: Chỉ cung cấp những loại thực phẩm hữu cơ, thực phẩm tự nhiên đạt những chứng nhận uy tín nói chung và được kiểm chứng bởi Organicfood.vn nói riêng. Khởi tạo những mối quan hệ tích cực, lâu dài và tin tưởng giữa Dola với khách hàng, nhân viên, nhà cung cấp và cộng đồng. Hỗ trợ phát triển các trang trại, cộng đồng nhỏ vùng sâu vùng xa, vùng dân tộc ít người và các đối tượng dễ bị tổn thương trong xã hội canh tác theo phương thức hữu cơ, phương thức tự nhiên để có cuộc sống tốt đẹp hơn. </p>
                <strong>LAN TOẢ ĐIỀU TỐT VÀ NHIỀU HƠN NỮA LUÔN TƯƠI NGON</strong>
                <p>Là khách hàng của Dola bạn không cần phải dành hàng giờ đi chợ hay siêu thị để tìm kiếm những sản phẩm hữu cơ tươi ngon nhất vì chúng tôi làm điều đó cho bạn và sau đó đưa bạn đến tận nhà bạn. Chúng tôi chọn những sản phẩm hữu cơ tươi mới và có chứng nhận. Trong quá trình đóng gói của chúng tôi, chúng tôi cũng đảm bảo rằng chất lượng của tất cả các sản phẩm được kiểm tra thêm để sản phẩm được giao là tiêu chuẩn tốt nhất. </p>
                <strong>DỊCH VỤ CSKH TUYỆT VỜI </strong>
                <p>Nhiệm vụ của chúng tôi là cung cấp dịch vụ tốt nhất cho khách hàng, giúp bạn tận hưởng trải nghiệm mua sắm tuyệt vời nhất. Chúng tôi thích tương tác với khách hàng của mình và chúng tôi luôn hoan nghênh phản hồi về dịch vụ của các bạn. Đó là cách mà chúng tôi hiểu các bạn hơn, cũng như làm tốt dịch vụ của mình hơn, hoàn thiện mình hơn nữa từng gày. </p>
                <strong>TRÊN CẢ MONG MUỐN </strong>
                <p>Chúng tôi thích quảng bá các thực phẩm hữu cơ bổ dưỡng và giảm thiểu càng nhiều thực phẩm chế biến càng tốt. Dù thực phẩm bạn chọn cho bạn và gia đình của bạn là gì, thì chúng tôi vẫn khẳng định rằng thực phẩm hữu cơ là hỗ trợ lối sống lành mạnh nhất. Thực phẩm hữu cơ mặc dù chưa được nhiều người biết đến, nhưng nó càng ngày được nhiều người tin dùng vì nó thực sự tốt cho sức khoẻ của bạn và gia đình. </p>
                <strong>GIÁ TRỊ THỰC SỰ </strong>
                <p>Hầu hết các sản phẩm chúng tôi cung cấp được chứng nhận hữu cơ ngoài ra một số can tác theo hướng hữu cơ, thuần tự nhiên, nơi chúng tôi cũng có một số người trồng địa phương do đó bạn có thể yên tâm rằng tất cả các quy trình và hệ thống của chúng tôi đều được kiểm tra nghiêm ngặt. </p>
                <strong>PHÁT TRIỂN BỀN VỮNG </strong>
                <p>Canh tác hữu cơ đang ngày một tốt hơn cho hành tinh của chúng ta. Chúng tôi tìm đến những địa phương nơi mà đang có nguồn đất, nước, khí không nhiễm bẩn để xây dựng hệ sinh thái tốt, chúng tôi đã vạch ra con đường tốt nhất để tiết kiệm khí thải. Chúng tôi giữ lượng chất thải tối thiểu bằng các phế liệu thực phẩm được tặng cho cư dân địa phương để ủ phân và thức ăn cho vật nuôi. Bao bì của chúng tôi là tái sử dụng và có thể được tái chế. Chúng tôi  sử dụng túi phân hủy và phân hủy sinh học được chứng nhận. Hộp của chúng tôi có thể được sử dụng lại và chúng tôi yêu cầu khách hàng đổi lại hộp giấy trong lần mua hàng kế tiếp.</p>
            </div>
     </div>
        <?php
            include 'footer.php';
            ?>
</body>
</html>