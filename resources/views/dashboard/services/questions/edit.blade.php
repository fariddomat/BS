@extends('dashboard.layouts.app')
@section('title', 'Update Question')
@section('servicesActive', 'active')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Question For {{$question->service->title}}</h1>
</div>
<div>
    @include('partials._errors')
</div>
<div class="container">

    <div class="row justify-content-center">
        <div class="col">
            <form action="{{ route('dashboard.services.questions.update', $question->id) }}" method="post">
                @csrf()
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="ar[question]" class="form-label">Question in Arabic</label>
                    <input type="text" name="ar[question]" class="form-control" value="{{ $question->translate('ar')->question }}" dir="rtl">
                </div>
                <div class="form-group mb-3">
                    <label for="en[question]" class="form-label">Question in English</label>
                    <input type="text" name="en[question]" class="form-control" value="{{ $question->translate('en')->question }}">
                </div>

                <div class="form-group mb-3">
                    <label for="ar[answer]" class="form-label">Answer in Arabic</label>
                    <textarea class="form-control" id="ar[answer]" name="ar[answer]" rows="3" dir="rtl">{{ $question->translate('ar')->answer }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="en[answer]" class="form-label">Answer in English</label>
                    <textarea class="form-control" id="en[answer]" name="en[answer]" rows="3">{{$question->translate('en')->answer}}</textarea>
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Update </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection