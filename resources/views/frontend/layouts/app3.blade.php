<!DOCTYPE html>
@langrtl
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', '')">
        <meta name="keywords" content="@yield('meta_keywords', '')">
         <link rel="icon" type="image/x-icon" href="/storage/logos/1661435187-fav-copie.png">


    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->

        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/video.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/progess.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        {{--<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">--}}
        <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">

        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/colors/switch.css')}}">
        <link href="{{asset('assets/css/colors/color-2.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-2">
        <link href="{{asset('assets/css/colors/color-3.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-3">
        <link href="{{asset('assets/css/colors/color-4.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-4">
        <link href="{{asset('assets/css/colors/color-5.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-5">
        <link href="{{asset('assets/css/colors/color-6.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-6">
        <link href="{{asset('assets/css/colors/color-7.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-7">
        <link href="{{asset('assets/css/colors/color-8.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-8">
        <link href="{{asset('assets/css/colors/color-9.css')}}" rel="alternate stylesheet" type="text/css"
              title="color-9">

        <link href="{{asset('/vendor/unisharp/laravel-ckeditor/plugins/codesnippet/lib/highlight/styles/monokai.css') }}" rel="stylesheet">
        <script src="{{asset('/vendor/unisharp/laravel-ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js') }}"></script>
        <script>hljs.initHighlightingOnLoad();</script>

        <style>
            .breadcrumb-section .page-breadcrumb-content {
                bottom: 0;
                top: inherit;
            }

            #countdown {
            width: 100%;
            padding-top:10px;
            }
            label {
            clear: both;
            display: block;
            color : black!important;
            }
            #countdown span {
            background: rgba(0,0,0,0);
            color: #DA0000;
            font-size: 16px;
            font-weight: normal;
            text-align: center;
            width: 25%;
            dispaly: block;
            float: left;
            }

        
            .minutes{
                padding-right: 50px;
            }




            .wrapper {
            width: 100%;
            max-width: 31.25rem;
            }

            .label {
            font-size: .625rem;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: +1.3px;
            margin-bottom: 1rem;
            }

            .searchBar {
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            }

            #searchQueryInput {
            width: 100%;
            height: 2.8rem;
            background: #fff;
            outline: none;
            border: 1px solid #007735;
            border-radius: 1.625rem;
            padding: 0 3.5rem 0 1.5rem;
            font-size: 1rem;
            }

            #searchQuerySubmit {
            width: 3.5rem;
            height: 2.8rem;
            margin-left: -3.5rem;
            background: none;
            border: none;
            outline: none;
            }

            #searchQuerySubmit:hover {
            cursor: pointer;
            }


        </style>
        @stack('after-styles')
        @yield('css')
        @if(config('onesignal_status') == 1)
            {!! config('onesignal_data') !!}
        @endif

    @if(config('google_analytics_id') != "")

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{config('google_analytics_id')}}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{config('google_analytics_id')}}');
        </script>
    @endif


        @if(!empty(config('custom_css')))
            <style>
                {!! config('custom_css')  !!}
            </style>
        @endif

    </head>
    <body class="{{config('layout_type')}}">
    <div id="app">
    @include('frontend.layouts.modals.loginModal')


    {{--<div id="preloader"></div>--}}

    <!-- Start of Header section
    ============================================= -->
        <header>
            <div id="main-menu" class="main-menu-container header-style-2" style="background-color: #E6FFFF!important;">
                <div class="header-top" style="background-color:#EF7E02;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="header-top-text">
                                   {{--  <span>1 Welcome to {{env('APP_NAME')}}</span> --}}
                                   <img src="https://pngfreepic.com/wp-content/uploads/2021/10/offer-135b.png?v=1633690757" width="50" />
                                    <span style="color:black;padding-left:25px;">Profitez de -40% sur toutes nos formations</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="header-top-bar ul-li float-right">
                                   {{--  <p id="demo" style="color: #DA0000;"></p> --}}
                                    <div id="countdown"></div>
{{--                                     <ul class="d-inline-block w-100 bg-white">
                                        @if(count($locales) > 1)

                                        <li class="menu-item-has-children ul-li-block">
                                                <a href="#">
                                                    <span class="d-md-down-none">@lang('menus.language-picker.language')
                                                        ({{ strtoupper(app()->getLocale()) }})</span>
                                                </a>
                                                <ul class="sub-menu bg-white" style="z-index: 1">
                                                    @foreach($locales as $lang)
                                                        @if($lang != app()->getLocale())
                                                            <li class="border-0 border-bottom">
                                                                <a href="{{ '/lang/'.$lang }}"
                                                                   class=""> @lang('menus.language-picker.langs.'.$lang)</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="container">
                        <div class="navbar-default">
                            <div class="navbar-header float-left">
                                <a class="navbar-brand text-uppercase" href="{{url('/')}}"><img
                                            src="{{asset("storage/logos/".config('logo_b_image'))}}" alt="logo"></a>
                            </div><!-- /.navbar-header -->
                            <div class="cart-search float-right ul-li">
                                <ul>
                                    <li>
                                        <button type="button" class="toggle-overlay search-btn" style="background-color: #007735!important;margin-top: 8px;">

                                            <a href="{{route('cart.index')}}"><i class="fas fa-shopping-bag"></i>
                                                @if(auth()->check() && Cart::session(auth()->user()->id)->getTotalQuantity() != 0)
                                                    <span class="badge badge-danger position-absolute">{{Cart::session(auth()->user()->id)->getTotalQuantity()}}</span>
                                                @endif
                                            </a>
                                        </button>

                                    </li>
                                </ul>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <nav class="navbar-menu float-right">
                                <div class="nav-menu ul-li">
                                    <ul>
                                        @if(count($custom_menus) > 0 )
                                            @foreach($custom_menus as $menu)
                                                @if($menu['id'] == $menu['parent'])
                                                    @if(count($menu->subs) == 0)
                                                        <li class="nav-item">
                                                            <a href="{{asset($menu->link)}}"
                                                               class="nav-link {{ active_class(Active::checkRoute('frontend.user.dashboard')) }}"
                                                               id="menu-{{$menu->id}}">{{trans('custom-menu.'.$menu_name.'.'.str_slug($menu->label))}}</a>
                                                        </li>
                                                    @else
                                                        <li class="menu-item-has-children ul-li-block">
                                                            <a href="#!">{{trans('custom-menu.'.$menu_name.'.'.str_slug($menu->label))}}</a>
                                                            <ul class="sub-menu">
                                                                @foreach($menu->subs as $item)
                                                                    @include('frontend.layouts.partials.dropdown', $item)
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif

                                        <li class="nav-item">
                                            <div class="wrapper">
                                            <div class="searchBar">
                                             <form action="{{route('search')}}" method="get">
                                             <div class="input-group mb-3">
                                                <input style="border-radius: 25px 0px 0px 25px;" name="q" type="text" class="form-control" placeholder="cours" aria-label="Username" aria-describedby="basic-addon1">
                                                <div class="input-group-prepend">
                                                    <button type="submit"  style="background-color: #0d7638;border-color:0d7638; color: white;border-radius: 0px 25px 25px 0px;border-color: #0d7638;" class="input-group-text" id="basic-addon1">@lang('labels.frontend.layouts.partials.search_courses')</button>
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                            </div>
                                        </li>

                                        @if(auth()->check())
                                            @if($logged_in_user->hasRole('student'))
                                                <li>
                                                    <a href="{{ route('admin.dashboard') }}">@lang('navs.frontend.dashboard')</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('frontend.auth.logout') }}"><i class="fas fa-sign-out-alt"></i></a>
                                                </li>
                                            @else
                                            <li class="menu-item-has-children ul-li-block">
                                                <a href="#!">{{ $logged_in_user->name }}</a>
                                                <ul class="sub-menu">{{--  --}}
                                                    @can('view backend')
                                                        <li>
                                                            <a href="{{ route('admin.dashboard') }}">@lang('navs.frontend.dashboard')</a>
                                                        </li>
                                                    @endcan


                                                    <li>
                                                        <a href="{{ route('frontend.auth.logout') }}">@lang('navs.general.logout')</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            @endif
                                        @else
                                            <li class="log-in mt-0">
                                                @if(!auth()->check())
                                                    <a style="border-radius:30px; border : 1px solid #007735;background: #007735!important;color: white;" id="openLoginModal" data-target="#myModal" href="#"><img src="https://kgcnz.co.nz/pub/media/rokanthemes/testimonial/images/l/o/logo.png" width="20" style="margin-right:10px;">@lang('navs.general.login')</a>
                                                    <!-- The Modal -->
                                                    {{--@include('frontend.layouts.modals.loginModal')--}}

                                                @endif
                                            </li>
                                        @endif

                                    </ul>
                                </div>
                            </nav>

                            <div class="mobile-menu">
                                <div class="logo"><a href="{{url('/')}}"><img
                                                src="{{asset('assets/img/logo/logo.png')}}" alt="Logo"></a></div>
                                <nav>
                                    <ul>
                                        @if(count($custom_menus) > 0 )
                                            @foreach($custom_menus as $menu)
                                                @if($menu['id'] == $menu['parent'])
                                                    @if(count($menu->subs) == 0)

                                                        <li class="">
                                                            <a href="{{asset($menu->link)}}"
                                                               class="nav-link {{ active_class(Active::checkRoute('frontend.user.dashboard')) }}"
                                                               id="menu-{{$menu->id}}">{{trans('custom-menu.'.$menu_name.'.'.str_slug($menu->label))}}</a>
                                                        </li>
                                                     @else
                                                        <li class="">
                                                            <a href="#!">{{trans('custom-menu.'.$menu_name.'.'.str_slug($menu->label))}}</a>
                                                            <ul class="">
                                                                @foreach($menu->subs as $item)
                                                                    @include('frontend.layouts.partials.dropdown', $item)
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif

                                        @if(auth()->check())
                                            <li class="">
                                                <a class="text-dark" href="#!">{{ $logged_in_user->name}}</a>
                                                <ul>
                                                    @can('view backend')
                                                        <li>
                                                            <a href="{{ route('admin.dashboard') }}">@lang('navs.frontend.dashboard')</a>
                                                        </li>
                                                    @endcan


                                                    <li>
                                                        <a href="{{ route('frontend.auth.logout') }}">@lang('navs.general.logout')</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        @else
                                            <li class="">
                                                <a id="openLoginModal" data-target="#myModal" href="#">@lang('navs.general.login')</a>
                                                <!-- The Modal -->
                                            </li>
                                        @endif

{{--                                             @if(count($locales) > 1)
                                                <li class="menu-item-has-children ul-li-block">
                                                    <a href="#">
                                                    <span class="d-md-down-none">@lang('menus.language-picker.language')
                                                        ({{ strtoupper(app()->getLocale()) }})</span>
                                                    </a>
                                                    <ul class="">
                                                        @foreach($locales as $lang)
                                                            @if($lang != app()->getLocale())
                                                                <li>
                                                                    <a href="{{ '/lang/'.$lang }}"
                                                                       class=""> @lang('menus.language-picker.langs.'.$lang)</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endif --}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Start of Header section
            ============================================= -->

        @yield('content')
        @include('cookieConsent::index')
        @include('frontend.layouts.partials.footer')

    </div><!-- #app -->

    <!-- Scripts -->
    @stack('before-scripts')
    <!-- For Js Library -->
    <script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jarallax.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/lightbox.js')}}"></script>
    <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/gmap3.min.js')}}"></script>
    <script src="{{asset('assets/js/switch.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script>
        @if(request()->has('user')  && (request('user') == 'admin'))

        $('#myModal').modal('show');
        $('#loginForm').find('#email').val('admin@lms.com')
        $('#loginForm').find('#password').val('secret')
        $('#loginForm').find('button').trigger('click');
        @elseif(request()->has('user')  && (request('user') == 'student'))

        $('#myModal').modal('show');
        $('#loginForm').find('#email').val('student@lms.com')
        $('#loginForm').find('#password').val('secret')
        $('#loginForm').find('button').trigger('click');

        @elseif(request()->has('user')  && (request('user') == 'teacher'))

        $('#myModal').modal('show');
        $('#loginForm').find('#email').val('teacher@lms.com')
        $('#loginForm').find('#password').val('secret')
        $('#loginForm').find('button').trigger('click');
        @endif
    </script>
    <script>
        @if((session()->has('show_login')) && (session('show_login') == true))
        $('#myModal').modal('show');
                @endif
        var font_color = "{{config('font_color')}}"
        setActiveStyleSheet(font_color);
    </script>

    <script>
        // set the date we're counting down to
        var target_date = new Date('December, 1, 2022').getTime();
        
        // variables for time units
        var days, hours, minutes, seconds;
        
        // get tag element
        var countdown = document.getElementById('countdown');
        
        // update the tag with id "countdown" every 1 second
        setInterval(function () {
        
            // find the amount of "seconds" between now and target
            var current_date = new Date().getTime();
            var seconds_left = (target_date - current_date) / 1000;
        
            // do some time calculations
            days = parseInt(seconds_left / 86400);
            seconds_left = seconds_left % 86400;
            
            hours = parseInt(seconds_left / 3600);
            seconds_left = seconds_left % 3600;
            
            minutes = parseInt(seconds_left / 60);
            seconds = parseInt(seconds_left % 60);
            
            // format countdown string + set tag value
            countdown.innerHTML = '<span class="days">' + days +  '<label>Jours</label></span> <span class="hours">' + hours + ' <label>Heures</label></span> <span class="minutes">'
            + minutes + ' <label>Minutes</label></span> <span class="seconds">' + seconds + ' <label>Secondes</label></span>';  
        
        }, 1000);
</script>
    @yield('js')
    @stack('after-scripts')

    @include('includes.partials.ga')

    @if(!empty(config('custom_js')))
        <script>
            {!! config('custom_js') !!}
        </script>
    @endif

    </body>
    </html>
