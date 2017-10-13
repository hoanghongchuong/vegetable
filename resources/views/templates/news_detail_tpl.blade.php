@extends('index')
@section('content')
<section class="bre">
    <div class="container">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="{{url('')}}">Trang chủ</a>
            <a class="breadcrumb-item" href="{{url('tin-tuc')}}">Tin tức</a>
            <span class="breadcrumb-item active">{{$news_detail->name}}</span>
        </nav>
    </div>
</section>
<section class="news-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="news-detail-left">
                    <h1 class="title">
                        {{$news_detail->name}}
                        <br/>
                        <img src="{{asset('public/images/gach.png')}}" title="" alt="">
                    </h1>
                    <p class="time">{{date('d/m/Y', strtotime($news_detail->created_at))}}</p>
                    <div class="content-news">
                        {!! $news_detail->content !!}
                    </div>
                    <p>
                       <div class="comment">
                            <div class="fb-comments" data-href="{{url('san-pham/'.$news_detail->alias.'.html')}}" data-numposts="2"></div>
                        </div>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-related">
                    <h2>
                        Gần đây
                        <br/>
                        <img src="{{asset('public/images/gach.png')}}" title="" alt="">
                    </h2>
                    <ul>
                        @foreach($tinkhac as $item)
                        <li>
                            <div class="image">
                                <a href="{{url('tin-tuc/'.$item->alias.'.html')}}" title="">
                                    <img src="{{asset('upload/news/'.$item->photo)}}" alt="" title="">
                                </a>
                            </div>
                            <div class="text">
                                <h4>
                                    <a href="{{url('tin-tuc/'.$item->alias.'.html')}}" title="">{{$item->name}}</a>
                                </h4>
                                <p><img src="{{asset('public/images/gach2.png')}}" alt="" title=""> </p>
                                <p class="time">{{date('d/m/Y', strtotime($item->created_at))}}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
