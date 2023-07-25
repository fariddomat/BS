@extends('dashboard.layouts.app')
@section('title', 'Change Home Info')
@section('homeinfoActive', 'active')

@section('scripts')
<script src="{{asset('dashboard/js/image_preview.js')}}"></script>
@endsection

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Change Home Info</h1>
</div>
<div>
    @include('partials._errors')
</div>
<div class="container">

    <div class="row justify-content-center">
        <div class="col">
            <form action="{{ route('dashboard.homeinfo.store') }}" method="post" enctype="multipart/form-data">
                @csrf()
                <div class="form-group mb-3">
                    <label for="ar[title]" class="form-label">Title in Arabic</label>
                    <input type="text" name="ar[title]" class="form-control" value="{{ old('ar.title') ?? isset($info) ? $info->translate('ar')->title : ''  }}" dir="rtl">
                </div>
                <div class="form-group mb-3">
                    <label for="en[title]" class="form-label">Title in English</label>
                    <input type="text" name="en[title]" class="form-control" value="{{ old('en.title') ?? isset($info) ? $info->translate('en')->title : '' }}">
                </div>

                <div class="form-group mb-3">
                    <label for="ar[description]" class="form-label">Description in Arabic</label>
                    <input type="text" name="ar[description]" class="form-control" value="{{ old('ar.description') ?? isset($info) ? $info->translate('ar')->description : '' }}" dir="rtl">
                </div>
                <div class="form-group mb-3">
                    <label for="en[description]" class="form-label">Description in English</label>
                    <input type="text" name="en[description]" class="form-control" value="{{ old('en.description') ?? isset($info) ? $info->translate('en')->description : '' }}">
                </div>

                <div class="form-group mb-3">
                    <label for="ar[work]" class="form-label">Work in Arabic</label>
                    <input type="text" name="ar[work]" class="form-control" value="{{ old('ar.work') ?? isset($info) ? $info->translate('ar')->work : '' }}" dir="rtl">
                </div>
                <div class="form-group mb-3">
                    <label for="en[work]" class="form-label">Work in English</label>
                    <input type="text" name="en[work]" class="form-control" value="{{ old('en.work') ?? isset($info) ? $info->translate('en')->work : '' }}">
                </div>

                <div class="form-group mb-3">
                    <label for="ar[work_description]" class="form-label">Work Description in Arabic</label>
                    <input type="text" name="ar[work_description]" class="form-control" value="{{ old('ar.work_description') ?? isset($info) ? $info->translate('ar')->work_description : '' }}" dir="rtl">
                </div>
                <div class="form-group mb-3">
                    <label for="en[work_description]" class="form-label">Work Description in English</label>
                    <input type="text" name="en[work_description]" class="form-control" value="{{ old('en.work_description') ?? isset($info) ? $info->translate('en')->work_description : '' }}">
                </div>

                <div class="form-group mb-3">
                    <label>Header Image</label>
                    <input type="file" name="image" class="form-control image">
                </div>

                <div class="form-group mb-3">
                    <img src="{{ isset($info) ? Storage::disk('s3')->url($info->image) : '#' }}" style="width: 300px;" class="img-thumbnail image-preview" alt="">
                </div>

                <div class="form-group mb-3">
                    <label>Logo Image (200 x 200)</label>
                    <input type="file" name="logo" class="form-control logo">
                </div>

                <div class="form-group mb-3">
                    <img src="{{ isset($info) ? asset($info->logo) : '#' }}" style="width: 300px;" class="img-thumbnail logo-preview" alt="">
                </div>

                <div class="form-group mb-3">
                    <label>About Me Image</label>
                    <input type="file" name="about_me_image" class="form-control about-me-image">
                </div>

                <div class="form-group mb-3">
                    <img src="{{ isset($info) ? asset($info->about_me_image) : '#' }}" style="width: 300px;" class="img-thumbnail about-me-image-preview" alt="">
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Change </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection