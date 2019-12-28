<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module1">
  <div class="swiper-container">
    <div class="swiper-wrapper">
     <div class="swiper-slide">
        <div class="module1-2">
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="container">
              <div class="row row1-2">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                    <div class="row">
                            <div class="col-md-6">
                              <div class="content">
                                    <h3>
                                    <a class="linktitle1" href="#">Ô tô điều khiển
                                    VBCare 1:18
                                    </a>         
                                    </h3>
                                </div> <br>

                                <br> <br> <br> <br> <br>
                                    <p class="content2  content3">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
                                    </p>
                                <div class="row">
                                  <p class="oto">
                                    60.000đ
                                    </p>
                                    <a class="price" href="#">
                                        Mua hàng →
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <img class="anh3" src="/module1/images/6-1.png" alt="module1-2">
                            </div>
                              
                    </div>


                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

      
      <div class="swiper-slide">
        <div class="module1-3">
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="container">
              <div class="row row1-2">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      


                    <div class="row">
                            <div class="col-md-6">
                              <div class="content">
                                    <h3>
                                    <a class="linktitle1" href="#">
                                    Đồ chơi gỗ GCB - Luồn hạt LH07
                                    </a>         
                                    </h3>
                                </div> <br>

                                <br> <br> <br> <br> <br>
                                    <p class="content2  content3">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
                                    </p>
                                <div class="row">
                                  <p class="oto">
                                    30.000đ
                                    </p>
                                    <a class="price" href="#">
                                        Mua hàng →
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <img class="anh3" src="/module1/images/6-2.png" alt="module1-2">
                            </div>
                              
                    </div>




                        
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide">
        <div class="module1-3">
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="container">
              <div class="row row1-2">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      


                    <div class="row">
                            <div class="col-md-6">
                              <div class="content">
                                    <h3>
                                    <a class="linktitle1" href="#">
                                    Đội xe biến hình chichi Land 301e
                                    </a>         
                                    </h3>
                                </div> <br>

                                <br> <br> <br> <br> <br>
                                    <p class="content2  content3">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
                                    </p>
                                <div class="row">
                                  <p class="oto">
                                    200.000đ
                                    </p>
                                    <a class="price" href="#">
                                        Mua hàng →
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <img class="anh3" src="/module1/images/6-3.jpg" alt="module1-2">
                            </div>
                              
                    </div>




                        
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
        <div class="module1-3">
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="container">
              <div class="row row1-2">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      


                    <div class="row">
                            <div class="col-md-6">
                              <div class="content">
                                    <h3>
                                    <a class="linktitle1" href="#">
                                    Xe đua mô hình điều khiển VCB - 2024A
                                    </a>         
                                    </h3>
                                </div> <br>

                                <br> <br> <br> <br> <br>
                                    <p class="content2  content3">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
                                    </p>
                                <div class="row">
                                  <p class="oto">
                                    160.000đ
                                    </p>
                                    <a class="price" href="#">
                                        Mua hàng →
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <img class="anh3" src="/module1/images/6-4.png" alt="module1-2">
                            </div>
                              
                    </div>




                        
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
        <div class="module1-3">
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="container">
              <div class="row row1-2">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      


                    <div class="row">
                            <div class="col-md-6">
                              <div class="content">
                                    <h3>
                                    <a class="linktitle1" href="#">
                                    Xe kéo Bò sữa A01 cho bé vui chơi
                                    </a>         
                                    </h3>
                                </div> <br>

                                <br> <br> <br> <br> <br>
                                    <p class="content2  content3">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
                                    </p>
                                <div class="row">
                                  <p class="oto">
                                    360.000đ
                                    </p>
                                    <a class="price" href="#">
                                        Mua hàng →
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <img class="anh3" src="/module1/images/6-5.png" alt="module1-2">
                            </div>
                              
                    </div>




                        
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
        <div class="module1-3">
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="container">
              <div class="row row1-2">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      


                    <div class="row">
                            <div class="col-md-6">
                              <div class="content">
                                    <h3>
                                    <a class="linktitle1" href="#">
                                    Xe ôtô điện cho trẻ em Lexus 501i
                                    </a>         
                                    </h3>
                                </div> <br>

                                <br> <br> <br> <br> <br>
                                    <p class="content2  content3">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
                                    </p>
                                <div class="row">
                                  <p class="oto">
                                    250.000đ
                                    </p>
                                    <a class="price" href="#">
                                        Mua hàng →
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <img class="anh3" src="/module1/images/6-6.png" alt="module1-2">
                            </div>
                              
                    </div>




                        
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
        <div class="module1-3">
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="container">
              <div class="row row1-2">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      


                    <div class="row">
                            <div class="col-md-6">
                              <div class="content">
                                    <h3>
                                    <a class="linktitle1" href="#">
                                    Ngựa bập bênh cho trẻ em BB024
                                    </a>         
                                    </h3>
                                </div> <br>

                                <br> <br> <br> <br> <br>
                                    <p class="content2  content3">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
                                    </p>
                                <div class="row">
                                  <p class="oto">
                                    250.000đ
                                    </p>
                                    <a class="price" href="#">
                                        Mua hàng →
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <img class="anh3" src="/module1/images/6-7.png" alt="module1-2">
                            </div>
                              
                    </div>




                        
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
        <div class="module1-3">
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="container">
              <div class="row row1-2">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      


                    <div class="row">
                            <div class="col-md-6">
                              <div class="content">
                                    <h3>
                                    <a class="linktitle1" href="#">
                                    Xe máy điện trẻ em Toptoy Lx150
                                    </a>         
                                    </h3>
                                </div> <br>

                                <br> <br> <br> <br> <br>
                                    <p class="content2  content3">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
                                    </p>
                                <div class="row">
                                  <p class="oto">
                                    350.000đ
                                    </p>
                                    <a class="price" href="#">
                                        Mua hàng →
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <img class="anh3" src="/module1/images/6-8.png" alt="module1-2">
                            </div>
                              
                    </div>




                        
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
</div>
    <!-- Add Pagination -->
    
  </div>
  

  
   <script>
   var swiper = new Swiper('.swiper-container', {
      slidesPerView: 2,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    
  </script>
</div>