<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);


?>
<div class="type-khuyenmai">
    <div class="container">
        <h2>Thông Tin Khuyến Mãi</h2>
        <p>hiện chưa có sản phẩm nào khuyến mãi</p>
    </div>
</div>