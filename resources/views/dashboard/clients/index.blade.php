@extends('dashboard.layouts.app')
@section('title', 'Clients')
@section('clientsActive', 'active')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Clients</h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
           <a href="{{ route('dashboard.clients.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Position</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->company }}</td>
                        <td>{{ $client->position }}</td>
                        <td>
                            <a href="{{ route('dashboard.clients.edit', $client->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table><!-- end of table -->
        </div>
    </div>
</div>
@endsection