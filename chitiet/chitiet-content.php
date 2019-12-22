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
    $less->compileFile('less/chitiet.less', 'css/chitiet.css');

?>
<div class="type-chitiet">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="./images/xe-dieu-khien-tu-xa.jpg">
            </div>
            <div class="col-md-8">
                
                    <h2>Xe điều khiển từ xa 0012</h2>
                    <h3>145000đ</h3>
                    <p>Có rất nhiều yếu tố tác động đến sự phát triển của bé, nhưng có 1 cách giúp bé phát triển tự nhiên mà lại vô cùng hiệu quả là thông qua các món đồ chơi cho bé phù hợp lứa tuổi. Một trong những loại đồ chơi giúp bé phát triển trí thông minh, khéo léo, logic, sáng tạo là dòng đồ chơi xe ô tô điều khiển từ xa. Đa số các bé trai hiện nay đều rất thích chơi xe, đặc biệt cảm thấy thú vị với những chiếc siêu xe thu nhỏ, màu sắc nổi bật, sang trọng. Hơn hết là có thể tự điều khiển, có thể chạy trên mọi địa hình, với tốc độ cao.</p>
                    <div class="row">
                        <button onclick="clickCounter1()" type="button">-</button>
                        <div id="result"></div>
                        <button onclick="clickCounter()" type="button">+</button>
                        <button class="addcart" type="button" onclick="alert('Thêm thành công')">Thêm vào giỏ hàng</button>
                    </div>
            </div>
        </div>

    </div>
</div>




<script>
function clickCounter() {
  if (typeof(Storage) !== "undefined") {
    if (localStorage.clickcount) {
      localStorage.clickcount = Number(localStorage.clickcount)+1;
    } else {
      localStorage.clickcount = 1;
    }
    document.getElementById("result").innerHTML =  localStorage.clickcount ;
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
  }
}
</script>

<script>
function clickCounter1() {
  if (typeof(Storage) !== "undefined") {
    if (localStorage.clickcount) {
      localStorage.clickcount = Number(localStorage.clickcount)-1;
    } else {
      localStorage.clickcount = 1;
    }
    document.getElementById("result").innerHTML =  localStorage.clickcount ;
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
  }
}
</script>