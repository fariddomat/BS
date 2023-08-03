@extends('layouts.site')

@section('title', trans('site.about'))
@section('content')


    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background"
        style="background: url({{ asset($info->about_header_image) }})top fixed">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>@lang('site.about')</h1>
                    <ul class="crumb">
                        <li><a href="{{ route('home') }}">@lang('site.home')</a></li>
                        <li class="sep">/</li>
                        <li>@lang('site.about')</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <div id="content" class="nopadding">
        <section id="section-about-us-4" class="side-bg no-padding">
            <div class="image-container col-lg-5 col-md-12 pull-left" data-delay="0"
                style=" background: url({{ asset($aboutImages[0]->image) }});"></div>

            <div class="container-fluid">
                <div class="row">
                    <div class="inner-padding">
                        <div class="col-lg-5 offset-lg-6 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                            <h2>@lang('about.brief')</h2>

                            <p class="intro">
                                {!! $about->brief !!}
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-about-us-4" class="side-bg no-padding">
            <div class="image-container col-lg-5 col-md-12 pull-left" data-delay="0"
                style="@if (app()->getLocale() == 'ar')
                left: 0;
                @else
                right: 0;
                @endif background: url({{ asset($aboutImages[1]->image) }}); "></div>

            <div class="container-fluid">
                <div class="row">
                    <div class="inner-padding">
                        <div class="col-lg-5 offset-lg-1 col-md-12 wow fadeInLeft" data-wow-delay=".2s">
                            <h2>@lang('about.who')</h2>

                            <p class="intro">
                                {!! $about->who_are_we !!}
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-about-us-4" class="side-bg no-padding">
            <div class="image-container col-lg-5 col-md-12 pull-left" data-delay="0"
                style="background: url({{ asset($aboutImages[2]->image) }});"></div>

            <div class="container-fluid">
                <div class="row">
                    <div class="inner-padding">
                        <div class="col-lg-5 offset-lg-6 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                            <h2>@lang('about.history')</h2>

                            <p class="intro">
                                {!! $about->history !!}
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-about-us-4" class="side-bg no-padding">
            <div class="image-container col-lg-5 col-md-12 pull-left" data-delay="0"
                style="@if (app()->getLocale() == 'ar')
                left: 0;
                @else
                right: 0;
                @endif background: url({{ asset($aboutImages[3]->image) }}); "></div>

            <div class="container-fluid">
                <div class="row">
                    <div class="inner-padding">
                        <div class="col-lg-5 offset-lg-1 col-md-12 wow fadeInLeft" data-wow-delay=".2s">
                            <h2>@lang('about.massage')</h2>

                            <p class="intro">
                                {!! $about->massage !!}
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-about-us-4" class="side-bg no-padding">
            <div class="image-container col-lg-5 col-md-12 pull-left" data-delay="0"
                style="background: url({{ asset($aboutImages[4]->image) }});"></div>

            <div class="container-fluid">
                <div class="row">
                    <div class="inner-padding">
                        <div class="col-lg-5 offset-lg-6 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                            <h2>@lang('about.goals')</h2>

                            <p class="intro">
                                {!! $about->goals !!}
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-about-us-4" class="side-bg no-padding">
            <div class="image-container col-lg-5 col-md-12 pull-left" data-delay="0"
                style="@if (app()->getLocale() == 'ar')
                left: 0;
                @else
                right: 0;
                @endif background: url({{ asset($aboutImages[5]->image) }}); "></div>

            <div class="container-fluid">
                <div class="row">
                    <div class="inner-padding">
                        <div class="col-lg-5 offset-lg-1 col-md-12 wow fadeInLeft" data-wow-delay=".2s">
                            <h2>@lang('about.vision')</h2>

                            <p class="intro">
                                {!! $about->vision !!}
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-about-us-4" class="side-bg no-padding">
            <div class="image-container col-lg-5 col-md-12 pull-left" data-delay="0"
                style="background: url({{ asset($aboutImages[6]->image) }});"></div>

            <div class="container-fluid">
                <div class="row">
                    <div class="inner-padding">
                        <div class="col-lg-5 offset-lg-6 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                            <h2>@lang('about.ambition')</h2>

                            <p class="intro">
                                {!! $about->ambition !!}
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-about-us-4" class="side-bg no-padding">
            <div class="image-container col-lg-5 col-md-12 pull-left" data-delay="0"
                style="@if (app()->getLocale() == 'ar')
                left: 0;
                @else
                right: 0;
                @endif background: url({{ asset($aboutImages[7]->image) }}); "></div>

            <div class="container-fluid">
                <div class="row">
                    <div class="inner-padding">
                        <div class="col-lg-5 offset-lg-1 col-md-12 wow fadeInLeft" data-wow-delay=".2s">
                            <h2>@lang('about.values')</h2>

                            <p class="intro">
                                {!! $about->values !!}
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>



        <section id="section-team">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                        <h1>@lang('site.our_team')</h1>

                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="col-md-12 container-4">
                        @foreach ($teams as $team)
                            <!-- team member -->
                            <div class="de-team-list">
                                <div class="team-pic">
                                    <img src="{{ asset($team->image) }}" class="img-responsive" alt="" />
                                </div>
                                <div class="team-desc col-md-12">
                                    <h3>{{ $team->name }}</h3>
                                    <p class="lead">{{ $team->title }}</p>
                                    <div class="small-border"></div>
                                    <p>{{ $team->description }}</p>
                                    {{--
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                            </div> --}}
                                </div>
                            </div>
                            <!-- team close -->
                        @endforeach


                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </section>

        {{-- <section id="section-testimonial" data-bgimage="url(images/background/bg-38.jpg)" data-stellar-background-ratio=".2"
        class="text-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                    <h1>Customer Says</h1>
                    <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                    <div class="spacer-single"></div>
                </div>
            </div>
            <div id="testimonial-carousel" class="owl-carousel owl-theme de_carousel wow fadeInUp" data-wow-delay=".3s">

                <div class="item">
                    <div class="de_testi">
                        <blockquote>
                            <p>I'm always impressed with the services. Lorem ipsum dolor sit amet, consectetur
                                adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            <div class="de_testi_by">
                                John, Customer
                            </div>
                        </blockquote>

                    </div>
                </div>

                <div class="item">
                    <div class="de_testi">
                        <blockquote>
                            <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            <div class="de_testi_by">
                                Michael, Customer
                            </div>
                        </blockquote>
                    </div>
                </div>

                <div class="item">
                    <div class="de_testi">
                        <blockquote>
                            <p>I totally recommend your services. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            <div class="de_testi_by">
                                Patrick, Customer
                            </div>
                        </blockquote>
                    </div>
                </div>

                <div class="item">
                    <div class="de_testi">
                        <blockquote>
                            <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            <div class="de_testi_by">
                                James, Customer
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


          <!-- section begin -->
          <section id="section-testimonial-architecture" class="jarallax">
            <img src="{{ asset('home/bg18.webp') }}" class="jarallax-img" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                        <h2 class="title" style="color: #fff;">@lang('site.team_experience')</h2>

                    </div>
                    <div class="col-md-12 ">

                        <div id="testimonial-carousel-single" class="owl-carousel owl-theme wow fadeInUp" style="padding: 0">
                            @foreach ($experinceSlider as $image)

                            <blockquote class="testimonial-big">
                                <img src="{{ asset($image->image) }}" alt="">
                            </blockquote>
                            @endforeach
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- section close -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                        <h2 class="title" style="color: #848080;">@lang('site.our_partner')</h2>

                    </div>
                    <div class="col-md-12">
                        <div id="logo-carousel" class="owl-carousel owl-theme">
                            @foreach ($partnerSlider as $image)
                                <img src="{{ asset($image->image) }}" class="img-responsive" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- section begin -->
        <section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5"
            data-type="background" aria-label="view-all-projects">
            <a href="{{ route('contact') }}" class="btn-line btn-big btn-h" style="color:white">@lang('contact.get_in_touch')</a>
        </section>
    </div>

@endsection
