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
                    arrow.className = "fa fa-caret-{{ $arrow }} pr-3";
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                    panel.style.borderBottom = "1px solid #d4d4d4";
                    arrow.className = "fa fa-caret-up pr-3";
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
        style="background: url({{ asset($info->service_image) }}) top fixed">
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

                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s" style="margin-top:50px">

                        <div>{{ Str::limit($service->brief, 100) }}</div>
                        <div class="row" style="margin-top:35px">
                            @foreach ($service->indexItems as $item)
                                <div class="col-12 col-md-12">
                                        <div class="accordion1">
                                            <i class="fa fa-caret-{{ $arrow }} pr-3"></i>

                                            <i aria-hidden="true" class="{{ $item->icon_class }}"></i>  {{ $item->name }}
                                        </div>
                                        <div class="panel1">
                                            {{ $item->description }}
                                        </div>
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
                @if ($service->subServices->count() > 0)
                <div class="row">
                    <h2>@lang('site.subServices')</h2>
                    @foreach ($service->subServices as $index=> $subService)
                    <div class="row wow fadeIn" data-wow-delay=".9s" style="margin-bottom: 50px">
                        <div class="col-md-6">
                            <h3 style="height: 65px;"><span class="id-color">{{ $subService->title }}</span> </h3>
                        <p >{!! $subService->brief !!}</p>
                        </div>
                        {{-- <div class="spacer-single"></div> --}}
                        <div class="col-md-6">
                            <img src="{{ asset($subService->index_image) }}" class="img-responsive" alt="">

                        </div>
                        <div class="spacer-single"></div>
                        <a href="{{route('service', $subService->slug )}}" class="btn-line btn-fullwidth btn-ho">@lang('site.read_more')</a>

                        {{-- <div class="d-flex flex-row justify-content-between pt-4">
                            <div>
                                <a href="{{route('subService', $subService->slug )}}"
                                    class="more"><span>@lang('site.read_more')</span></a>
                            </div>
                            <div>
                                <a href="{{route('subService.order', $subService->slug )}}"
                                    class="more"><span>@lang('site.order_now')</span></a>
                            </div>
                        </div> --}}
                    </div>
                    @if ($index%2 != 0)

                    <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                    <div class="spacer-single"></div>
                    @endif
                    @endforeach
                </div>
                @endif
            </div>
        </section>

        <!-- section begin -->
        <section id="view-all-projects" class="call-to-action bg-color  text-center" data-speed="5"
            data-type="background" aria-label="view-all-projects">
            <a href="{{ route('service.order', $service->slug) }}" class="btn-line btn-big btn-h"
                style="color: #fff">@lang('site.order_now')</a>
        </section>
        <!-- logo carousel section close -->



    </div>
@endsection
