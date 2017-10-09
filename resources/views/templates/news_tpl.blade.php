@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<section class="bre">
    <div class="container">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="{{url('')}}">Trang chủ</a>
            <span class="breadcrumb-item active">Tin tức</span>
        </nav>
    </div>
</section>
<section class="news">
    <div class="container">
        <h1 class="title text-center">Tin tức</h1>
        <div class="row">
            @foreach($tintuc as $item)
            <div class="col-md-6">
                <div class="news-item">
                    <div class="row">
                        <div class="col-md-6 pdr-0">
                            <div class="news-img">
                                <a href="{{url('tin-tuc/'.$item->alias.'.html')}}" title=""> <img src="{{asset('upload/news/'.$item->photo)}}" alt="" title=""></a>
                            </div>
                        </div>
                        <div class="col-md-6 pdl-0">
                            <div class="news-text">
                                <h4>
                                    <a href="{{url('tin-tuc/'.$item->alias.'.html')}}" title="">{{$item->name}}</a>
                                </h4>
                                <p class="time">23/ 09/ 2017</p>
                                <p class="mg-15">{{$item->mota}} </p>
                                <p class="text-center">
                                    <a href="{{url('tin-tuc/'.$item->alias.'.html')}}" title="" class="read flex-center-center">Xem tiếp</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="paginations">
            {!! $tintuc->links() !!}
        </div>
        <!-- <ul class="pagination">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul> -->
    </div>
</section>
@endsection
