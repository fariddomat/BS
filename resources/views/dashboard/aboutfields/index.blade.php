@extends('dashboard.layouts.app')
@section('title', 'About Fields')
@section('aboutfieldsActive', 'active')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">About Fields</h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
           <a href="{{ route('dashboard.aboutfields.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Value</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aboutFields as $aboutField)
                    <tr>
                        <td>{{ $aboutField->id }}</td>
                        <td>{{ $aboutField->title }}</td>
                        <td>{{ $aboutField->value }}</td>
                        <td>
                            <a href="{{ route('dashboard.aboutfields.edit', $aboutField->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> edit</a>
                        </td>
                        <td>
                            <form action="{{ route('dashboard.aboutfields.destroy', $aboutField->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </form><!-- end of form -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table><!-- end of table -->
        </div>
    </div>
</div>
@endsection