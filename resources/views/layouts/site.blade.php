<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset($info->logo) }}" type="image/png" sizes="16x16">
    <title> @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $info->description }}">
    <meta name="keywords" content="Buisness Secrets">
    <meta name="author" content="">

    <link href="{{ asset($info->logo) }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset($info->logo) }}" rel="apple-touch-icon">
    <link href="{{ asset($info->logo) }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset($info->logo) }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset($info->logo) }}" rel="apple-touch-icon" sizes="144x144">

    <link href="{{ asset('fonts/fontawesome-free-6.4.0-web/css/all.css') }}" rel="stylesheet">
    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('home/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap" />
    <link href="{{ asset('home/css/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-grid" />
    <link href="{{ asset('home/css/bootstrap-reboot.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-reboot" />
    @if (app()->getLocale() == 'ar')
        <link rel="preload" href="{{ asset('css/bootstrapRTL.min.css') }}" as="style"
            onload="this.onload=null;this.rel='stylesheet'">
        <noscript>
            <link rel="stylesheet" href="{{ asset('css/bootstrapRTL.min.css') }}">
        </noscript>
    @endif
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
        <link
            href="{{ asset('fonts/Cairo/Cairo-VariableFont_slnt,wght.ttf') }},wght@0,400;0,700;1,400;1,700&display=swap"
            rel="stylesheet">
        <style>
            #gallery .item {
                padding: 0;
            }

            .post-text {
                padding-left: 0 !important;
                padding-right: 100px !important;
            }

            .blog-list .btn-more {
                float: left
            }

            .btn-line::after,
            a.btn-line::after {

                margin-left: 10px;
                margin-right: 10px;
                -webkit-transform: scaleX(-1);
                transform: scaleX(-1);
            }

            .owl-carousel {
                direction: ltr !important;
            }

            .de_light a.btn-big {
                padding-right: 30px !important;
                padding-left: 50px !important;
            }

            a {
                font-family: 'Cairo' !important;
            }

            body {

                font-family: 'Cairo' !important;
            }

            h4,
            h5,
            h6,
            .h4,
            .h5,
            .h6 .h1,
            .h2,
            .h3,
            h1,
            h2,
            h3 {
                font-family: 'Cairo' !important;
            }

            p {
                font-family: 'Cairo' !important;
                font-size: 15px !important;


            }

            span {
                font-family: 'Cairo' !important;
                font-size: 15px !important;

            }
        </style>
        <style>
            .de-navbar-left header #mainmenu>li {
                letter-spacing: 2px;
            }

            * {
                letter-spacing: 0px;
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

                letter-spacing: 0px !important;
            }
        </style>
    @else
        {{-- <link href="{{ asset('fonts/morn/Morn-Thin.otf') }},wght@0,400;0,700;1,400;1,700&display=swap"
            rel="stylesheet"> --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700&display=swap" rel="stylesheet">
        <style>
            a {
                font-family: 'Noto Sans', sans-serif !important;


            }


            body {}

            h4,
            h5,
            h6,
            .h4,
            .h5,
            .h6 .h1,
            .h2,
            .h3,
            h1,
            h2,
            h3 {
                font-family: 'Noto Sans', sans-serif !important;


            }

            p {
                font-family: 'Noto Sans', sans-serif !important;
                font-size: 15px !important;

            }

            span {
                font-family: 'Noto Sans', sans-serif !important;
                font-size: 15px !important;

            }
        </style>
    @endif
    <style>
        * {
            text-align: justify;
        }

        p,
        {
        color: #606060 !important;
        text-align: justify;
        }

        address span strong {
            width: 100px;
        }


        .blog-list .date-box .day,
        .blog-read .date-box .day {
            padding-top: 20px;
        }

        .de_light.de-navbar-left header #mainmenu>li {
            padding: 7px
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
            color: #fff;
        }

        a.btn-ho:hover {
            color: #fff
        }

        a.btn-h:hover {
            border-color: #fff
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

    <div id="wrapper" class="
    @if (app()->getLocale() == 'ar') rtl @endif
    ">
        <div class="container-fluid">
            <div class="row g-0">
                <div id="de-sidebar" class="col-lg-3 col-md-12">

                    <!-- header begin -->
                    <header class="side-header">

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->


                        <!-- logo begin -->
                        <div id="logo" style="padding-top: 0px !important">
                            <a href="{{ route('home') }}" style="text-align: center">
                                <img class="logo" src="{{ asset($info->logo) }}" alt=""
                                    style="  width: 80%; ">
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
                                {{-- <li><a href="{{ route('login') }}">@lang('site.login')</a></li> --}}
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
                            <div class="social-icons-2" style="margin-top: 0 !important">
                                @foreach ($socialMedias as $socialMedia)
                                    <a href="{{ $socialMedia->link }}" target="_blank"><i
                                            class="fa-brands {{ $socialMedia->icon }}"></i></a>
                                @endforeach
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
                                <div class="col-md-7">
                                    <div class="col-md-4">
                                        <img src="{{ asset('logo.png') }}" class="logo-small" alt=""
                                            style="width: 80% !important;"><br>

                                    </div>
                                    <h6>A specialized Saudi company offering a wide range of consultation and management
                                        services in addition to creative digital solutions through a distinctive and
                                        professional work team giving you the opportunity to benefit from our
                                        consultancy team in the fields of digital transformation, data management,
                                        enterprise architecture, customer experience, digital transformation techniques,
                                        and ICT solutions to help you discover future opportunities and give a real
                                        added value to the clients. </h6>


                                </div>

                                <div class="col-md-5">

                                    <h3>@lang('site.contact_us')</h3>
                                    <div style="margin-top: 27px;">
                                        <div class="widget widget-address">
                                            <address>
                                                <span><strong>@lang('contact.give_call'):</strong> <a
                                                        href="tel:{{ $contactInfo->mobile }}">{{ $contactInfo->mobile }}</a></span>
                                                <span><strong>@lang('contact.whatsapp'):</strong><a
                                                        href="https://api.whatsapp.com/send?phone={{ $contactInfo->whatsapp }}"
                                                        target="_blank">{{ $contactInfo->whatsapp }}</a></span>
                                                <span><strong>@lang('contact.email_me'):</strong>
                                                    <a
                                                        href="mailto:{{ $contactInfo->email }}">{{ $contactInfo->email }}</a>
                                                </span>
                                            </address>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="subfooter">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        &copy; Copyright 2023 by <a href="https://joudtech.sa/">JoudTech</a>
                                    </div>
                                    {{-- <div class="col-md-6 text-right">
                                        <div class="social-icons">
                                            @foreach ($socialMedias as $socialMedia)
                                                <a href="{{ $socialMedia->link }}" target="_blank"><i
                                                        class="fa-brands {{ $socialMedia->icon }}"></i></a>
                                            @endforeach
                                        </div>
                                    </div> --}}
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
