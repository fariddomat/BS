@extends('dashboard.layouts.app')
@section('title', 'Update Index Item')
@section('servicesActive', 'active')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Index Item For {{$indexitem->service->title}}</h1>
</div>
<div>
    @include('partials._errors')
</div>
<div class="container">

    <div class="row justify-content-center">
        <div class="col">
            <form action="{{ route('dashboard.services.indexitems.update', $indexitem->id) }}" method="post">
                @csrf()
                {{ method_field('put') }}
                 
                <div class="form-group mb-3">
                    <label for="ar[name]" class="form-label">Name in Arabic</label>
                    <input type="text" name="ar[name]" class="form-control" value="{{ $indexitem->translate('ar')->name }}" dir="rtl">
                </div>
                <div class="form-group mb-3">
                    <label for="en[name]" class="form-label">Name in English</label>
                    <input type="text" name="en[name]" class="form-control" value="{{ $indexitem->translate('en')->name }}">
                </div>

                <div class="form-group mb-3">
                    <label for="icon_class" class="form-label">Icon Class</label>
                    <input type="text" name="icon_class" class="form-control" value="{{ $indexitem->icon_class }}">
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Update </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection