<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-5">
          <div class="container">
            <div class="row">
              <div class="col-md-3">

              </div>
              <div class="col-md-9">
              <div class="block-title">
              <h3>
                <span>San Pham Moi Nhat</span>
              </h3>
              
            </div>
            <body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="./images/hinh1.png" alt="" height="200px" width="200px">
      <p class="name-product">
          <a href="#">Do choi go</a>
      </p>
      <div class="price">
        300000
      </div>
      <button>Mua Hàng</button>
    </div>
      <div class="swiper-slide"><img src="./images/hinh2.png" alt="" height="200px" width="200px">
      <p class="name-product">
          <a href="#">xep hinh</a>
      </p>
      <div class="price">
        500000
      </div>
      <button>Mua Hàng</button>
    </div>
      <div class="swiper-slide"><img src="./images/hinh3.jpg" alt="" height="200px" width="200px">
      <p class="name-product">
          <a href="#">Do choi xe</a>
      </p>
      <div class="price">
        19000
      </div>
      <button>Mua Hàng</button>
    </div>
      <div class="swiper-slide"><img src="./images/hinh4.png" alt="" height="200px" width="200px">
      <p class="name-product">
          <a href="#">Do choi xe1</a>
      </p>
      <div class="price">
        3400000
      </div>
      <button>Mua Hàng</button>
    </div>
      <div class="swiper-slide"><img src="./images/hinh5.png" alt="" height="200px" width="200px">
      <p class="name-product">
          <a href="#">Do choi bo</a>
      </p>
      <div class="price">
        900000
      </div>
      <button>Mua Hàng</button>
    </div>
      <div class="swiper-slide"><img src="./images/hinh6.png" alt="" height="200px" width="200px">
      <p class="name-product">
          <a href="#">Do choi xe vang</a>
      </p>
      <div class="price">
        120000
      </div>
      <button>Mua Hàng</button>
    </div>
      <div class="swiper-slide"><img src="./images/hinh7.png" alt="" height="200px" width="200px">
      <p class="name-product">
          <a href="#">Do choi xe moto</a>
      </p>
      <div class="price">
        3023000
      </div>
      <button>Mua Hàng</button>
    </div>
      <div class="swiper-slide"><img src="./images/hinh8.png" alt="" height="200px" width="200px">
      <p class="name-product">
          <a href="#">Do choi go</a>
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