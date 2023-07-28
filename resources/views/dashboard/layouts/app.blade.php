<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('noty/noty.css')}}">
    <script src="{{asset('noty/noty.min.js')}}"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('dashboard/css/dashboard.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    @yield('styles')
    <link href="{{ asset('fonts/fontawesome-free-6.4.0-web/css/all.css') }}" rel="stylesheet">

</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{route('dashboard.home')}}">BSecrets</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav pe-5 pe-md-0 me-5 me-md-0">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link @yield('homeActive')" aria-current="page"
                                href="{{route('dashboard.home')}}">
                                Dashboard
                            </a>
                        </li>
                        @if (auth()->user()->hasRole('superadministrator'))
                        <li class="nav-item">
                            <a class="nav-link @yield('passwordEditActive')" href="{{route('dashboard.password.edit')}}">
                                Change Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('servicesActive')" href="{{route('dashboard.services.index')}}">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('orderservicesActive')" href="{{route('dashboard.orderservices.index')}}">
                                Order Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('contactusActive')" href="{{route('dashboard.contact-us.index')}}">
                                Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('aboutActive')" href="{{route('dashboard.about.create')}}">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('aboutimagesActive')" href="{{route('dashboard.aboutimages.index')}}">
                                About Images
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('socialmediaActive')" href="{{route('dashboard.socialmedia.index')}}">
                                Social Media
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('contactinfoActive')" href="{{route('dashboard.contactinfo.create')}}">
                                Contact Info
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('homeinfoActive')" href="{{route('dashboard.homeinfo.create')}}">
                                Home Info
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('aboutfieldsActive')" href="{{route('dashboard.aboutfields.index')}}">
                                About Fields
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link @yield('workcategoriesActive')" href="{{route('dashboard.workcategories.index')}}">
                                Work Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('worksActive')" href="{{route('dashboard.works.index')}}">
                                Works
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link @yield('clientsActive')" href="{{route('dashboard.clients.index')}}">
                                Clients
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link @yield('blogcategoriesActive')" href="{{route('dashboard.blogcategories.index')}}">
                                Blog Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('blogsActive')" href="{{route('dashboard.blogs.index')}}">
                                Blogs
                            </a>
                        </li>
                        @if (auth()->user()->hasRole('superadministrator'))
                        <li class="nav-item">
                            <a class="nav-link @yield('blogPDFActive')" href="{{route('dashboard.blogPDF.create')}}">
                                Blog PDF
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link @yield('customersActive')" href="{{route('dashboard.customers.index')}}">
                                Customers
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link @yield('colorActive')" href="{{route('dashboard.color.create')}}">
                                Color
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @yield('privacyActive')" href="{{route('dashboard.privacy.create')}}">
                                Privacy
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link @yield('smsContactActive')" href="{{route('dashboard.sms.contact.create')}}">
                                SMS Contact Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('smsServiceActive')" href="{{route('dashboard.sms.service.create')}}">
                                SMS Order Service
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('smsLaridActive')" href="{{route('dashboard.sms.larid.create')}}">
                                SMS Larid ERP
                            </a>
                        </li> --}}
                        @endif
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{asset('dashboard/js/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard/js/dashboard.js')}}"></script>
    @include('partials._session')
    @yield('scripts')
</body>

</html>
