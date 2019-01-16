<<<<<<< HEAD
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
=======
@extends('layouts.industry')
@section('title')
Capstone Indonesia
@endsection
@section('content')

<?php
$profile = \App\Profile::where('id',1)->first();
?>
<style>
.bulat{
border-radius:100em;
opacity:1;
width:200px;
height:200px;
}
</style>
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-12 col-md-12">
                <h6 class="text-uppercase">{{$profile->pengantar1}}</h6>
                <h1>
                    {{$profile->pengantar2}}            
                </h1>
                <p class="text-white">
                    {{$profile->pengantar3}}
                </p>
                <a href="#" class="primary-btn header-btn text-uppercase">Get Started</a>
            </div>                                              
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start cat Area -->
<section class="cat-area section-gap" id="feature">
    <div class="container">     
        <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text text-center">
                <h1 class="mb-10">Kelebihan Kami</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>
        <?php  
        $kelebihan = \App\Kelebihan::all();
        ?>             
        <div class="row">
            @foreach ($kelebihan as $q)
            <div class="col-md-3">
                <div class="single-cat d-flex flex-column" id="backgroud" style="width: auto;height: auto;">
                    <!-- <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a> -->
                    <img class="bulat hb-sm-margin mx-auto d-block" src="{{url('images/'.$q->gambar)}}">
                    <h4 class="mb-20" style="margin-top: 23px;">{{$q->judul}}</h4>
                    <p>
                        {!!$q->keterangan!!}
                    </p>
                </div>                                                       
            </div>
            @endforeach
        </div>
    </div>  
</section>
<!-- End cat Area -->       



<!-- Start service Area -->
<!-- End service Area -->



<!-- Start project Area -->
<!-- End project Area -->



@endsection
>>>>>>> cdb8a7b65944344a286b59b6b0c34fffc086d79f
