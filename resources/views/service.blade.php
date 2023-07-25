@extends('layouts.site')
@section('title')
    {{ $service->title }}
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
@endsection

@section('scripts')
    <script>
        var acc = document.getElementsByClassName("accordion1");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active1");
                var panel = this.nextElementSibling;
                var arrow = this.querySelector("i");
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                    panel.style.borderBottom = null;
                    arrow.className = "fas fa-caret-{{ $arrow }} pr-3";
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                    panel.style.borderBottom = "1px solid #d4d4d4";
                    arrow.className = "fas fa-caret-up pr-3";
                }
            });
        }
    </script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
@endsection

@section('content')
    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background"
        style="background: url({{ asset('home/images/background/bg-subheader-sn.jpg') }})top fixed">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="margin-top: 50px">{{ $service->title }}</h1>
                    <ul class="crumb" style="margin-top: 60px">
                        <li><a href="{{ route('home') }}">@lang('site.home')</a></li>
                        <li class="sep">/</li>
                        <li>@lang('site.services')</li>
                        <li class="sep">/</li>
                        <li>{{ $service->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <div id="content" class="nopadding">
        <section id="section-content">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="service-main-title">{{ $service->main_title }}</h1>

                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">

                        <div>{{ Str::limit($service->brief,100 ) }}</div>
                        <div class="row">
                        @foreach ($service->questions->chunk($halfOfQuestions) as $questions)
                            <div class="col-12 col-md-12">
                                @foreach ($questions as $question)
                                    <div class="accordion1">
                                        <i class="fa fa-caret-{{ $arrow }} pr-3"></i>
                                        {{ $question->question }}
                                    </div>
                                    <div class="panel1">
                                        {{ $question->answer }}
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                        @foreach ($service->sections as $section)
                            <div class="row mt-5">
                                <div class="col-12">
                                    <h3 class="service-section-title">{{ $section->title }}</h3>
                                    <div>
                                        {!! $section->content !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($section->images as $sectionImage)
                                    <div class="col-12 col-md">
                                        <div class="pt-3 text-center">
                                            <img class="service-section-image img-fluid"
                                                src="{{ asset($sectionImage->image) }}" alt=""
                                                style="width: fit-content;">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-6 pic-services wow fadeInUp" data-wow-delay=".6s" style="margin-top:50px">
                        <img src="{{ asset($service->index_image) }}" class="img-responsive" alt="">
                        <img src="{{ asset($service->image) }}" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- section begin -->
        <section id="view-all-projects" class="call-to-action bg-color dark text-center" data-speed="5"
            data-type="background" aria-label="view-all-projects">
            <a href="{{ route('service.order', $service->slug) }}" class="btn-line btn-big"
                style="color: #fff">@lang('site.order_now')</a>
        </section>
  