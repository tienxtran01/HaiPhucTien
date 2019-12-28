<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

?>
<div class="type-gioithieu">
    <div class="container">
    <h2 class="gttitle">GIỚI THIỆU</h2>
    <img src="./images/GT-1.png" style="margin-left: 456px;" alt="">
        <p id="gt">ToyStore – điểm mua sắm trực tuyến hàng đầu Việt Nam,
             kết hợp hệ thống cửa hàng bán lẻ đặt tại Hà Nội & thành phố Hồ Chí Minh – chuyên cung ứng các mặt hàng dành cho Mẹ & Bé: Giá cả cạnh tranh, 
             mẫu mã đa dạng, dịch vụ khách hàng nhiệt tình chu đáo và nhất là phong cách mua sắm hiện đại.</p> <br>   <br> 
        
         <div class="row">
            <div class="col-md-9 cleft">
                <p>Phương châm phục vụ của ToyStore: “Tất cả vì sự hài lòng của khách hàng !”, thể hiện cụ thể qua 5 yếu tố:</p>
                <p>Sản phẩm chính hãng đảm bảo chất lượng; giá cả ưu đãi, cạnh tranh ! <br>
                Phương thức thanh toán linh động, an toàn và tiện dụng ! <br>
                Chính sách đổi trả hàng rõ ràng, minh bạch ! <br>
                Dịch vụ tư vấn tận tình và giao hàng đúng hẹn ! <br>
                Chính sách hậu mãi chu đáo !
                </p>
                <p>Truy cập website ToyStore.com ngay hôm nay để trải nghiệm mua sắm online tiện ích, hoặc
                        ghé thăm hệ thống cửa hàng bán lẻ của ToyStore để được chăm sóc trực tiếp tận tình chu đáo
                </p>
                <p>Xin cám ơn sự tin tưởng và ủng hộ của quý khách trong thời gian qua.</p>
                <p>Trân trọng.</p>
            </div>
                <div class="col-md-3">
                    <h3>Thông tin liên hệ:</h3>
                        <i class="fas fa-star"></i> ToyStore  <br>
                        <i class="fas fa-star"></i> 1 đường 1 phường 1  quận 1 TP.HCM <br>
                        <i class="fas fa-star"></i> SĐT: 123.456.789<br>
                        <i class="fas fa-star"></i> Email: asd@gmail.com <br>
                        <i class="fas fa-star"></i> Website: 123.com<br>
                    </ul>
                    <h3>Thông tin thanh toán:</h3>
                    <i class="fas fa-star"></i> name: 123<br>
                    <i class="fas fa-star"></i> VCB : 111111111119<br>
                    <i class="fas fa-star"></i> Agribank: 111111111119<br>
                </div>
    </div>
    </div>
</div>