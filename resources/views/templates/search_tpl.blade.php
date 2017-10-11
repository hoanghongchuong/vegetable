@extends('index')
@section('content')

<div class="container">
    <div class="bre">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="{{url('')}}">Trang chủ</a>
            <span class="breadcrumb-item active">Tìm kiếm</span>
        </nav>
    </div>
</div>
<section class="product-list">
    <div class="container">
        <div class="row">
        	@foreach($products as $product)
        	<div class="col-md-3">
                <div class="product">
                    <a href="{{url('san-pham/'.$product->alias.'.html')}}" title="" class="img-pro">
                        <img src="{{asset('upload/product/'.$product->photo)}}" alt="" title="">
                    </a>
                    <div class="info-pro">
                        <h4>
                            <a href="{{url('san-pham/'.$product->alias.'.html')}}" title="">
                                {{$product->name}}
                            </a>
                        </h4>
                        <p class="price">
                            <span class="new-price">{{number_format($product->price)}}</span>
                            @if(!empty($product->price_old))
                            <span class="old-price">{{number_format($product->price_old)}}</span>
                            @endif
                        </p>
                    </div>
                    <div class="price-down">
                       <!--  <span class="flex-center-center">-10%</span> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
