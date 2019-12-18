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
                      Vui lòng nhập địa chỉ email để đăng ký nhận bản tin khuyến mại hàng tuần của ToyStore. Xin cám ơn!
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
                                <p>TrustWeb.vn thiết kế website giá rẻ chuẩn seo. Mọi nhu cầu mua giao diện web, thắc mắc, tư vấn... xin vui lòng liên hệ theo thông tin dưới đây:</p>
                              </span>
                              <span>Phone:0907927323</span><br>
                              <span>Email:haideptrai99@gmail.com</span>
                              <span>website:fhgajgag.trust.web.vn</span>
                          </div>
                        </div>
                        <div class="row col-md-4">
                        <div class="title1">
                              <span >Thong tin chung</span>
                              <hr class="hr2">
                              <p><a>Gioi thieu</a><br></p>
                                
                     
                              <span style="width: 200px"><hr></span>
                              <p> <a>Nang luc san xuat</a><br></p>
                               
                             
                              <span style="width: 200px"><hr></span>
                              <p><a>Kinh doanh</a><br></p>
                                
                              
                              <span style="width: 200px"><hr></span>
                              <p><a>Hop tac chung</a><br></p>
                                
                             
                              <span style="width: 200px"><hr></span>
                              <p><a>Tuyen dung</a><br></p>
                                

                          </div>
                        </div>
                        <div class="row col-md-4">
                        <div class="title1">
                              <span >Chinh sach</span>
                              <hr class="hr2">
                              <p><a>Huong dan hoan tra</a><br></p>
                                
                     
                              <span style="width: 200px"><hr></span>
                              <p> <a>chinh sach tra gop</a><br></p>
                               
                             
                              <span style="width: 200px"><hr></span>
                              <p><a>Kinh doanh</a><br></p>
                                
                              
                              <span style="width: 200px"><hr></span>
                              <p><a>Hop tac doanh nghiepg</a><br></p>
                                
                             
                              <span style="width: 200px"><hr></span>
                              <p><a>Tuyen dSeo</a><br></p>
                                

                          </div>
                        </div>
                      </div>
                      <div class="footer">
                      <div class="container">
                        <span style="color: #fff">
                        <a href="#">Trang trủ</a>&ensp;<a href="#">Gioi thieu</a>&ensp;<a href="#">San pham</a>&ensp;<a href="#">Khuyen mai</a>
                      </span>
                      <hr class="hr3">
                      <p>Bản quyền 2019 Toy store</p>
                     
                      </div>
                         
                       </div>

                      </div>
                    </body>
        </div>