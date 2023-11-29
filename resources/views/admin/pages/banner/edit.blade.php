@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <h5 class="card-header">Chỉnh sửa banner</h5>
            <div class="card-body">
                <form method="post" action="{{ route('admin.banner.update', $banner->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="title" class="col-form-label">Tiêu đề <span class="text-danger">*</span></label>
                        <input id="title" type="text" name="title" placeholder="Nhập tiêu đề"
                            value="{{ $banner->title }}" class="form-control">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-form-label">Nội dung <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="content" name="content">{{ $banner->content }}</textarea>
                        @error('content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="link" class="col-form-label">Đường dẫn </label>
                        <textarea class="form-control" id="link" name="link">{{ $banner->link }}</textarea>
                        @error('link')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="file" class="input-upload-image" onchange="onChangeInputFile(this)" name="thumbnail"
                            hidden />
                        <div class="d-flex align-items-center justify-content-center upload-image"
                            onclick="uploadImage('input-upload-image')">
                            @if ($banner->thumbnail)
                                <img width="200px" src="{{ asset($banner->thumbnail) }}" />
                            @else
                                <i class="fas fa-plus"></i>
                            @endif
                        </div>
                        @error('thumbnail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-form-label">Trạng thái <span class="text-danger">*</span></label>
                        <select name="status" class="form-control">
                            <option value="1">Banner Chính</option>
                            <option value="0" selected>Banner Phụ</option>
                        </select>
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group mb-3">
                        <button class="btn btn-success" type="submit">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/summernote/summernote.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@push('scripts')
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script src="{{ asset('backend/summernote/summernote.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <script>
        $('#summary').summernote();
        $('#description').summernote();
        var route_prefix = "{{ url('/filemanager') }}";
        $('#lfm').filemanager('image', {
            prefix: route_prefix
        });
    </script>
@endpush
