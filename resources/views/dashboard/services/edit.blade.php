@extends('dashboard.layouts.app')
@section('title', 'Update Service')
@section('servicesActive', 'active')

@section('styles')
    <link rel="stylesheet" href="{{ asset('dashboard/css/imageDeleteBtn.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('dashboard/js/image_preview.js') }}"></script>
    <script>
        $(function() {
            $("#delete-index-img").on("click", function() {
                $("#index-img").attr("src", "");
                $(".del").hide();
                $(".logo").val(null);
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr("content");
                $.ajax({
                    url: "{{ route('dashboard.services.indexImage.destroy', $service->id) }}",
                    type: "DELETE",
                    data: {
                        _token: CSRF_TOKEN
                    },
                    dataType: "JSON",
                    success: function(data) {
                        //done.
                    },
                });
            });
        });
    </script>

<script>
    $(function() {
        $("#delete-index-img-2").on("click", function() {
            $("#index-img-2").attr("src", "");
            $(".del2").hide();
            $(".logo2").val(null);
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr("content");
            $.ajax({
                url: "{{ route('dashboard.services.indexImage.destroy2', $service->id) }}",
                type: "DELETE",
                data: {
                    _token: CSRF_TOKEN
                },
                dataType: "JSON",
                success: function(data) {
                    //done.
                },
            });
        });
    });
</script>
@endsection

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Service</h1>
    </div>
    <div>
        @include('partials._errors')
    </div>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col">
                <form action="{{ route('dashboard.services.update', $service->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf()
                    {{ method_field('put') }}

                    <div class="form-group mb-3">
                        <label for="ar[title]" class="form-label">Title in Arabic</label>
                        <input type="text" name="ar[title]" class="form-control"
                            value="{{ $service->translate('ar')->title }}" dir="rtl">
                    </div>
                    <div class="form-group mb-3">
                        <label for="en[title]" class="form-label">Title in English</label>
                        <input type="text" name="en[title]" class="form-control"
                            value="{{ $service->translate('en')->title }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="slug" class="form-label">Link</label>
                        <input type="text" name="slug" class="form-control" value="{{ $service->slug }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="ar[main_title]" class="form-label">Main Title in Arabic</label>
                        <input type="text" name="ar[main_title]" class="form-control"
                            value="{{ $service->translate('ar')->main_title }}" dir="rtl">
                    </div>
                    <div class="form-group mb-3">
                        <label for="en[main_title]" class="form-label">Main Title in English</label>
                        <input type="text" name="en[main_title]" class="form-control"
                            value="{{ $service->translate('en')->main_title }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="ar[index_name]" class="form-label">Index Name in Arabic</label>
                        <input type="text" name="ar[index_name]" class="form-control"
                            value="{{ $service->translate('ar')->index_name }}" dir="rtl">
                    </div>
                    <div class="form-group mb-3">
                        <label for="en[index_name]" class="form-label">Index Name in English</label>
                        <input type="text" name="en[index_name]" class="form-control"
                            value="{{ $service->translate('en')->index_name }}">
                    </div>



                    <div class="form-group mb-3">
                        <label for="ar[brief]" class="form-label">Brief in Arabic</label>
                        <textarea class="form-control" id="ar[brief]" name="ar[brief]" rows="5" dir="rtl">{{ $service->translate('ar')->brief }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="en[brief]" class="form-label">Brief in English</label>
                        <textarea class="form-control" id="en[brief]" name="en[brief]" rows="5">{{ $service->translate('en')->brief }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="icon_class" class="form-label">Icon Class</label>
                        <input type="text" name="icon_class" class="form-control"
                            value="{{ $service->icon_class }}">
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" id="showed" name="showed"
                            {{ $service->showed == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="showed">
                            Showed
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" id="show_at_home"
                            name="show_at_home" {{ $service->show_at_home == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="show_at_home">
                            Show at home
                        </label>
                    </div>


                    <div class="form-group mb-3">
                        <label>Thumbnail Image</label>
                        <input type="file" name="image" class="form-control image">
                    </div>

                    <div class="form-group mb-3">
                        <img src="{{ asset($service->image) }}" style="width: 300px;"
                            class="img-thumbnail image-preview" alt="">
                    </div>


                    <div class="form-group mb-3">
                        <label>Index Image
                        </label>
                        <input type="file" name="index_image" class="form-control logo">
                    </div>

                    <div class="form-group mb-3">
                        @if ($service->index_image)

                            <div class="img-wrap del">
                                <span id="delete-index-img" class="close" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete">&times;</span>
                                <img id="index-img" src="{{ asset($service->index_image) }}" style="width: 300px;"
                                    class="img-thumbnail logo-preview" alt="">
                            </div>
                        @else
                            <img src="" style="width: 300px; display: none;" class="img-thumbnail logo-preview"
                                alt="">
                        @endif
                    </div>



                    <div class="form-group mb-3">
                        <label>Index Image 2
                        </label>
                        <input type="file" name="index_image_2" class="form-control logo2">
                    </div>

                    <div class="form-group mb-3">
                        @if ($service->index_image_2)
                            <div class="img-wrap del2">
                                <span id="delete-index-img-2" class="close" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Delete">&times;</span>
                                <img id="index-img-2" src="{{ asset($service->index_image_2) }}" style="width: 300px;"
                                    class="img-thumbnail logo-preview-2" alt="">
                            </div>
                        @else
                            <img src="" style="width: 300px; display: none;" class="img-thumbnail logo-preview-2"
                                alt="">
                        @endif
                    </div>

                    <div class="form-group mb-3">
                        <label>Parent Service</label>
                        <select name="parent_id" id="" class="form-control">
                            <option value="">Select a service to make this as sub service</option>
                            @foreach ($services as $item)
                                <option value="{{ $item->id }}" @if ($item->id == $service->parent_id)
                                    selected
                                @endif>{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Update </button>
                        <a href="{{route('dashboard.services.indexitems.index', $service->id)}}" class="btn btn-primary"> index items </a>
                        <a href="{{ route('dashboard.services.sections.index', $service->id) }}" class="btn btn-primary">
                            sections </a>
                        {{-- <a href="{{route('dashboard.services.workways.index', $service->id)}}" class="btn btn-primary"> work ways </a> --}}
                        {{-- <a href="{{route('dashboard.services.questions.index', $service->id)}}" class="btn btn-primary"> questions </a> --}}
                        <a href="{{ route('dashboard.services.sliderImages.index', $service->id) }}"
                            class="btn btn-primary"> Slider Images </a>
                        {{-- <a href="{{ route('dashboard.services.sliderHeaderImages.index', $service->id) }}" class="btn btn-primary">Header Slider Images</a> --}}
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
