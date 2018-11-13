<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog </title>
    <meta name="description" content="">
 <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}"">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"">
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>
    <header class="header-area header-area2">
        <div class="header-top bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="header-top-left">
                            <p>Always post powefull content.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="header-top-right text-right">
                            <ul>
                                <li><a href="{{ route('login') }}">My Account</a></li>
                                <li><a href="#">MMN Income</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 d-none d-sm-block">
                        <div class="header-banner">
                            <img src="/assets/images/banner2.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-2 col-12">
                        <div class="logo">
                            <a href="index.html">
                             <img src="/assets/images/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                     <div class="col-md-5 col-sm-12 col-9">
                        <div class="form-style search-form">
                            <form action="#">
                                <input type="text" placeholder="Search here...">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 d-none d-sm-block">
                        <div class="mainmenu">
                            <ul id="navigation">
                                <li class="active"><a href="javascript:void(0)">Home </a></li>
                                <li><a href="javascript:void(0)">blog </a></li>
                                <li><a href="about.html">About</a></li>

                                <!-- <li><a href="contact.html">Menu1</a></li>
                                <li><a href="javascript:void(0)">Menu2 </a></li>
                                <li><a href="javascript:void(0)">Menu3</a></li>
                                <li><a href="about.html">Menu4</a></li>

                                <li><a href="contact.html">Menu5</a></li>
                                <li><a href="javascript:void(0)">Menu6</a></li>
                                <li><a href="javascript:void(0)">Menu7 </a></li>
                                <li><a href="about.html">Menu8</a></li>

                                <li><a href="contact.html">Menu9</a></li>
                                <li><a href="contact.html">Menu10</a></li>
                                <li><a href="contact.html">Menu11</a></li> -->
                                @foreach($menus as $menu)
                                <li><a href="contact.html">{{ $menu->name}}</a></li>                                
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <div class="d-block d-sm-none clear col-3">
                        <div class="responsive-menu-wrap floatright"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>



@yield('index')
@yield('blogdetail')



<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
           <div class="col-12" style="border-bottom: 2px solid;">
            <div class="header-top-right">
                <ul>
                    <li><a href="#" style=" color: #000; ">Home</a></li>
                    <li><a href="#" style=" color: #000; ">About Us</a></li>
                    <li><a href="#" style=" color: #000; ">Privacy Policy</a></li>
                    <li><a href="#" style=" color: #000; ">Disclaimer</a></li>
                    <li><a href="#" style=" color: #000; ">CopyRight</a></li>
                    <li><a href="#" style=" color: #000; ">FQA</a></li>
                    <li><a href="#" style=" color: #000; ">Support</a></li>

                </ul>
            </div>
        </div>
        <hr>
        <div class="col-12">
            <div class="copyright text-center">
                <p>Copyright 2017, All right reserved <span>Developed by <a href="#">Tech Soft.</a></span></p>
            </div>
        </div>
    </div>
</div>
</div>
<script src="{{asset('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
@yield('script')

</body>
</html>