@extends('dashboard.layouts.app')
@section('title', 'Contact Us')
@section('contactusActive', 'active')

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
            <form action="{{ route('dashboard.blocked_contact.store') }}" method="post">
                @csrf()
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" >
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" >
                </div>

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                </div>


                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Block </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
