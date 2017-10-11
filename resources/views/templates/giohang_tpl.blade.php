@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>


<section class="bre">
    <div class="container">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="#">Trang chủ</a>
            <span class="breadcrumb-item active">Giỏ hàng</span>
        </nav>
    </div>
</section>
<section class="cart">
    <div class="container">
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th></th>
            </tr>
            </thead>
             <form action="{{route('updateCart')}}" method="post">
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                <tbody>
                    @foreach($product_cart as $key=>$product)
                    <tr>
                        <td>
                            <div class="pr">
                                <img src="{{asset('upload/product/'.$product->options->photo)}}" alt="" title="">
                                <div class="cart-text">
                                    <h4>{{$product->name}}</h4>
                                    <p class="price">{{number_format($product->price)}}/1kg</p>
                                </div>
                                <!-- <button type="button" class="close-sp" >
                                    <span aria-hidden="true">×</span>
                                </button> -->
                            </div>
                        </td>
                        <td>
                            <input type="number" value="{{$product->qty}}" id="{{ $product->rowId }}" min="1" name="numb[{{$key}}]" class="number">
                            Kg
                        </td>
                        <td><p class="price">{{number_format($product->price * $product->qty)}}</p></td>
                        <td><a href="{{url('xoa-gio-hang/'.$product->rowId)}}" id="{{$product->rowId}}" title="">Xóa</a></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="5">
                            <div class="total-div">
                                <p class="total price">
                                    Tổng: {{number_format($total)}}
                                </p>
                                <button type="submit"  class="send flex-center-center" style="margin-right: 10px;">Cập nhật</button>
                                <a href="{{url('thanh-toan')}}" title="" class="send flex-center-center">
                                    Tiếp tục
                                </a>

                            </div>
                        </td>
                    </tr>
                </tbody>
            </form>
        </table>
    </div>
</section>
<script>
    window.token = '{{ csrf_token() }}';
</script>

@endsection
