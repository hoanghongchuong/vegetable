@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');

?>

<section class="bre">
    <div class="container">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="{{url('')}}">Trang chủ</a>
            <span class="breadcrumb-item active">Liên hệ</span>
        </nav>
    </div>
</section>
<section class="map" style="margin-bottom: 60px;">
    <div class="container">
        <div class="map_container">{!! $setting->iframemap !!}</div>
        
    </div>
</section>
<section class="checkout contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-group contact-frm" method="post" action="{{route('postContact')}}">
                    {{ csrf_field() }}
                    <input type="text" name="txtName" placeholder="Họ tên" >
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="phone" placeholder="Số điện thoại">
                    <textarea rows="4" name="content" placeholder="Nội dung"></textarea>
                    <!-- <a href="" class="send flex-center-center float-right" type="submit" title="">
                        Gửi
                    </a> -->
                    <button type="submit" class="send flex-center-center float-right">Gửi</button>
                </form>
            </div>
            <div class="col-md-6">
                <h1>Liên hệ</h1>
                <div class="desc">Công ty Cổ phần Công nghệ và Truyền thông GCO – GCO Group (tiền thân là
                    Công ty Cổ phần Công nghệ Helios Việt Nam) hoạt động trong các lĩnh vực:
                    Digital Marketing, Web Development, E-Learning, Online Media và E-Commerce</div>
                <p>
                    <img src="{{asset('public/images/map.png')}}" alt="" title="">
                    <span>{{$setting->address}}</span>
                </p>
                <p>
                    <img src="{{asset('public/images/phone.png')}}" alt="" title="">
                    <span>{{$setting->phone}}</span>
                </p>
                <p>
                    <img src="{{asset('public/images/email.png')}}" alt="" title="">
                    <span>{{$setting->email}}</span>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
