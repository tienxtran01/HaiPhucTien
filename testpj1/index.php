<?php

   
  $username = $_POST['username'];
  $password = $_POST['password'];



  $conn = mysqli_connect('localhost', 'root', '', 'phutaocainao');

  $result ="SELECT * FROM cmmphuc where username = '$username' and password = '$password'";
  $query = mysqli_query($conn, $result);
  $row = mysqli_num_rows($query);
  if ($row == 0) {
    
    echo "sai tai khoan hoac mat khau!!!! <br>";
    header("location:login.php");
    
  }else{
    echo " "; 
    
  }


?>
<?php include './header.php'; ?>
<div class="type-index">
    <div class="container">   
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav kam">
          <li class="nav-item dinhvi">
            <p class="addresss"> <i class="fas fa-location-arrow"></i>1 Đường 1 Quận 1 TP.HCM</p>
          </li>

          <li class="nav-item home">
            <a class="nav-link" href="#"><i class="fas fa-envelope"></i> asd@gmail.com</a>
          </li>

          <li class="nav-item q">
            <a class="nav-link b" href="#"><i class="far fa-clock"></i> 8:00 - 17:00</a>
          </li>

          <li class="nav-item q">
            <a class="nav-link b" href="#"><i class="fas fa-phone-volume"></i>123.456.789</a>
          </li>
  
          <li class="nav-item q">
            <a class="nav-link b" href="#"><i class="fab fa-facebook"></i></a>
          </li>
  
          <li class="nav-item q">
            <a class="nav-link b" href="#"><i class="fab fa-instagram"></i></a>
          </li>
   
          <li>
            <a class="nav-link b" href="#"><i class="fab fa-twitter"></i></a>
          </li>
   
          <li>
            <a class="nav-link b" href="#"><i class="fas fa-envelope"></i></a>
          </li>
    
          <li>
            <a href="#" class="addcart">Giỏ Hàng <i class="fas fa-shopping-cart"></i></a>
          </li>

        </ul>
      </nav>

    <div class="row content">
      <div class="col-md-4">
        <img src="./images/logo.png" alt="">    
      </div>

      <div class="col-md-4 icon">
        <div class="row">
          <div class="col-md-4">   
            <img src="./images/gh1.png" alt="" style="width: 40px">
              Ship
            </div>

          <div class="col-md-4" >
            <img  src="./images/tv1.png" alt="" style="width: 40px">
              24/24
          </div>
          
          <div class="col-md-4">
            <img src="./images/tt.png" alt="" style="width: 40px">
              Pay
          </div>
        </div>
      </div>

      <div class="col-md-4 search">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

            <a style="float: right;" class="btn btn-outline-success my-2 my-sm-0" href="<?php require_once('connect.php');?>">Logout</i></a>
            <a style="float: right;" class="btn btn-outline-success my-2 my-sm-0" href="login.php">Login</i></a>
      </div>
    </div>

    <div class="row trangchu">
      <a class="trangchu1" href="#">Trang chủ</a>
      <a class="trangchu1" href="gioithieu.php">Giới thiệu</a>
      <a class="trangchu1" href="sanpham.php">Sản phẩm</a>
      <a class="trangchu1" href="khuyenmai.php">Khuyến mãi</a>
      <a class="trangchu1" href="tuyendung.php">Tuyển dụng</a>
      <a class="trangchu1" href="lienhe.php">Liên Hệ</a>

      
    </div>

  </div>
  
</div>
<?php include './module/4-content.php'; ?>
<?php include './content.php'; ?>


<?php include './footer.php'; ?>


<script>
function openClick(evt, first) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(first).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>


