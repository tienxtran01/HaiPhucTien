<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-51">
         


    
<div class="container">
    <div class="pagetitle">
      
        <a href="index.php">Trang trủ</a>
        <span class="divider">/</span>
        Cửa Hàng
             
    </div>
    <div class="select">
    Showing all 10 result
    <select name="orderby" id="orderby">
      <option value="">thu tu mac ding</option>
      <option value="">thu tu theo do pho bien</option>
      <option value="" selected="selected">moi nhat</option>
      <option value="">thu tu theo gia tri</option>

    </select>
    </div>
   
    <div class="row">
    <div class="col-md-4">
    <div class="product">
    <div class="imagezoom">
     <img src="./images/hinh1.png" alt="hinh1" height="200px">
    </div>
      <div class="producttitle">
        <p>do choi</p>
      </div>
      <div class="price">
        300000
      </div>
      <div class="addtocartbutton">
        <button>
          Mua hàng
        </button>
      </div> 
    </div>
    </div>

    <div class="col-md-4">
    <div class="product">
    <div class="imagezoom">
     <img src="./images/hinh1.png" alt="hinh1" height="200px">
    </div>
      <div class="producttitle">
        <p>do choi</p>
      </div>
      <div class="price">
        300000
      </div>
      <div class="addtocartbutton">
        <button>
          Mua hàng
        </button>
      </div> 
    </div>
    </div>

    <div class="col-md-4">
    <div class="product">
    <div class="imagezoom">
     <img src="./images/hinh1.png" alt="hinh1" height="200px">
    </div>
      <div class="producttitle">
        <p>do choi</p>
      </div>
      <div class="price">
        300000
      </div>
      <div class="addtocartbutton">
        <button>
          Mua hàng
        </button>
      </div> 
    </div>
    </div>

    <div class="col-md-4">
    <div class="product">
    <div class="imagezoom">
     <img src="./images/hinh1.png" alt="hinh1" height="200px">
    </div>
      <div class="producttitle">
        <p>do choi</p>
      </div>
      <div class="price">
        300000
      </div>
      <div class="addtocartbutton">
        <button>
          Mua hàng
        </button>
      </div> 
    </div>
    </div>

    <div class="col-md-4">
    <div class="product">
    <div class="imagezoom">
     <img src="./images/hinh1.png" alt="hinh1" height="200px">
    </div>
      <div class="producttitle">
        <p>do choi</p>
      </div>
      <div class="price">
        300000
      </div>
      <div class="addtocartbutton">
        <button>
          Mua hàng
        </button>
      </div> 
    </div>
    </div>
    <div class="col-md-4">
    <div class="product">
    <div class="imagezoom">
     <img src="./images/hinh1.png" alt="hinh1" height="200px">
    </div>
      <div class="producttitle">
        <p>do choi</p>
      </div>
      <div class="price">
        300000
      </div>
      <div class="addtocartbutton">
        <button>
          Mua hàng
        </button>
      </div> 
    </div>
    </div>


    </div>
           
</div>