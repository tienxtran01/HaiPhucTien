<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-5">
            <div class="message-box" style="background-color:rgb(254, 151, 5)">
              <div class="container">
                <div class="row ">
                    <div class="col-md-4">
                      <p style="text-align: center;padding-top:10px">
                      <strong>
                      <span style="color:#fff;font-size: 24px">
                        Đăng Ký Nhận Tin
                        <br>
                      </span>
                      </strong> 
                      <span style="font-size: 95%;color:#f1f1f1">
                      Vui lòng nhập địa chỉ email để đăng ký nhận bản tin khuyến mãi. Xin cám ơn!
                      </span>  
                      </p>
                    </div>
                    <div class="col-md-4">
                      <span style="padding-left:60px">
                      <input type="email" name="your-email" value="" size="35"  placeholder="Địa chỉ email">
                      </span>
                    
                    </div>
                    <div class="col-md-4">
                    
                      <div class="button">
                    <input type="submit" value="Đăng ký" class="wpcf7-form-control wpcf7-submit button">
                    </div>
                    
                   
                    </div>

                   
                </div>
              </div>
              
          </div>
          <body>
                      <div class="container">
                        <div class="row col-md-4">
                          <div class="title">
                          <span >Giới thiệu</span>
                              <hr class="hr1">
                              <span>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipis cing elit. Nam dolor metus, mol estie in enim vitae, pre tium pellen tesque velit. Nunc dolor leo, blandit et sapien sit amet, imper diet orn are tortor. Curabitur turpis ante, pulvinar quis massa id</p>
                              </span>
                              <span><i class="fas fa-phone-volume"> 123.456.789</i></span><br>
                              <span><i class="fas fa-envelope"> asd@gmail.com</i></span><br>
                              <span><i class="fas fa-clock"> 8:00 - 17:00</i></span><br>
                          </div>
                        </div>
                        <div class="row col-md-4">
                        <div class="title1">
                              <span >Thông tin chung</span>

                              <hr class="hr2">
                              <p><a href="index.php">Trang chủ</a><br></p>
                              <span style="width: 200px"><hr></span>
                              
                              <p><a href="gioithieu.php">Giới thiệu</a><br></p>
                                
                     
                              <span style="width: 200px"><hr></span>
                              <p> <a href="sanpham.php">Sản phẩm</a><br></p>
                               
                             
                              <span style="width: 200px"><hr></span>
                              <p><a href="khuyenmai.php">Khuyến mãi</a><br></p>
                                
                              
                              <span style="width: 200px"><hr></span>
                              <p><a href="tuyendung.php">Tuyển dụng</a><br></p>
                                
                             
                              <span style="width: 200px"><hr></span>
                              <p><a href="lienhe.php">Liên hệ</a><br></p>
                              <span style="width: 200px"><hr></span>
                                

                          </div>
                        </div>
                        <div class="row col-md-4">
                        <div class="title1">
                              <span >Chính sách</span>
                              <hr class="hr2">
                              <p><a href="#">Hướng dẫn hoàn trả</a><br></p>
                                
                     
                              <span style="width: 200px"><hr></span>
                              <p> <a href="#">Trả góp</a><br></p>
                               
                             
                              <span style="width: 200px"><hr></span>
                              <p><a href="#">Kinh doanh</a><br></p>
                                
                              
                              <span style="width: 200px"><hr></span>
                              <p><a href="#">Doanh nghiệp</a><br></p>
                              <span style="width: 200px"><hr></span>
                               
                                

                          </div>
                        </div>
                      </div>
                      <div class="footer">
                      <div class="container">
                        
                      
                      <p>Project demo</p>
                     
                      </div>
                         
                       </div>

                      </div>
                    </body>
        </div>