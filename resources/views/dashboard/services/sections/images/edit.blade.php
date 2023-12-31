@extends('dashboard.layouts.app')
@section('title', 'Update Image')
@section('servicesActive', 'active')

@section('scripts')
<script src="{{asset('dashboard/js/image_preview.js')}}"></script>
@endsection

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Image For {{$image->serviceSection->title}}</h1>
</div>
<div>
    @include('partials._errors')
</div>
<div class="container">

    <div class="row justify-content-center">
        <div class="col">
            <form action="{{ route('dashboard.services.sections.images.update', $image->id) }}" method="post" enctype="multipart/form-data">
                @csrf()
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="ar[caption]" class="form-label">Caption in Arabic</label>
                    <input type="text" name="ar[caption]" class="form-control" value="{{ $image->translate('ar')->caption }}" dir="rtl">
                </div>
                <div class="form-group mb-3">
                    <label for="en[caption]" class="form-label">Caption in English</label>
                    <input type="text" name="en[caption]" class="form-control" value="{{ $image->translate('en')->caption }}">
                </div>

                <div class="form-group mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control image">
                </div>

                <div class="form-group mb-3">
                    <img src="{{ asset($image->image) }}" style="width: 300px;" class="img-thumbnail image-preview" alt="">
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Update </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection