@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <h5 class="card-header">Chỉnh sửa chương trình học</h5>
            <div class="card-body">
                <form method="post" action="{{ route('admin.studyprogram.update', $studyProgram->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="inputTitle" class="col-form-label">Tên <span class="text-danger">*</span></label>
                        <input id="inputTitle" type="text" name="name" placeholder="Enter name"
                            value="{{ $studyProgram->name }}" class="form-control">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputDesc" class="col-form-label">Mô tả</label>
                        <textarea class="form-control" id="description" name="description">{{ $studyProgram->description }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputDesc" class="col-form-label">Số lượng</label>
                        <textarea class="form-control" id="student" name="student">{{ $studyProgram->student }}</textarea>
                        @error('student')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-form-label">Trạng thái <span class="text-danger">*</span></label>
                        <select name="status" class="form-control">
                            <option value="1">Mở</option>
                            <option value="2" selected>Đóng</option>
                        </select>
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputPhoto" class="col-form-label">Hình ảnh <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Chọn
                                </a>
                            </span>
                            <input id="image" class="form-control" type="text" name="image"
                                value="{{ $studyProgram->image }}">
                        </div>
                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                        @error('image')
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
@endpush
@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/summernote/summernote.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@push('scripts')
    <script>
        $('#description').summernote();
        var route_prefix = "{{ url('/filemanager') }}";
        $('#lfm').filemanager('image', {
            prefix: route_prefix
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@endpush
