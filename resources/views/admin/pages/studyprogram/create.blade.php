@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <h5 class="card-header">Thêm chương trình học</h5>
            <div class="card-body">
                <form method="post" action="{{ route('admin.studyprogram.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputTitle" class="col-form-label">Tên <span class="text-danger">*</span></label>
                        <input id="inputTitle" type="text" name="name"
                            value="{{ old('name') }}" class="form-control">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputDesc" class="col-form-label">Mô tả <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputDesc" class="col-form-label">Số lượng <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="student" name="student">{{ old('student') }}</textarea>
                        @error('student')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputDesc" class="col-form-label">Thời gian bắt đầu</label>
                        <input type="date" id="start_time" name="start_time" value="2023-11-23">
                        @error('start_time')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputDesc" class="col-form-label">Thời gian kết thúc</label>
                        <input type="date" id="end_time" name="end_time" value="2023-11-23">
                        @error('end_time')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="file" class="input-upload-image" onchange="onChangeInputFile(this)" name="image"
                            hidden />
                        <div class="d-flex align-items-center justify-content-center upload-image"
                            onclick="uploadImage('input-upload-image')">
                            <i class="fas fa-plus"></i>
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <button type="reset" class="btn btn-warning">Nhập lại</button>
                        <button class="btn btn-success" type="submit">Lưu</button>
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
    <script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script src="{{ asset('backend/summernote/summernote.min.js') }}"></script>
    <script>
        $('#description').summernote();
        var route_prefix = "{{ url('/filemanager') }}";
        $('#lfm').filemanager('image', {
            prefix: route_prefix
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@endpush
