@extends('dashboard.layouts.app')
@section('title', 'Contact Us')
@section('contactusActive', 'active')
@section('styles')
    <link href="{{ asset('dashboard/css/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/removeSortingDataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/datatablesStyles.css') }}" rel="stylesheet">
@endsection
@section('scripts')
    <script src="{{ asset('dashboard/js/contactUs.js') }}"></script>
    <script src="{{ asset('dashboard/js/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#contactsTable').DataTable({
                responsive: true,
                searching: false,
                paging: false,
                info: false,
                sorting: false,
            });
        });
    </script>
@endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Contact Us</h1>
    </div>
    <div class="container">
        <a href="{{ route('dashboard.blocked_contact.index') }}" class="btn btn-primary"> Manage Blocked Contacts</a>
        <div class="row justify-content-center">
            <div class="col">
                <table id="contactsTable" class="table table-hover display responsive nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Services</th>
                            <th>Message</th>
                            <th>Sent Date</th>
                            <th>IP</th>
                            <th>Status</th>
                            <th>Delete</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td><a href="tel:{{ $contact->mobile }}"
                                        style="text-decoration: none;">{{ $contact->mobile }}</a></td>
                                <td>
                                    @if ($contact->services()->exists())
                                        @foreach ($contact->services as $service)
                                            {{ $service->title }} <br>
                                        @endforeach
                                    @else
                                        No Services
                                    @endif
                                </td>
                                <td>{{ $contact->message }}</td>
                                <td>{{ $contact->created_at->format('Y-m-d H:i:s') }}</td>
                                <td>{{ $contact->ip }}</td>
                                <td>
                                    @if ($contact->status == 1)
                                        <button type="button"
                                            data-link="{{ route('dashboard.contact-us.status', $contact->id) }}"
                                            class="change-status btn btn-primary btn-sm"><i class="fas fa-check"></i>
                                            New</button>
                                    @else
                                        <span class="text-success">Done</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('dashboard.contact-us.destroy', $contact->id) }}" method="post"
                                        style="display: inline-block">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-danger delete btn-sm"><i
                                                class="fas fa-trash"></i> Delete</button>
                                    </form><!-- end of form -->
                                </td>
                                <td>
                                    <form action="{{ route('dashboard.contact-us.note', $contact->id) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <textarea name="note" class="form-control" id="">{{ $contact->note }}</textarea>

                                        <button type="submit" class="btn btn-success btn-sm"> <i class="fas fa-save"></i>
                                            Save</button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table><!-- end of table -->
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
@endsection
