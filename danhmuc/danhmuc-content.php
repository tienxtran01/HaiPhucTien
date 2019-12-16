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
    $less->compileFile('less/danhmuc.less', 'css/danhmuc.css');

?>
<div class="type-danhmuc">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class= "dm">DANH MỤC TÌM KIẾM</h3>
            <hr class="hrr">
          <a class="borderbot" href="#">Theo độ tuổi</a><br>
            <hr class="hrr">
          <a class="borderbot" href="#">Chủ đề</a><br>
            <hr class="hrr">
          <a class="borderbot" href="#">Thương hiệu</a><br>
            <hr class="hrr">
          <a class="borderbot" href="#">Bé gái</a><br>
            <hr class="hrr">
          <a class="borderbot" href="#">Bé trai</a><br>
            <hr class="hrr">
          <a class="borderbot" href="#">Đồ chơi</a><br>
            <hr class="hrr">
          <a class="borderbot" href="#">Công nghệ</a><br>
            <hr class="hrr">
          <a class="borderbot" href="#">Thiết bị số</a><br>
            <hr class="hrr">
        </div>
      </div>  
    </div>
</div>