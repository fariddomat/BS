@extends('dashboard.layouts.app')
@section('title', 'Change Password')
@section('passwordEditActive', 'active')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Change Password</h1>
</div>
<div>
    @include('partials._errors')
</div>
<div class="container">

    <div class="row justify-content-center">
        <div class="col">
            <form action="{{ route('dashboard.password.update') }}" method="post">
                @csrf()

                <div class="form-group mb-3">
                    <label for="current_password" class="form-label">Current Password</label>
                    <input type="password" name="current_password" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="new_password" class="form-label">New Password</label>
                    <input type="password" name="new_password" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                    <input type="password" name="new_password_confirmation" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Save </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection