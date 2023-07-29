@extends('layouts.site')
@section('title', trans('site.services'))
@section('content')

    <!-- Services Section -->

    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background" style="background: url({{ asset($info->service_image) }})top fixed">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>@lang('site.services')</h1>
                    <ul class="crumb">
                        <li><a href="{{ route('home') }}">@lang('site.home')</a></li>
                        <li class="sep">/</li>
                        <li>@lang('site.services')</li>
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

                    @foreach ($services as $index=> $service)
                    <div class="col-md-6 wow fadeIn" data-wow-delay=".9s">
                        <h3 style="height: 65px;"><span class="id-color">{{ $service->title }}</span> </h3>
                        <p style="height: 37px;">{{ Str::limit($service->brief,140 ) }}</p>
                        <div class="spacer-single"></div>
                        <img src="{{ asset($service->index_image) }}" class="img-responsive" alt="" style="margin-top: 15px">
                        <div class="spacer-single"></div>
                        <a href="{{route('service', $service->slug )}}" class="btn-line btn-fullwidth btn-ho">@lang('site.read_more')</a>

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
                    @if ($index%2 != 0)

                    <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                    <div class="spacer-single"></div>
                    @endif
                    @endforeach

                </div>
            </div>
        </section>

        <!-- section begin -->
        <section id="view-all-projects" class="call-to-action bg-color dark text-center" data-speed="5"
            data-type="background" aria-label="view-all-projects">
            <a href="sidebar-light-contact.html" class="btn-line black btn-big">Get Quotation</a>
        </section>
        <!-- logo carousel section close -->



    </div>


@endsection
