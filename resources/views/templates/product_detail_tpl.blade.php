@extends('index')
@section('content')
<?php $setting = Cache::get('setting'); ?>
<section class="bcsection">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('')}}" title="">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{url('san-pham')}}" title="">Sản phẩm</a></li>
            <li class="breadcrumb-item"><a href="#" title="">{{$product_detail->name}}</a></li>
        </ul>
    </div>
</section>

<section class="pdetail">
    <div class="container">
        <h2 class="about-tit"><a href="javascript:;" title="{{$product_detail->name}}">{{$product_detail->name}}</a></h2>
        <div class="row">
            <div class="col-sm-6">
                <a href="#" title=""><img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="" title=""></a>
            </div>
            <div class="col-sm-6">
                <!-- <ul class="pdetail-ul">
                    <li>Fashion house giao hàng và thu tiền tận nơi toàn quốc.</li> 
                    <li>Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên.</li> 
                    <li>Nhanh tay click MUA NGAY !</li>
                </ul> -->

                <h2 class="pdetail-price">$<span>{{number_format($product_detail->price)}}</span></h2>
                <div class="mota">{!! $product_detail->mota !!}</div>

                <h3 class="pdetail-hl">Hotline hỗ trợ tư vấn miễn phí</h3>
                <div class="text-center pdetail-contact">
                    <a href="tel:{{$setting->hotline}}">{{$setting->hotline}}</a>
                </div>
                <div class="pdetail-timeship">
                    <h4 class="text-uppercase pdetail-timeship-tit">THỜI GIAN GIAO HÀNG</h4>
                    <p>Miễn phí vận chuyển TOÀN QUỐC đối với đơn hàng từ 3 sản phẩm trở lên.</p>
                </div>
            </div>
        </div>

        <div class="row pdetail-content">
            <div class="col-sm-3 col-md-2">
                <?php $banners = DB::table('banner_content')->where('position',6)->get(); ?>
                <a href="#" title=""><img src="{{asset('upload/banner/'.$banners[2]->image)}}" alt="" title=""></a>
            </div>
            <div class="col-sm-9 col-md-7 about-content">
                <h2 class="about-tit"><a href="about.html" title="">Đặc điểm nổi bật</a></h2>

                {!! $product_detail->content !!}

                <div class="comment">
                    <div class="fb-comments" data-href="{{url('san-pham/'.$product_detail->alias.'.html')}}" data-numposts="2"></div>
                </div>

            </div>
            <div class="col-sm-12 col-md-3 text-center">
                <a href="#" title=""><img src="{{asset('upload/banner/'.$banners[1]->image)}}" alt="" title=""></a>
                <a href="#" title=""><img src="{{asset('upload/banner/'.$banners[0]->image)}}" alt="" title=""></a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <a href="#" title=""><img src="{{asset('public/images/1-12.jpg')}}" alt="" title=""></a>
    </div>
</section>

<section class="pre">
    <div class="container">
        <h2 class="about-tit"><a href="#" title="">Sản phẩm liên quan</a></h2>
        <div class="row">
            @foreach($productSameCate as $item)
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="newpro-wrap">
                    <a href="{{url('san-pham/'.$item->alias.'.html')}}" class="newpro-over" title=""><img src="{{asset('upload/product/'.$item->photo)}}" alt="" title=""></a>
                </div>
                <div class="newpro-intro">
                    <h3 class="text-center newpro-intro-name"><a href="{{url('san-pham/'.$item->alias.'.html')}}" title="">{{$item->name}}</a></h3>
                    <h4 class="text-center newpro-intro-price">$<span> {{number_format($item->price)}}</span></h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
