<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset($info->logo) }}" type="image/png" sizes="16x16">
    <title> @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Archi is best selling interior design website template with responsive stunning design">
    <meta name="keywords"
        content="architecture,building,business,bootstrap,creative,exterior design,furniture design,gallery,garden design,house,interior design,landscape design,multipurpose,onepage,portfolio,studio">
    <meta name="author" content="">

    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('home/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap" />
    <link href="{{ asset('home/css/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-grid" />
    <link href="{{ asset('home/css/bootstrap-reboot.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-reboot" />
    <link href="{{ asset('home/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('home/css/color.css') }}" rel="stylesheet" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="{{ asset('home/css/bg.css') }}" type="text/css">

    {{-- <link href="{{ asset('css/fonts.css') }}" rel="stylesheet"> --}}
    <!-- color scheme -->

    <style>
        :root {
            --primary-color-1: {{ $color->menu }};
            --menu: {{ $color->menu }};
            --footer: {{ $color->footer }};
            --logo_border: {{ $color->logo_border }};
            --home_buttons: {{ $color->home_buttons }};
            --contact_button: {{ $color->contact_button }};
            --menu_social_media: {{ $color->menu_social_media }};
        }
    </style>

    <!-- revolution slider -->
    <link rel="stylesheet" href="{{ asset('home/rs-plugin/css/settings.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('home/css/rev-settings.css') }}" type="text/css">



    <link rel="stylesheet" href="{{ asset('noty/noty.css') }}">
    <script src="{{ asset('noty/noty.min.js') }}" defer></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
    <![endif]-->

    @if (app()->getLocale() == 'ar')
        <style>
            .de-navbar-left header #mainmenu > li{
                letter-spacing: 2px;
            }
            *{
                letter-spacing: 1px;
            }
            #filters a,
            a,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            span,
            p {

                letter-spacing: 1px;
            }
        </style>
    @endif
    <style>
        .de_light.de-navbar-left header #mainmenu > li{
            padding: 5px
        }
        .de-post-poster .d-overlay {
  background: rgba(0, 0, 0, 0.2);

        }
        .de-post-poster .d-content h3,
        .de-post-poster .d-date {
            color: #fff
        }
        #filters a.selected {
  color: #fff;
}
.de_tab.tab_steps .de_nav li span {
    color:#fff;
}

    </style>
    <style>
        /* toggle */
        .switchToggle {
            text-align: center !important;
            text-align: -webkit-center !important;
            text-align: -moz-center !important;
        }

        .switchToggle input[type=checkbox] {
            height: 0;
            width: 0;
            visibility: hidden;
            position: absolute;
        }

        .switchToggle label {
            cursor: pointer;
            text-indent: -9999px;
            width: 70px;
            max-width: 70px;
            height: 30px;
            background: #d1d1d1;
            display: block;
            border-radius: 100px;
            position: relative;
        }

        .switchToggle label:after {
            content: '';
            position: absolute;
            top: 2px;
            left: 2px;
            width: 26px;
            height: 26px;
            background: #fff;
            border-radius: 90px;
            transition: 0.3s;
        }

        .switchToggle input:checked+label,
        .switchToggle input:checked+input+label {
            background: #3e98d3;
        }

        .switchToggle label,
        .switchToggle input+label {
            background: #3e98d3;
        }

        .switchToggle input+label:before,
        .switchToggle input+input+label:before {
            content: 'EN';
            position: absolute;
            top: 5px;
            left: 35px;
            width: 26px;
            height: 26px;
            border-radius: 90px;
            transition: 0.3s;
            text-indent: 0;
            color: #fff;
        }

        .switchToggle input:checked+label:before,
        .switchToggle input:checked+input+label:before {
            content: 'AR';
            position: absolute;
            top: 5px;
            left: 10px;
            width: 26px;
            height: 26px;
            border-radius: 90px;
            transition: 0.3s;
            text-indent: 0;
            color: #fff;
        }

        .switchToggle input:checked+label:after,
        .switchToggle input:checked+input+label:after {
            left: calc(100% - 2px);
            transform: translateX(-100%);
        }

        .switchToggle label:active:after {
            width: 60px;
        }

        .toggle-switchArea {
            margin: 10px 0 10px 0;
        }
    </style>
    @yield('styles')
</head>

<body class="de_light de-navbar-left">

    <div id="wrapper">
        <div class="container-fluid">
            <div class="row g-0">
                <div id="de-sidebar" class="col-lg-3 col-md-12">

                    <!-- header begin -->
                    <header class="side-header">

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->


                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ route('home') }}">
                                <img class="logo" src="{{ asset($info->logo) }}" alt=""
                                    style="  height: 40px;">
                                <img class="logo-2" src="{{ asset($info->logo) }}" alt="">
                            </a>
                        </div>
                        <!-- logo close -->



                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href="{{ route('home') }}">@lang('site.home')</a></li>
                                <li><a href="{{ route('services') }}">@lang('site.services')</a></li>
                                {{-- <li><a href="{{ route('home') }}#portfolio">@lang('site.team_experience')</a></li> --}}

                                <li><a href="{{ route('about') }}">@lang('site.about')</a></li>
                                <li><a href="{{ route('blogs') }}">@lang('site.blog')</a></li>
                                <li><a href="{{ route('contact') }}">@lang('site.contact')</a></li>
                                <li><a href="{{ route('login') }}">@lang('site.login')</a></li>
                                <li style="z-index: 9999;">
                                    <div class="switchToggle">
                                        <input type="checkbox" id="switch" class="switchToggle-a"
                                            @if (app()->getLocale() == 'ar') checked @endif>
                                        <label for="switch">Toggle</label>
                                    </div>
                                </li>
                            </ul>
                        </nav>


                        <div class="h-content">
                            <div class="social-icons-2">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                                <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            </div>
                        </div>


                    </header>
                    <!-- header close -->


                </div>

                <div id="main" class="col-lg-9 col-md-12 offset-lg-3 offset-md-0">
                    @yield('content')



                    <!-- footer begin -->
                    <footer class="light">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('logo.png') }}" class="logo-small"
                                        alt="" style="height: 40px;"><br>
                                        <h2>{{$info->title}}</h2>
                                        <h6>{{$info->description}}</h6>

                                </div>

                                <div class="col-md-6">
                                    {{-- <h3>@lang('site.contact_us')</h3>
                                    <div>

                                        <p><b>@lang('contact.give_call'):</b> <a
                                                href="tel:{{$contactInfo->mobile}}">{{$contactInfo->mobile}}</a></p>
                                        <p><b>@lang('contact.whatsapp'):</b> <a
                                                href="https://api.whatsapp.com/send?phone={{$contactInfo->whatsapp}}"
                                                target="_blank">{{$contactInfo->whatsapp}}</a></p>
                                        <p><b>@lang('contact.email_me'):</b> <a
                                                href="mailto:{{$contactInfo->email}}">{{$contactInfo->email}}</a></p>

                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <div class="subfooter">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        &copy; Copyright 2023 by <a href="https://joudtech.sa/">JoudTech</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <div class="social-icons">
                                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                            <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" id="back-to-top"></a>
                    </footer>
                    <!-- footer close -->

                </div>
            </div>
        </div>
    </div>


    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('home/js/plugins.js') }}"></script>
    <script src="{{ asset('home/js/designesia.js') }}"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="{{ asset('home/rs-plugin/js/jquery.themepunch.plugins.min.j') }}s"></script>
    <script type="text/javascript" src="{{ asset('home/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>


    @include('partials._session')
    <script>
        $(document).ready(function() {
            $('#switch').change(function() {
                var active_deactive_status = $(this).prop('checked') == true ? 1 : 0;

                @if (app()->getLocale() == 'ar')
                    window.location.href =
                        "{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}";
                @else
                    window.location.href =
                        "{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}";
                @endif
                console.log(active_deactive_status);
            })
        });
    </script>
    @yield('scripts')

</body>

</html>
