
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imge/favicon1.ico">

    <title>GÓP Ý BÁO LỔI</title>

    <!-- Bootstrap core CSS -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="CSS/theme.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="CSS/footerGioithieu.css">
     <style>


     main {

      height: 500px;
     }
     .data {

    font-style: italic;
    color : green;

     }
     .data2 {



     }
      h2 {

        margin : 25px 50px;
      }

     </style>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a href="index.html"><img src="imge/icon.ico.png" alt="Phim Hay | Phim hd | Xem Phim Online Chất Lượng Cao"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="OnlinePhimle.html">PHIM LẺ<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="OnlinePhimBo.html">PHIM BỘ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="OnlineTinTuc.html">TIN TỨC</a>
          </li>
           <li class="nav-item">
            <a class="nav-link " href="OnlineTVShow.html">TV SHOW</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              THỂ LOẠI
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Phim Hành Động</a>
               <a class="dropdown-item" href="#">Phim Kiếm Hiệp</a>
                <a class="dropdown-item" href="#">Phim Võ Thuật</a>
                <a class="dropdown-item" href="#">Phim Kinh Dị</a>
                <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Phim Khoa Học</a>
              <a class="dropdown-item" href="#">Phim Phiêu Lưu</a>
              <a class="dropdown-item" href="#">Phim Viễn Tưởng</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Phim Tình Cảm</a>
              <a class="dropdown-item" href="#">Phim Tâm Lý</a>
              <a class="dropdown-item" href="#">Phim Gia Đình</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Phim Thể Thao</a>
              <a class="dropdown-item" href="#">Phim Hoạt Hình</a>
            </div>
      </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0" action="Login.html">
          <button class="btn btn-outline-success my-2 my-sm-0" style="margin-right: 10px;" type="submit">Đăng Nhập</button>
          <input class="form-control mr-sm-2" type="text" placeholder="Phim, đạo diển, diễn viên" aria-label="Search">
        </form>
         <form>
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm Kiếm</button>
         </form>
      </div>
    </nav>
   </header>


    <main role="main" class="container"s>
        <div class="row" >
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12" style="margin-top: 50px">
              <CENTER><strong>THÔNG TIN TỪ TRANG</strong></CENTER>
           </div>
         </div>

        <div class="row">
           <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
         <?php 
            $name = $_POST['name'];
            $email= $_POST['Email'];
            $question = $_POST['question'];

            echo "<h2>Thông tin người gửi : <span class='data'>" .$name. "</span></h2>";
            $conn = new mysqli('localhost', 'root', '', 'Ahihi');

            $sql = "INSERT INTO GOPY (Ten, Email, CauHoi)
            VALUES ('$name', '$email.', '$question')";
            if (mysqli_query($conn, $sql)) {
                echo "<center><h2 class='data2'>Cám ơn đóng góp từ bạn, chúng tôi sẽ trả lời đóng góp của bạn sớm nhất</h2></center>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
$conn->close();   
          ?>

          </div>
       
    </main>

  <footer class="" >
      <div class="container-fluid" id="container-fluid">
       <div class="row">
         <div class="col-sm-2 col-lg-2 col-md-2 col-xs-2">
          <span class="titleft">HD ONLINE</span>
           <ul class="ftul">
            <li><a href="footerGioithieu.html">Giới thiệu</a></li>
            <li><a href="https://www.facebook.com/HDOCinema" target="_blank">Facebook HDO</a></li>
            <li><a href="https://www.youtube.com/user/hdochanels" target="_blank">Youtube Channel</a></li>
           </ul>
         </div>
         <div class="col-sm-2 col-lg-2 col-md-2 col-xs-2">
          <span class="titleft">Đóng Góp</span>
          <ul  class="ftul">
           <li><a href="Login.html">Thành viên VIP </a></li>
           <li><a href="footerHDSD.html">Hướng dẫn sử dụng </a></li>
           <li><a href="footerLHQC.html">Liên hệ quảng cáo </a></li>
          </ul>
         </div>
         <div class="col-sm-2 col-lg-2 col-md-2 col-xs-2">
           <span class="titleft">Quy Định</span>
           <ul  class="ftul">
            <li><a href="footerDKSD.html">Điều khoản sử dụng</a></li>
           <li><a href="footerCSRT.html">Chính sách riêng tư</a></li>
           <li> <a href="footerCSCD.html">Nguyên tắc cộng đồng</a></li>
           <li><a href="foorerKNBQ.html">Khiếu nại bản quyền</a></li>
            <ul>
         </div>
         <div class="col-sm-2 col-lg-2 col-md-2 col-xs-2">
           <span class="titleft">Quy Định</span>
           <ul  class="ftul">
             <li><a href="footerhoidap.html">Hỏi đáp</a></li>
          <li><a href="footergopy.html"> Góp ý, Báo lỗi</a></li>
            <ul>
         </div>
         <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4">
         <span class="titleft">Thông Tin</span>
         <ul class="ftul">
           <li>Website Xem Phim HD ONLINE</br></li>
           <li>Sinh Viên : Nguyễn Chánh Tuấn Lớp 15i1</br></li>
           <li>Học phần : Đồ Án Chuyên Ngành</li>
          <li> Giáo Viên Hướng Dẩn : Lê Văn Minh</li>
           </ul>

         </div>
       </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Bootstrap/js/jquery-3.2.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="Bootstrap/js/popper.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>