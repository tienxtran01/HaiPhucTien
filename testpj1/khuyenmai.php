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
      </div>
    </div>

    <div class="row trangchu">
      <a class="trangchu1" href="index.php">Trang chủ</a>
      <a class="trangchu1" href="#">Giới thiệu</a>
      <a class="trangchu1" href="#">Sản phẩm</a>
      <a class="trangchu1" href="#">Khuyến mãi</a>
      <a class="trangchu1" href="tuyendung.php">Tuyển dụng</a>
      <a class="trangchu1" href="#">Liên Hệ</a>
      <button type="button" class="btn  btn-lg dropbtn" data-toggle="modal" data-target="#myModal"><i class="fa fa-user background1"></i></button>
                                        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
          <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          
          <div class="tab">
                  <button class="tablinks" onclick="openClick(event, 'Login')">Login</button>
                  <button class="tablinks" onclick="openClick(event, 'Register')">Register</button>
          </div>
        </div>
        <div class="modal-body">
          <h3>Login or Register</h3>
            <div id="Login" class="tabcontent">
    <form action="#" method="post">
        <div class="modal-body">
          <h3>Login your account</h3>
          <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" placeholder="Username" name="username" id="username" autocomplete="username" value=""><br>
          <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" placeholder="Password" name="password" id="password" autocomplete="current-password"><br>
          <input type="checkbox" id="cbox2">
          <label class="dayofweek" for="cbox2">Remember Me</label><br>
          <button type="submit" class="btn btn-default btn-login" data-dismiss="modal">Login</button>
        </div>
    </form>
</div>
        

        <div id="Register" class="tabcontent">
    <form action="#" method="post">
  <div class="modal-body">
          <h3>Register</h3>
          <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" placeholder="Username" name="username1" id="username1" autocomplete="username1" value=""><br>
          <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" placeholder="Email" name="Email" id="Email" autocomplete="Email" value=""><br>
          <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" placeholder="Password" name="password1" id="password1" autocomplete="current-password"><br>
          <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" placeholder="password confirm" name="password-confirm" id="password-confirm" autocomplete="current-password"><br>
          <button type="submit" class="btn btn-default btn-login" data-dismiss="modal">Register</button>
        </div>
        </form>
    </div>
             </div>
      </div>    
                    </div>
                 </div>
    </div>

  </div>
  
</div>
<?php include './module/khuyenmai-content.php'; ?>
<?php include './footer.php'; ?>