@extends('dashboard.layouts.app')
@section('title', 'Section Images')
@section('servicesActive', 'active')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Section Images For <a href="{{route('dashboard.services.sections.edit',$section->id)}}">{{ $section->title }}</a></h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
           <a href="{{ route('dashboard.services.sections.images.create',$section->id) }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Caption in Arabic</th>
                        <th>Caption in English</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $key => $image)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $image->translate('ar')->caption }}</td>
                        <td>{{ $image->translate('en')->caption }}</td>
                        <td> <img src="{{asset($image->image)}}" style="width: 125px; height: auto;" alt=""> </td>
                        <td>
                            <a href="{{ route('dashboard.services.sections.images.edit', $image->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> edit</a>
                        </td>
                        <td>
                            <form action="{{ route('dashboard.services.sections.images.destroy', $image->id) }}" method="post" style="display: inline-block">
                                @csrf()
                                @method('delete')
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