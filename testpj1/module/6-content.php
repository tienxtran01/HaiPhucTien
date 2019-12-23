<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-6">
          <div class="container">
            <div class="row">
              <div class="col-md-3">

              </div>
              <div class="col-md-9">
              <div class="block-title">
              <h3>
                <span>Sản phẩm mới nhất</span>
              </h3>
              
            </div>
            <body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><a href="#"><img src="./images/6-1.png" alt="" height="200px" width="200px"></a>
      <p class="name-product">
          <a href="#">Đồ chơi gỗ</a>
      </p>
      <div class="price">
        300000
      </div>
      <button>Mua Hàng</button>
    </div>
      <div class="swiper-slide"><a href="#"><img src="./images/6-2.png" alt="" height="200px" width="200px"></a>
      <p class="name-product">
          <a href="#">Xếp hình</a>
      </p>
      <div class="price">
        500000
      </div>
      <button>Mua Hàng</button>
    </div>
      <div class="swiper-slide"><a href="#"><img src="./images/6-3.jpg" alt="" height="200px" width="200px"></a>
      <p class="name-product">
          <a href="#">Đồ chơi xe</a>
      </p>
      <div class="price">
        19000
      </div>
      <button>Mua Hàng</button>
    </div>
      <div class="swiper-slide"><a href="#"><img src="./images/6-4.png" alt="" height="200px" width="200px"></a>
      <p class="name-product">
          <a href="#">Đồ chơi xe</a>
      </p>
      <div class="price">
        3400000
      </div>
      <button>Mua Hàng</button>
    </div>
      <div class="swiper-slide"><a href="#"><img src="./images/6-5.png" alt="" height="200px" width="200px"></a>
      <p class="name-product">
          <a href="#">Đồ chơi bò</a>
      </p>
      <div class="price">
        900000
      </div>
      <button>Mua Hàng</button>
    </div>
      <div class="swiper-slide"><a href="#"><img src="./images/6-6.png" alt="" height="200px" width="200px"></a>
      <p class="name-product">
          <a href="#">Đồ chơi xe vàng</a>
      </p>
      <div class="price">
        120000
      </div>
      <button>Mua Hàng</button>
    </div>
      <div class="swiper-slide"><a href="#"><img src="./images/6-8.png" alt="" height="200px" width="200px"></a>
      <p class="name-product">
          <a href="#">Đồ chơi xe moto</a>
      </p>
      <div class="price">
        3023000
      </div>
      <button>Mua Hàng</button>
    </div>
      <div class="swiper-slide"><a href="#"><img src="./images/6-7.png" alt="" height="200px" width="200px"></a>
      <p class="name-product">
          <a href="#">Đồ chơi gỗ</a>
      </p>
      <div class="price">
        300000
      </div>
      <button>Mua Hàng</button>
    </div>
     
    </div>
      
     
    </div>
     <!-- Add Arrows -->
     <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="../package/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 30,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
     
    });
  </script>
</body>
              </div>
            </div>
          </div>
           
        </div>