@extends('index')
@section('content')
<section class="bcsection">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('')}}" title="">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{url('san-pham')}}" title="">Sản phẩm</a></li>
            <li class="breadcrumb-item"><a href="#" title="">{{$product_cate->name}}</a></li>
        </ul>
    </div>
</section>

<section class="product">
    <div class="container">
        <h2 class="about-tit"><a href="about.html" title="">Sản phẩm</a></h2>
        <div class="row">
            @foreach($cate_pro as $cate)
            <div class="col-md-4 banner-item pro-item"><!-- col-sm-12  -->
                <div class="banner-wrap">
                    <a href="{{url('san-pham/'.$cate->alias)}}" title=""><img src="{{asset('upload/product/'.$cate->photo)}}" alt="" title=""></a>
                    <div class="banner-intro">
                        <div>
                            <h2 class="text-uppercase banner-intro-tit">{{$cate->name}}</h2>
                            <?php $products = DB::table('products')->where('cate_id',$cate->id)->get() ?>
                            <h3 class="banner-intro-quan">{{ count($products) }} sản phẩm</h3>
                        </div>
                        
                        <a href="{{url('san-pham/'.$cate->alias)}}" title="" class="banner-btn">Xem ngay</a>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($product as $item)
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
       <div class="paginations">
          {!! $product->links() !!}
        </div>
    </div>
</section>

@endsection
