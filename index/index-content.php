<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block.'/libs/lessc.inc.php');
    }

    $less = new lessc;
    $less->compileFile('less/index.less', 'css/index.css');

?>
<div class="type-index">
    <div class="container">
        
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

<!-- Links -->
<ul class="navbar-nav kam">
<li class="nav-item dinhvi">
       <p> <i class="fas fa-location-arrow"></i>600-Điện Biên Phủ, Quận Bình Thạnh, TP.HCM</p>
</li>
  <li class="nav-item home">
    <a class="nav-link" href="#"><i class="fas fa-envelope"></i> info@trushweb.vn</a>
  </li>
  <li class="nav-item q">
    <a class="nav-link b" href="#"><i class="far fa-clock"></i> 8:00 - 17:00</a>
  </li>
  <li class="nav-item q">
    <a class="nav-link b" href="#"><i class="fas fa-phone-volume"></i>0888.090.898</a>
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
<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                    <img src="public/image/logo.png" alt="">
               
                   
            </div>
          <div class="col-md-4 icon">
              <div class="row">
                    <div class="col-md-4">
                        <img src="public/image/gh1.png" alt="" style="width: 40px">
                        Ship
                      </div>
                      <div class="col-md-4" >
                            <img  src="public/image/tv1.png" alt="" style="width: 40px">
                            24/24
                      </div>
                      <div class="col-md-4">
                            <img src="public/image/tt.png" alt="" style="width: 40px">
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
</div>



    </div>
</div>