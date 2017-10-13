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
                        <h2 class="price">Giá : {{number_format($product_detail->price)}} / {{$product_detail->donvitinh}}</h2>
                        <div class="content-detail-product">
                            {!! $product_detail->content !!}
                        </div>
                        <!-- <form action="{{ route('addProductToCart') }}" method="post" accept-charset="utf-8">
                            
                            {!! csrf_field() !!}
                            <input type="hidden" name="product_id" value="{{ $product_detail->id }}">
                            <p class="pro-action">
                                <button type="submit">
                                    Thêm vào giỏ hàng
                                </button>
                            </p>
                         </form> -->
                         <input type="hidden" name="product_id" id="product_id" value="{{ $product_detail->id }}">
                         <button type="button" id="addCart" class="flex-center-center xx">Thêm vào giỏ hàng</button>
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
                @foreach($cate_pro as $key=>$cate)
                <li class="nav-item">
                    <a class="nav-link @if($key ==0) active @endif" href="#tab{{$key}}" role="tab" data-toggle="tab">
                         <img src="{{asset('upload/product/'.$cate->photo)}}" alt="" title="" class="">
                        <!-- <img src="images/tab1.png" alt="" title="" class="img-noactive">
                        <img src="images/tab1-x.png" alt="" title="" class="img-active"> -->
                    </a>
                </li>
                @endforeach
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                @foreach($cate_pro as $k=>$cates)
                <div role="tabpanel" class="tab-pane fade in show @if($k ==0) active @endif" id="tab{{$k}}">
                    <div class="row">
                        <?php $products = DB::table('products')->where('cate_id',$cates->id)->orderBy('id','desc')->take(16)->get() ?>
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
                @endforeach
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
                                <img src="{{asset('public/images/chatluong.png')}}" alt="" title="" class="img-fluid">
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
   <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <a href="{{url('gio-hang')}}" class="btn btn1 btn-secondary flex-center-center">xem giỏ hàng</a>
                        <a href="{{url('san-pham')}}" class="btn btn2 btn-primary flex-center-center">tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
<script>
    window.urlAddCart = '{{ route("addProductToCart") }}';
    window.token = '{{ csrf_token() }}';
</script>
