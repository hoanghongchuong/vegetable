@extends('index')
@section('content')
<?php $setting = Cache::get('setting'); ?>
<section class="banner">
    <img src="{{asset('public/images/banner.png')}}" alt="" title="" class="img-fluid">
    </section>
    <section class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-img">
                        <div class="fotorama" data-nav="thumbs">
                            @foreach($album_hinh as $img)
                            <a href="{{asset('upload/hasp/'.$img->photo)}}"><img src="{{asset('upload/hasp/'.$img->photo)}}"></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-info">
                        <h1>{{$product_detail->name}}</h1>
                        <p>{{$product_detail->mota}}</p>
                        <p>
                            <span class="bold">Xuất xứ:</span>
                            <span>{{$product_detail->xuatxu}}</span>
                        </p>
                        <h2 class="price">Giá : {{number_format($product_detail->price)}}</h2>
                        <div class="content-detail-product">
                            {!! $product_detail->content !!}
                        </div>
                        <p class="pro-action">
                            <a href="" title=""  data-toggle="modal" data-target="#modal" class="flex-center-center">Thêm vào giỏ hàng</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-list">
        <div class="container">
            <h2 class="title">Sản phẩm cùng danh mục</h2>
            <div class="row">
                @foreach($productSameCate as $pro)
                <div class="col-md-3">
                    <div class="product">
                        <a href="{{url('san-pham/'.$pro->alias.'.html')}}" title="" class="img-pro">
                            <img src="{{asset('upload/product/'.$pro->photo)}}" alt="" title="">
                        </a>
                        <div class="info-pro">
                            <h4>
                                <a href="" title="">
                                    {{$pro->name}}
                                </a>
                            </h4>
                            <p class="price">
                                <span class="new-price">{{number_format($pro->price)}}</span>
                                @if(!empty($pro->price_old))
                                <span class="old-price">{{number_format($pro->price_old)}}</span>
                                @endif
                            </p>
                        </div>
                        <div class="price-down">
                            <!-- <span class="flex-center-center">-10%</span> -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="product-list">
        <div class="container">
            <h2 class="title text-center">Sản phẩm khác</h2>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">
                        <img src="images/tab1.png" alt="" title="" class="img-noactive">
                        <img src="images/tab1-x.png" alt="" title="" class="img-active">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">
                        <img src="images/tab2.png" alt="" title="" class="img-noactive">
                        <img src="images/tab2-x.png" alt="" title="" class="img-active">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab3" role="tab" data-toggle="tab">
                        <img src="images/tab3.png" alt="" title="" class="img-noactive">
                        <img src="images/tab3-x.png" alt="" title="" class="img-active">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab4" role="tab" data-toggle="tab">
                        <img src="images/tab4.png" alt="" title="" class="img-noactive">
                        <img src="images/tab4-x.png" alt="" title="" class="img-active">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab5" role="tab" data-toggle="tab">
                        <img src="images/tab5.png" alt="" title="" class="img-noactive">
                        <img src="images/tab5-x.png" alt="" title="" class="img-active">
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in show active" id="tab1">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="product">
                                <a href="" title="" class="img-pro">
                                    <img src="images/sp1.png" alt="" title="">
                                </a>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
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
                                    <a href="" title="">
                                        <img src="images/sp2.png" alt="" title="">
                                    </a>
                                </div>
                                <div class="info-pro">
                                    <h4>
                                        <a href="" title="">
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
                                        <img src="images/sp4.png" alt="" title="">
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
                <div role="tabpanel" class="tab-pane fade" id="tab2">Continue Update</div>
                <div role="tabpanel" class="tab-pane fade" id="tab3">Continue Update</div>
                <div role="tabpanel" class="tab-pane fade" id="tab4">Continue Update</div>
                <div role="tabpanel" class="tab-pane fade" id="tab5">Continue Update</div>
                <div role="tabpanel" class="tab-pane fade" id="tab6">Continue Update</div>
            </div>
        </div>
    </section>
    <section class="brand">
        <div class="container-fluid">
            <div class="brand-item">
                <img src="images/sx1.png" alt="" title="">
            </div>
            <div class="brand-item">
                <img src="images/sx2.png" alt="" title="">
            </div>
            <div class="brand-item">
                <img src="images/sx3.png" alt="" title="">
            </div>
            <div class="brand-item">
                <img src="images/sx4.png" alt="" title="">
            </div>
            <div class="brand-item">
                <img src="images/sx5.png" alt="" title="">
            </div>
            <div class="brand-item">
                <img src="images/sx6.png" alt="" title="">
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
                                        <a href="" title="" class="img-pro">
                                            <img src="images/sp1.png" alt="" title="">
                                        </a>
                                        <div class="info-pro">
                                            <h4>
                                                <a href="" title="">
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
                                        <a href="" title="" class="img-pro">
                                            <img src="images/sp2.png" alt="" title="">
                                        </a>
                                        <div class="info-pro">
                                            <h4>
                                                <a href="" title="">
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
                                        <a href="" title="" class="img-pro">
                                            <img src="images/sp3.png" alt="" title="">
                                        </a>
                                        <div class="info-pro">
                                            <h4>
                                                <a href="" title="">
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
                    <a href="" title=""> <img src="images/a1.png" alt="" title=""></a>
                </div>
                <div class="col-md-9">
                    <div class="news-item">
                        <div class="row">
                            <div class="col-md-5 pdr-0">
                                <div class="news-text">
                                    <h4>
                                        <a href="" title="">Chợ Hà Nội khan hiếm rau xanh, giá tăng gấp đôi</a>
                                    </h4>
                                    <p class="time">23/ 09/ 2017</p>
                                    <p  class="mg-15">Sáng 23 -09 như thường lệ, chị Lê Thị Phúc (ngụ tại phố Hồng Mai, quận Hai Bà Trưng) ra chợ mua thức ăn. Khi qua hàng rau xanh, chị Phúc rất bất ngờ khi </p>
                                    <p class="text-center">
                                        <a href="" title="" class="read flex-center-center">Xem tiếp</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7 pdl-0">
                                <div class="news-img">
                                    <a href="" title=""> <img src="images/news.png" alt="" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="row flex-row-reverse">
                            <div class="col-md-5 pdl-0">
                                <div class="news-text">
                                    <h4>
                                        <a href="" title="">Chợ Hà Nội khan hiếm rau xanh, giá tăng gấp đôi</a>
                                    </h4>
                                    <p class="time">23/ 09/ 2017</p>
                                    <p class="mg-15">Sáng 23 -09 như thường lệ, chị Lê Thị Phúc (ngụ tại phố Hồng Mai, quận Hai Bà Trưng) ra chợ mua thức ăn. Khi qua hàng rau xanh, chị Phúc rất bất ngờ khi </p>
                                    <p class="text-center">
                                        <a href="" title="" class="read flex-center-center">Xem tiếp</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7 pdr-0">
                                <div class="news-img">
                                    <a href="" title=""><img src="images/news2.png" alt="" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
