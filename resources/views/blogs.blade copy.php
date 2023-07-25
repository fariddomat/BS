@extends('layouts.site')
@section('title', trans('site.blogs'))
@section('content')

<!-- Blog -->
<div id="blog" class="blog-home bg-gray center section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-title">@lang('site.my_blog')</h2>
                <hr class="line line-hr-primary">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="owl-filter-bar" id="filter-blog-menu">
                    <li class="list-inline-item">
                        <a class="item active" data-owl-filter="*">@lang('site.all')</a>
                    </li>
                    @foreach($blogCategories as $blogCategory)
                    <li class="list-inline-item d-none d-md-inline-block">
                        <a class="item" data-owl-filter="{{'.blogs'.$blogCategory->id}}">{{$blogCategory->name}}</a>
                    </li>
                    @endforeach
                    <select class="form-select d-md-none my-2 select-m-filter bg-gray" name="filter-blog-menu-select" id="filter-blog-menu-select">
                        <option class="option-m-filter" value="*">@lang('site.categories')</option>
                        @foreach($blogCategories as $blogCategory)
                        <option class="option-m-filter" value="{{'.blogs'.$blogCategory->id}}">{{$blogCategory->name}}</option>
                        @endforeach
                    </select>
                </nav>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                <div class="item {{'blogs'.$blog->blog_category_id}} col-lg-6">
                    <div class="row mt-2" style="  padding: 20px 10px;">
                        <div class="post-img col-lg-5" style="padding: 0; margin-top: -20px;">
                            <div class="img" style="height: 100% !important; background-image: linear-gradient(to top, #fff 50%, #fff0 50%);"><a href="{{route('blog',$blog->slug)}}"><img src="{{asset($blog->image)}}"
                                        alt="" style="height: 90% !important;border-radius: 30px;"></a>
                            </div>
                        </div>
                        <div class="cont col-lg-7">
                            <div class="info"><a href="{{route('blog',$blog->slug)}}">{{$blog->updated_at->format('d F
                                    Y')}}</a></div>
                            <h5 style="min-height: 60px;"><a href="{{route('blog',$blog->slug)}}">{{$blog->title}}</a></h5>
                            <div>{!! Str::limit( Helper::removeSpecialCharacter($blog->description),90 ) !!}</div>
                            <a href="{{route('blog',$blog->slug)}}" class="more"><span>@lang('site.read_more')</span></a>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="row" style="width: 100%">

                <div style="margin: 0 auto;">{{ $blogs->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
