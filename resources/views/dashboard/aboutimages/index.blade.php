@extends('dashboard.layouts.app')
@section('title', 'About Images')
@section('aboutimagesActive', 'active')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">About Images</h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
           {{-- <a href="{{ route('dashboard.aboutimages.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add </a> --}}
        </div>
    </div>
    @php
        $names=[__('about.brief'), __('about.who'), __('about.history'), __('about.massage'), __('about.goals'), __('about.vision'), __('about.ambition'), __('about.values')];
    @endphp
    <div class="row justify-content-center">
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Section</th>
                        <th>Showed</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $index=>$image)
                    <tr>
                        <td>{{ $index }}</td>
                        <td>{{ basename($image->image) }}</td>
                        <td>{{ $names[$index] }}</td>
                        <td>{{ $image->showed == 1 ? 'Showed' : 'Hidden' }}</td>
                        <td>
                            <a href="{{ route('dashboard.aboutimages.edit', $image->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table><!-- end of table -->
            {{ $images->links() }}
        </div>
    </div>
</div>
@endsection
