@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$cateProducts = Cache::get('cateProducts');
?>
<main class="cd-main-content">
    <section class="banner">
        <img src="{{asset('public/images/banner.png')}}" alt="" title="" class="img-fluid">
    </section>
    <section class="about">
        <div class="container">
            <h2 class="title text-center">Về chúng tôi</h2>
            <p class="text-center about-desc">Hành trình 6 năm phát triển không phải là quá dài nhưng đủ để cho GCO Group tạo dựng cho mình nền tảng <br/>nhất định trong lĩnh vực hoạt động. Với đội ngũ hơn 100 nhân sự trẻ, năng động.</p>
            <p class="text-center">
                <img src="images/gioithieu.png" alt="" title="">
            </p>
            <div class="row">
                <div class="col-md-4">
                    <div class="iso">
                        <img src="{{asset('public/images/gt1.png')}}" alt="" title="">
                        <h4>100% Tự nhiên</h4>
                        <p>Hành trình 6 năm phát triển không phải là quá dài nhưng </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iso">
                        <img src="{{asset('public/images/gt2.png')}}" alt="" title="">
                        <h4>Tươi sạch</h4>
                        <p>Hành trình 6 năm phát triển không phải là quá dài nhưng </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="iso">
                        <img src="{{asset('public/images/gt3.png')}}" alt="" title="">
                        <h4>Chất lượng tốt</h4>
                        <p>Hành trình 6 năm phát triển không phải là quá dài nhưng </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service">
        <div class="ser-abs">
            <div class="container">
                <div class="col-w3">
                    <img src="{{asset('public/images/hotro.png')}}" alt="" title="">
                    <span>HỖ TRỢ TRỰC TUYẾN 24/24</span>
                </div>
                <div class="col-w3">
                    <img src="{{asset('public/images/giaohang.png')}}" alt="" title="">
                    <span>MIỄN PHÍ GIAO HÀNG</span>
                </div>
                <div class="col-w3">
                    <img src="{{asset('public/images/phucvu.png')}}" alt="" title="">
                    <span>PHỤC VỤ TẬN TÂM</span>
                </div>
            </div>
        </div>
        <img src="{{asset('public/images/banner2.png')}}" alt="" title="" class="img-fluid">
    </section>
    <section class="product-list">
        <div class="container">
            <h2 class="title text-center">Sản phẩm</h2>
            <ul class="nav nav-tabs" role="tablist">
               
                <li class="nav-item">
                    <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">
                        <img src="{{asset('public/images/tab1.png')}}" alt="" title="" class="img-noactive">
                        <img src="{{asset('public/images/tab1-x.png')}}" alt="" title="" class="img-active">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">
                        <img src="{{asset('public/images/tab2.png')}}" alt="" title="" class="img-noactive">
                        <img src="images/tab2-x.png" alt="" title="" class="img-active">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab3" role="tab" data-toggle="tab">
                        <img src="{{asset('public/images/tab3.png')}}" alt="" title="" class="img-noactive">
                        <img src="images/tab3-x.png" alt="" title="" class="img-active">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab4" role="tab" data-toggle="tab">
                        <img src="{{asset('public/images/tab4.png')}}" alt="" title="" class="img-noactive">
                        <img src="images/tab4-x.png" alt="" title="" class="img-active">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab5" role="tab" data-toggle="tab">
                        <img src="{{asset('public/images/tab5.png')}}" alt="" title="" class="img-noactive">
                        <img src="images/tab5-x.png" alt="" title="" class="img-active">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab5" role="tab" data-toggle="tab">
                        <img src="{{asset('public/images/tab6.png')}}" alt="" title="" class="img-noactive">
                        <img src="images/tab6-x.png" alt="" title="" class="img-active">
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in show active" id="tab1">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="product">
                                <a href="chi-tiet-san-pham.html" title="" class="img-pro">
                                    <img src="images/sp1.png" alt="" title="">
                                </a>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="new-price">50.000</span>
                                        <span class="old-price">70.000</span>
                                    </p>
                                </div>
                                <div class="price-down">
                                    <span class="flex-center-center">-10%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp2.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="new-price">50.000</span>
                                        <span class="old-price">70.000</span>
                                    </p>
                                </div>
                                <div class="price-down">
                                    <span class="flex-center-center">-10%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp3.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp4.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp5.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp6.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp3.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp8.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab2">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="product">
                                <a href="chi-tiet-san-pham.html" title="" class="img-pro">
                                    <img src="images/sp5.png" alt="" title="">
                                </a>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="new-price">50.000</span>
                                        <span class="old-price">70.000</span>
                                    </p>
                                </div>
                                <div class="price-down">
                                    <span class="flex-center-center">-10%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp3.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="new-price">50.000</span>
                                        <span class="old-price">70.000</span>
                                    </p>
                                </div>
                                <div class="price-down">
                                    <span class="flex-center-center">-10%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp3.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp8.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp1.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp6.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp3.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp8.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab3">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="product">
                                <a href="chi-tiet-san-pham.html" title="" class="img-pro">
                                    <img src="images/sp1.png" alt="" title="">
                                </a>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="new-price">50.000</span>
                                        <span class="old-price">70.000</span>
                                    </p>
                                </div>
                                <div class="price-down">
                                    <span class="flex-center-center">-10%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp3.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="new-price">50.000</span>
                                        <span class="old-price">70.000</span>
                                    </p>
                                </div>
                                <div class="price-down">
                                    <span class="flex-center-center">-10%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp5.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp4.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp5.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp6.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp3.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp8.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="product">
                                <a href="chi-tiet-san-pham.html" title="" class="img-pro">
                                    <img src="images/sp1.png" alt="" title="">
                                </a>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="new-price">50.000</span>
                                        <span class="old-price">70.000</span>
                                    </p>
                                </div>
                                <div class="price-down">
                                    <span class="flex-center-center">-10%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp2.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="new-price">50.000</span>
                                        <span class="old-price">70.000</span>
                                    </p>
                                </div>
                                <div class="price-down">
                                    <span class="flex-center-center">-10%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp3.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp4.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp5.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp6.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp3.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp8.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab5">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="product">
                                <a href="chi-tiet-san-pham.html" title="" class="img-pro">
                                    <img src="images/sp1.png" alt="" title="">
                                </a>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="new-price">50.000</span>
                                        <span class="old-price">70.000</span>
                                    </p>
                                </div>
                                <div class="price-down">
                                    <span class="flex-center-center">-10%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp2.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="new-price">50.000</span>
                                        <span class="old-price">70.000</span>
                                    </p>
                                </div>
                                <div class="price-down">
                                    <span class="flex-center-center">-10%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp3.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="chi-tiet-san-pham.html" title="">
                                        <img src="images/sp4.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="chi-tiet-san-pham.html" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp5.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp6.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp3.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product">
                                <div class="img-pro">
                                    <a href="" title="">
                                        <img src="images/sp8.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
                                            Cam Hà Giang
                                        </a>
                                    </h4>
                                    <p class="price">
                                        <span class="normal-price">60.000</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab6">Continue Update</div>
            </div>
        </div>
    </section>
    <section class="brand">
        <div class="container-fluid">
            <div class="brand-item">
                <img src="{{asset('public/images/sx1.png')}}" alt="" title="">
            </div>
            <div class="brand-item">
                <img src="{{asset('public/images/sx2.png')}}" alt="" title="">
            </div>
            <div class="brand-item">
                <img src="{{asset('public/images/sx3.png')}}" alt="" title="">
            </div>
            <div class="brand-item">
                <img src="{{asset('public/images/sx4.png')}}" alt="" title="">
            </div>
            <div class="brand-item">
                <img src="{{asset('public/images/sx5.png')}}" alt="" title="">
            </div>
            <div class="brand-item">
                <img src="{{asset('public/images/sx6.png')}}" alt="" title="">
            </div>
        </div>
    </section>
    <section class="sale">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="sure">
                        <h4 class="text-center">Chất lượng sản phẩm của chúng tôi</h4>
                        <p class="star text-center">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </p>
                        <p class="text-center sure-note">Chúng tôi cam kết mang đến những sản phẩm <br/>chất lượng nhất đến quý khách hàng</p>
                        <p>
                            <img src="images/chatluong.png" alt="" title="" class="img-fluid">
                        </p>
                    </div>
                </div>
                <div class="offset-md-1 col-md-7">
                    <div class="sale-day">
                        <h2 class="title text-center">Khuyến mại trong ngày</h2>
                        <p class="text-center">Những sản phẩm chúng tôi giảm giá trong ngày</p>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab1-s" role="tab" data-toggle="tab">
                                    <img src="images/tab1.png" alt="" title="" class="img-noactive">
                                    <img src="images/tab1-x.png" alt="" title="" class="img-active">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab2-s" role="tab" data-toggle="tab">
                                    <img src="images/tab2.png" alt="" title="" class="img-noactive">
                                    <img src="images/tab2-x.png" alt="" title="" class="img-active">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab3-s" role="tab" data-toggle="tab">
                                    <img src="images/tab3.png" alt="" title="" class="img-noactive">
                                    <img src="images/tab3-x.png" alt="" title="" class="img-active">
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in show active" id="tab1-s">
                                <div class="owl-carousel sale-slider">
                                    <div class="product">
                                        <a href="chi-tiet-san-pham.html" title="" class="img-pro">
                                            <img src="images/sp1.png" alt="" title="">
                                        </a>
                                        <div class="info-pro">
                                            <h4>
                                                <a href="chi-tiet-san-pham.html" title="">
                                                    Cam Hà Giang
                                                </a>
                                            </h4>
                                            <p class="price">
                                                <span class="new-price">50.000</span>
                                                <span class="old-price">70.000</span>
                                            </p>
                                        </div>
                                        <div class="price-down">
                                            <span class="flex-center-center">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <a href="chi-tiet-san-pham.html" title="" class="img-pro">
                                            <img src="images/sp2.png" alt="" title="">
                                        </a>
                                        <div class="info-pro">
                                            <h4>
                                                <a href="chi-tiet-san-pham.html" title="">
                                                    Cam Hà Giang
                                                </a>
                                            </h4>
                                            <p class="price">
                                                <span class="new-price">50.000</span>
                                                <span class="old-price">70.000</span>
                                            </p>
                                        </div>
                                        <div class="price-down">
                                            <span class="flex-center-center">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <a href="chi-tiet-san-pham.html" title="" class="img-pro">
                                            <img src="images/sp3.png" alt="" title="">
                                        </a>
                                        <div class="info-pro">
                                            <h4>
                                                <a href="chi-tiet-san-pham.html" title="">
                                                    Cam Hà Giang
                                                </a>
                                            </h4>
                                            <p class="price">
                                                <span class="new-price">50.000</span>
                                                <span class="old-price">70.000</span>
                                            </p>
                                        </div>
                                        <div class="price-down">
                                            <span class="flex-center-center">-10%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in show active" id="tab2-s">
                                <div class="owl-carousel sale-slider">
                                    <div class="product">
                                        <a href="chi-tiet-san-pham.html" title="" class="img-pro">
                                            <img src="images/sp6.png" alt="" title="">
                                        </a>
                                        <div class="info-pro">
                                            <h4>
                                                <a href="chi-tiet-san-pham.html" title="">
                                                    Cam Hà Giang
                                                </a>
                                            </h4>
                                            <p class="price">
                                                <span class="new-price">50.000</span>
                                                <span class="old-price">70.000</span>
                                            </p>
                                        </div>
                                        <div class="price-down">
                                            <span class="flex-center-center">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <a href="chi-tiet-san-pham.html" title="" class="img-pro">
                                            <img src="images/sp5.png" alt="" title="">
                                        </a>
                                        <div class="info-pro">
                                            <h4>
                                                <a href="chi-tiet-san-pham.html" title="">
                                                    Cam Hà Giang
                                                </a>
                                            </h4>
                                            <p class="price">
                                                <span class="new-price">50.000</span>
                                                <span class="old-price">70.000</span>
                                            </p>
                                        </div>
                                        <div class="price-down">
                                            <span class="flex-center-center">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <a href="chi-tiet-san-pham.html" title="" class="img-pro">
                                            <img src="images/sp4.png" alt="" title="">
                                        </a>
                                        <div class="info-pro">
                                            <h4>
                                                <a href="chi-tiet-san-pham.html" title="">
                                                    Cam Hà Giang
                                                </a>
                                            </h4>
                                            <p class="price">
                                                <span class="new-price">50.000</span>
                                                <span class="old-price">70.000</span>
                                            </p>
                                        </div>
                                        <div class="price-down">
                                            <span class="flex-center-center">-10%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in show active" id="tab3-s">
                                <div class="owl-carousel sale-slider">
                                    <div class="product">
                                        <a href="chi-tiet-san-pham.html" title="" class="img-pro">
                                            <img src="images/sp2.png" alt="" title="">
                                        </a>
                                        <div class="info-pro">
                                            <h4>
                                                <a href="chi-tiet-san-pham.html" title="">
                                                    Cam Hà Giang
                                                </a>
                                            </h4>
                                            <p class="price">
                                                <span class="new-price">50.000</span>
                                                <span class="old-price">70.000</span>
                                            </p>
                                        </div>
                                        <div class="price-down">
                                            <span class="flex-center-center">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <a href="chi-tiet-san-pham.html" title="" class="img-pro">
                                            <img src="images/sp4.png" alt="" title="">
                                        </a>
                                        <div class="info-pro">
                                            <h4>
                                                <a href="chi-tiet-san-pham.html" title="">
                                                    Cam Hà Giang
                                                </a>
                                            </h4>
                                            <p class="price">
                                                <span class="new-price">50.000</span>
                                                <span class="old-price">70.000</span>
                                            </p>
                                        </div>
                                        <div class="price-down">
                                            <span class="flex-center-center">-10%</span>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <a href="chi-tiet-san-pham.html" title="" class="img-pro">
                                            <img src="images/sp3.png" alt="" title="">
                                        </a>
                                        <div class="info-pro">
                                            <h4>
                                                <a href="chi-tiet-san-pham.html" title="">
                                                    Cam Hà Giang
                                                </a>
                                            </h4>
                                            <p class="price">
                                                <span class="new-price">50.000</span>
                                                <span class="old-price">70.000</span>
                                            </p>
                                        </div>
                                        <div class="price-down">
                                            <span class="flex-center-center">-10%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Vegetable - Keep your life Organic always !</h4>
                </div>
                <div class="col-md-6 flex-center-end">
                    <form class="form-newsletter">
                        <input type="text" placeholder="E - Mail">
                        <button class="btn">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <h2 class="title text-center">Tin tức</h2>
            <div class="row">
                <div class="col-md-3 visible-desktop">
                    <a href="{{url('tin-tuc')}}" title=""> <img src="{{asset('public/images/a1.png')}}" alt="" title=""></a>
                </div>
                <div class="col-md-9">
                    <div class="news-item">
                        <div class="row">
                            <div class="col-md-5 pdr-0">
                                <div class="news-text">
                                    <h4>
                                        <a href="{{url('tin-tuc/'.$tintuc_moinhat[0]->alias.'.html')}}" title="">{{$tintuc_moinhat[0]->name}}</a>
                                    </h4>
                                    <p class="time">{{date('d/m/Y',strtotime($tintuc_moinhat[1]->created_at))}}</p>
                                    <p  class="mg-15">{{$tintuc_moinhat[0]->mota}} </p>
                                    <p class="text-center">
                                        <a href="{{url('tin-tuc/'.$tintuc_moinhat[0]->alias.'.html')}}" title="" class="read flex-center-center">Xem tiếp</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7 pdl-0">
                                <div class="news-img">
                                    <a href="{{url('tin-tuc/'.$tintuc_moinhat[0]->alias.'.html')}}" title=""> <img src="{{asset('upload/news/'.$tintuc_moinhat[0]->photo)}}" alt="" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="row flex-row-reverse">
                            <div class="col-md-5 pdl-0">
                                <div class="news-text">
                                    <h4>
                                        <a href="{{url('tin-tuc/'.$tintuc_moinhat[1]->alias.'.html')}}" title="">{{$tintuc_moinhat[1]->name}}</a>
                                    </h4>
                                    <p class="time">{{date('d/m/Y',strtotime($tintuc_moinhat[1]->created_at))}}</p>
                                    <p class="mg-15">{{$tintuc_moinhat[0]->mota}} </p>
                                    <p class="text-center">
                                        <a href="{{url('tin-tuc/'.$tintuc_moinhat[1]->alias.'.html')}}" title="" class="read flex-center-center">Xem tiếp</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7 pdr-0">
                                <div class="news-img">
                                    <a href="{{url('tin-tuc/'.$tintuc_moinhat[1]->alias.'.html')}}" title=""><img src="{{asset('upload/news/'.$tintuc_moinhat[1]->photo)}}" alt="" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<nav id="cd-lateral-nav" class="visible-mobile">
    <div class="search visible-mobile search-mobile">
        <form class="form-search" action="">
            <input type="text" name="content-search" class="form-input has-action" placeholder="Tìm kiếm">
            <button type="submit" class="button button--icon button--inputAction">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
    <ul class="cd-navigation nav-dropdown">
        <li><a href="index.html" title="">Trang chủ</a> </li>
        <li><a href="gioi-thieu.html" title="">Giới thiệu</a> </li>
        <li><a href="san-pham.html" title="">Sản phẩm</a> </li>
        <li><a href="tin-tuc.html" title="">Tin tức</a> </li>
        <li><a href="lien-he.html" title="">Liên hệ</a> </li>
    </ul>
</nav>
@endsection
