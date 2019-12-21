<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

?>
<div class="type-lienhe1">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <p>ToyStore – điểm mua sắm trực tuyến hàng đầu Việt Nam, kết hợp hệ thống cửa hàng bán lẻ đặt tại Hà Nội & thành phố Hồ Chí Minh – chuyên cung ứng các mặt hàng dành cho Mẹ & Bé</p><br>
                <h4>Tất cả vì sự hài lòng của khách hàng</h4>
                <p>Sản phẩm chính hãng đảm bảo chất lượng; giá cả ưu đãi, cạnh tranh ! <br>
                    Phương thức thanh toán linh động, an toàn và tiện dụng ! <br>
                    Chính sách đổi trả hàng rõ ràng, minh bạch ! <br>
                    Dịch vụ tư vấn tận tình và giao hàng đúng hẹn ! <br>
                    Chính sách hậu mãi chu đáo !</p>
            </div>
            <div class="col-md-3.5">
                <h3>Địa Chỉ</h3>
                <p>1 đường 1 quận 1 TP.HCM</p>
                <h3>Số điện thoại</h3>
                <p>123456789</p>
            </div>
            <div class="col-md-3.5 col3">
                <h3>Thời Gian Làm Việc</h3>
                <p>Thứ 2 -> Thứ 7</p>
                <h3>Email</h3>
                <p>asd@gmail.com</p>
            </div>
        </div>
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6590.124595378528!2d106.77594312271474!3d10.848644150907964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175270b12a1303d%3A0xe5292023c65a5718!2zU2nDqnUgdGjhu4sgQ29vcG1hcms!5e0!3m2!1svi!2s!4v1575959506881!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</div>