<?php
    $setting = Cache::get('setting');
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <a id="cd-menu-trigger" href="#0" class="visible-mobile"><span class="cd-menu-icon"></span></a>
                    <a href="{{url('')}}" title="">
                        <img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="" title="">
                    </a>
                </div>
            </div>
            <div class="col-md-8 visible-desktop">
                <div class="header-right">
                    <ul class="main-nav">
                        <li><a href="{{url('')}}" title="">Trang chủ</a> </li>
                        <li><a href="{{url('gioi-thieu')}}" title="">Giới thiệu</a> </li>
                        <li><a href="{{url('san-pham')}}" title="">Sản phẩm</a> </li>
                        <li><a href="{{url('tin-tuc')}}" title="">Tin tức</a> </li>
                        <li><a href="{{url('lien-he')}}" title="">Liên hệ</a> </li>
                    </ul>
                    <div class="minicart">
                        <a class="action show-cart" href="{{url('gio-hang')}}" title="">
                            <span class="icon-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                            <span class="number-cart">{{\Cart::count()}}</span>
                        </a>
                    </div>
                    <div class="field-search">
                        
                            <div class="control">
                                <form method="get" action="{{route('search')}}">
                                    <input type="text" name="txtSearch" class="input-abs" placeholder="Tìm kiếm...">
                                </form>
                                <button class="action-search">
                                    <span><i class="fa fa-search" aria-hidden="true"></i></span>
                                </button>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>