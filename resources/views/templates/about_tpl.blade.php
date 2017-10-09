@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<main class="cd-main-content">
    <section class="bre">
        <div class="container">
            <nav class="breadcrumb">
                <a class="breadcrumb-item" href="{{url('')}}">Trang chủ</a>
                <span class="breadcrumb-item active">Giới thiệu</span>
            </nav>
        </div>
    </section>
    <section class="about about-page">
        <div class="container">
            <h2 class="title text-center">Về chúng tôi</h2>
            <div class="content-about">
                {!! $about->content !!}
            </div>
            <p>
                <img src="{{asset('public/images/ck.png')}}" alt="" title="">
            </p>
        </div>
    </section>
</main>
@endsection
