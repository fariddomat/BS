@extends('layouts.site')
@section('title', trans('site.home'))
@section('scripts')
    <script>
        $('#contactFrom').submit(function() {
            $('#btn-submit').prop("disabled", true);
            $('#btn-spinner').show();
            return true;
        });
    </script>
@endsection
@section('content')


    <!-- content begin -->
    <div id="content" class="no-bottom no-top">

        <!-- revolution slider begin -->
        <section id="section-slider" class="fullwidthbanner-container no-padding" aria-label="section-slider">
            <div id="revolution-slider">
                <ul>

                    @if (app()->getLocale() == 'ar')
                        @php
                            $lang = 'ar';
                        @endphp
                    @else
                        @php
                            $lang = 'en';
                        @endphp
                    @endif
                    @foreach ($homeSlider->where('lang', $lang) as $image)
                        <li data-transition="parallaxtoright" data-slotamount="10" data-masterspeed="800" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="{{ asset($image->image) }}" alt="" class="img-responsive" />

                        </li>
                    @endforeach


                </ul>
            </div>
        </section>
        <!-- revolution slider close -->

        <section id="section-about-us-3" class="side-bg no-padding">
            <div class="image-container col-lg-6 col-md-12 pull-left" data-delay="0"
                style="background: url(
                    @if (app()->getLocale() == 'ar') {{ asset($info->about_me_image) }}
                    @else{{ asset($info->about_me_image_en) }} @endif
                    ) 70% 0% / cover; ">
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="inner-padding">
                        <div class="col-lg-5 offset-lg-6 col-md-12 wow fadeInRight" data-wow-delay=".2s"
                            style="padding-left: 35px; padding-right: 35px">
                            <h2>@lang('site.about')</h2>
                            {!! $about->about_me !!}
                            <div class="row">
                                @foreach ($aboutFields as $aboutField)
                                    <div class="col-md-6">
                                        <p><b>{{ $aboutField->title }}:</b> {{ $aboutField->value }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section begin -->
        <section id="section-about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                        <h1>@lang('site.services')</h1>

                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>

                    @foreach ($services as $index => $service)
                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <img src="{{ asset($service->image) }}" class="img-responsive" alt="">
                            <div class="spacer-single"></div>
                            <h3><span class="id-color">{{ $service->title }}</span></h3>
                            {{ Str::limit($service->brief, 100) }}

                            <div class="spacer-single"></div>
                            <a href="{{ route('service', $service->slug) }}"
                                class="btn-line btn-fullwidth btn-ho">@lang('site.read_more')</a>

                            {{-- <div class="d-flex flex-row justify-content-between pt-4">
                            <div>
                                <a href="{{route('service', $service->slug )}}"
                                    class="more"><span>@lang('site.read_more')</span></a>
                            </div>
                            <div>
                                <a href="{{route('service.order', $service->slug )}}"
                                    class="more"><span>@lang('site.order_now')</span></a>
                            </div>
                        </div> --}}
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="view-all-services" class="call-to-action bg-color text-center" data-speed="5" data-type="background">
            <a href="{{ route('services') }}" class="btn-line btn-big btn-h" style="color: #fff">@lang('site.view_all_services')</a>
        </section>
        <!-- logo carousel section close -->


        <!-- section begin -->
        <section id="section-steps-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                        <h1>Our Process</h1>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="col-md-12">
                        <div class="de_tab tab_steps dark">
                            <ul class="de_nav">
                                <li class="active wow fadeIn" data-wow-delay="0s"><span>@lang('about.vision')</span>
                                    <div class="v-border"></div>
                                </li>
                                <li class="wow fadeIn" data-wow-delay=".4s"><span>@lang('about.massage')</span>
                                    <div class="v-border"></div>
                                </li>
                                <li class="wow fadeIn" data-wow-delay=".8s"><span>@lang('about.values')</span>
                                    <div class="v-border"></div>
                                </li>
                            </ul>

                            <div class="de_tab_content">

                                <div id="tab1">
                                    {!! $about->vision !!}
                                </div>

                                <div id="tab2">
                                    {!! $about->massage !!}
                                </div>

                                <div id="tab3">
                                    {!! $about->values !!}
                                </div>



                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


        <!-- section begin -->
        <section id="section-portfolio" class="no-padding">
            <div class="container-fluid">

                <div class="spacer-single"></div>

                <!-- portfolio filter begin -->
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                        <h1>@lang('site.blog')</h1>

                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="col-md-12 text-center">
                        <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                            <li><a href="#" data-filter="*" class="selected">@lang('site.blog')</a>
                            </li>
                            @foreach ($blogCategories as $category)
                                <li><a href="#" data-filter=".{{ $category->id }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                <!-- portfolio filter close -->

            </div>

            <div id="gallery" class="row g-0 wow fadeInUp" data-wow-delay=".3s">

                @foreach ($blogs as $blog)
                    <!-- gallery item -->
                    <div class="col-md-4 col-sm-6 col-12 item {{ $blog->category->id }}">

                        <div class="de-post-poster" style="background-size: cover;">
                            <a class="d-overlay" href="{{ route('blog', $blog->slug) }}">
                                <div class="d-content" style="background-size: cover;">

                                    <h3>{{ $blog->title }}</h3>
                                    <span
                                        class="d-date">{{ $blog->updated_at->format('d F
                                                                                                                                Y') }}</span>
                                </div>
                            </a>
                            <div class="d-image" data-bgimage="url({{ asset($blog->image) }})"
                                style="background: url({{ asset($blog->image) }}&quot;) 0% 0% / cover;"></div>
                        </div>


                    </div>
                    <!-- close gallery item -->
                @endforeach


            </div>

            <div id="loader-area">
                <div class="project-load"></div>
            </div>
        </section>
        <!-- section close -->


        <!-- section begin -->
        <section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5"
            data-type="background" aria-label="view-all-projects">
            <a href="{{ route('blogs') }}" class="btn-line  btn-big  btn-h" style="color:#fff">@lang('site.view_all_blog')</a>
        </section>
        <!-- logo carousel section close -->


        <!-- section begin -->
        <section id="section-testimonial-architecture" class="jarallax" >
            <img src="{{ asset('home/images-architecture/bg/1.jpg') }}" class="jarallax-img" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                        <h2 class="title" style="color: #848080;">@lang('site.team_experience')</h2>

                    </div>
                    <div class="col-md-12 ">

                        <div id="testimonial-carousel-single" class="owl-carousel owl-theme wow fadeInUp"
                            style="padding: 0">
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
    </div>

@endsection
