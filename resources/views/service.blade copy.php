@extends('layouts.site' )
@section('title')
{{$service->title}}
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('css/services.css')}}">
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
@endsection

@section('scripts')
<script>
        var acc = document.getElementsByClassName("accordion1");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active1");
                var panel = this.nextElementSibling;
                var arrow = this.querySelector("i");
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                    panel.style.borderBottom = null;
                    arrow.className = "fas fa-caret-{{$arrow}} pr-3";
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                    panel.style.borderBottom = "1px solid #d4d4d4";
                    arrow.className = "fas fa-caret-up pr-3";
                }
            });
        }
</script>
<script src="{{asset('js/aos.js')}}"></script>
<script>
    AOS.init();
</script>
@endsection

@section('content')

<div class="blog-home section-padding pt-4 px-md-5 mx-md-3">
    <div class="container-fluid px-md-5">
        <div class="row">
            <div class="col-md-12">
                <div class="item animate-box" data-animate-effect="fadeInUp">
                    <div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h1 class="service-main-title">{{$service->main_title}}</h1>
                                <h4 class="service-index-name">{{$service->index_name}}</h4>
                                <ul class="">
                                    @foreach($service->indexItems as $item)
                                    <li class="">
                                        <span class="list-icon">
                                            <i aria-hidden="true" class="{{$item->icon_class}}"></i> </span>
                                        <span class="list-text">{{$item->name}}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 text-center" style="margin: auto;">
                                <div class="icon">
                                    <img src="{{asset($service->index_image)}}" alt="" class="img-fluid" style="width: fit-content;">
                                </div>
                            </div>
                        </div>

                        @foreach($service->sections as $section)
                        <div class="row mt-5">
                            <div class="col-12">
                                <h3 class="service-section-title">{{$section->title}}</h3>
                                <div>
                                    {!! $section->content !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($section->images as $sectionImage)
                            <div class="col-12 col-md">
                                <div class="pt-3 text-center">
                                    <img class="service-section-image img-fluid" src="{{asset($sectionImage->image)}}" alt="" style="width: fit-content;">
                                    <figcaption class="text-center service-section-image-caption">{{ $sectionImage->caption }}</figcaption>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                        {{-- Slider Start --}}
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  >
                            @if ($service->sliderImages->count() >= 1)
                            <div>
                                <h3 class="service-primary-color">
                                    @lang('site.work_templates')
                                </h3>
                            </div>
                            @endif
                            <div class="carousel-inner" >
                              @foreach ($service->sliderImages->where('showed', 1) as $index=>$item)
                              <div class="carousel-item @if ($index==0)
                                active
                              @endif">
                                <img class="d-block w-100" src="{{asset($item->image)}}"  >

                              </div>
                              @endforeach
                            </div>
                            @if ($service->sliderImages->count() > 1)
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            @endif
                          </div>
                        {{-- Slider End --}}
                        <div class="row mt-5">
                            <div class="col-12">
                                <h3 class="service-primary-color">
                                    @lang('site.way_we_work_at')
                                    <br>
                                    <span class="service-main-title">{{$service->main_title}}</span>
                                </h3>
                            </div>

                            @foreach( $service->workWays as $work )
                            <div class="col-12 col-md-6 mt-3"

                                @if( $loop->even )
                                data-aos="fade-up"
                                @else
                                data-aos="fade-down"
                                @endif

                                data-aos-duration="2000"
                                data-aos-offset="100"
                                data-aos-delay="50"
                            >
                                <div class="flip-box">
                                    <div class="flip-box-inner">
                                      <div class="flip-box-front">
                                        <h3>{{$work->title}}</h3>
                                      </div>
                                      <div class="flip-box-back">
                                        <div class="">
                                        {{$work->content}}
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="text-center wrapper1">
                                    <div>
                                        <h2 style="font-size: 30px; color: #fff;">
                                            @lang('site.market_your_project')
                                        </h2>
                                    </div>
                                    <div>
                                        <a href="{{route('service.order', $service->slug )}}"
                                            class="wrapper1-a">
                                            @lang('site.submit_your_request')
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col">
                                <h3 class="service-primary-color">
                                    @lang('site.FAQ_about')
                                    <br>
                                    <span class="service-main-title">{{$service->main_title}}</span>
                                </h3>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($service->questions->chunk($halfOfQuestions) as $questions)
                            <div class="col-12 col-md-6">
                            @foreach($questions as $question)
                            <div class="accordion1">
                                <i class="fas fa-caret-{{$arrow}} pr-3"></i>
                                {{ $question->question }}
                            </div>
                            <div class="panel1">
                                {{ $question->answer }}
                            </div>
                            @endforeach
                            </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="mt-5 text-center">
                        <a href="{{route('service.order', $service->slug )}}"
                            class="order-service"><span>@lang('site.order_now')</span></a>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <h2 class="service-primary-color">@lang('site.other_services')</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($otherServices as $otherService)
                        <div class="col-12 col-md-3 pb-4"

                            @if( $loop->even )
                            data-aos="fade-up"
                            @else
                            data-aos="fade-down"
                            @endif

                            data-aos-duration="2000"
                            data-aos-offset="200"
                            data-aos-delay="50"
                        >
                            <div class="other-service-container text-center d-flex flex-column">
                                <div class="mb-4">
                                    <i class="{{$otherService->icon_class}} fa-3x service-primary-color"></i>
                                </div>
                                <div>
                                    <h4 class="service-primary-color mb-3">{{$otherService->title}}</h4>
                                </div>
                                <div class="mt-auto">
                                    <p>
                                        <br>
                                        <a href="{{route('service', $otherService->slug )}}"
                                            class="service-detail-link"><span>@lang('site.service_detail')</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
