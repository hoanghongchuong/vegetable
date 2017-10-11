@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>

<section class="bre">
    <div class="container">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="{{url('')}}">Trang chủ</a>
            <span class="breadcrumb-item active">Thanh toán</span>
        </nav>
    </div>
</section>
<section class="checkout">
    <div class="container">
		 <form class=" cart-info-frm" method="post" action="{{route('postOrder')}}">
        <div class="row">
	       
	            <input type="hidden" name="_token" value="{{csrf_token()}}">	
	            <div class="col-md-6">
	                <label>Họ và tên</label>
	                <input type="text" name="full_name" >
	                <label>Email</label>
	                <input type="email" name="email" >
	                <label>Địa chỉ</label>
	                <input type="text" name="address">
	                <!-- <label>Đường</label>
	                <input type="text" > -->
	               <!--  <label>Quận/Huyện</label>
	                <input type="text" > -->
	            </div>
	            <div class="col-md-6">
	                <label>Số điện thoại</label>
	                <input type="text" name="phone">
	                <!-- <label>Thành phố</label>
	                <input type="text" > -->
	                <label>Nội dung</label>
	                <textarea rows="4" name="note"></textarea>
	                <!-- <a class="send flex-center-center float-right" href="" title="" data-toggle="modal" data-target="#modal">
	                    Gửi đơn hàng
	                </a> -->
	                <button type="submit" class="btn cart-btn send flex-center-center float-right">Thanh toán</button>
	            </div>
	        
        </div>
         </form>
    </div>
</section>
@endsection