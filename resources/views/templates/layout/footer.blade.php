<?php
    $setting = Cache::get('setting');
    $chinhanh = Cache::get('chinhanh');
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer-col">
                    <a href="index.html" title="">
                        <img src="{{asset('public/images/logo-f.png')}}" alt="" title="" class="logo-b">
                    </a>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ:  Tầng 8, Tòa nhà TOYOTA Thanh Xuân</p>
                    <p class="hotline">
                        <img src="{{asset('public/images/hotline.png')}}" alt="" title="">
                        <span>{{$setting->hotline}}</span>
                    </p>
                    <div class="social">
                        <a href="" title=""><img src="{{asset('public/images/so1.png')}}" alt="" title=""> </a>
                        <a href="" title=""><img src="{{asset('public/images/so2.png')}}" alt="" title=""> </a>
                        <a href="" title=""><img src="{{asset('public/images/so3.png')}}" alt="" title=""> </a>
                        <a href="" title=""><img src="{{asset('public/images/so4.png')}}" alt="" title=""> </a>
                        <a href="" title=""><img src="{{asset('public/images/so5.png')}}" alt="" title=""> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-col pd">
                    <ul>
                        <li><a href="{{url('')}}}" title="">Trang chủ</a> </li>
                        <li><a href="{{url('gioi-thieu')}}" title="">Giới thiệu</a> </li>
                        <li><a href="{{url('san-pham')}}" title="">Sản phẩm</a> </li>
                        <li><a href="{{url('tin-tuc')}}" title="">Tin tức</a> </li>
                        <li><a href="{{url('lien-he')}}" title="">Liên hệ</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-col pd">
                    <ul>
                        <li><a href="" title="">Chính sách</a> </li>
                        <li><a href="" title="">Điều khoản</a> </li>
                        <li><a href="" title="">Thanh toán</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=124844007858325";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>