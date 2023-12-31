@extends('dashboard.layouts.app')
@section('title', 'Contact Info')
@section('contactinfoActive', 'active')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Contact Info</h1>
</div>
<div>
    @include('partials._errors')
</div>
<div class="container">

    <div class="row justify-content-center">
        <div class="col">
            <form action="{{ route('dashboard.contactinfo.store') }}" method="post" enctype="multipart/form-data">
                @csrf()
                <div class="form-group mb-3">
                    <label for="mobile" class="form-label">Mobile</label>
                    <input type="text" name="mobile" class="form-control" value="{{ $contactInfo->mobile }}">
                </div>
                <div class="form-group mb-3">
                    <label for="whatsapp" class="form-label">Whatsapp</label>
                    <input type="text" name="whatsapp" class="form-control" value="{{ $contactInfo->whatsapp }}">
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $contactInfo->email }}">
                </div>
                <div class="form-group mb-3">
                    <label for="location_link" class="form-label">Location Link</label>
                    <input type="text" name="location_link" class="form-control" value="{{ $contactInfo->location_link }}">
                </div>
                <div class="form-group mb-3">
                    <label for="ar[location]" class="form-label">Location Name in Arabic</label>
                    <input type="text" name="ar[location]" class="form-control" value="{{ $contactInfo->translate('ar')->location }}" dir="rtl">
                </div>
                <div class="form-group mb-3">
                    <label for="en[location]" class="form-label">Location Name in English</label>
                    <input type="text" name="en[location]" class="form-control" value="{{ $contactInfo->translate('en')->location }}">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Save </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection