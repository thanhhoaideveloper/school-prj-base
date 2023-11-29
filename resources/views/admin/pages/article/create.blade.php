@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary float-left">Thêm bài viết</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.article.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputTitle" class="col-form-label">
                            Tiêu đề
                        </label>
                        <input id="inputTitle" type="text" name="title" placeholder="Nhập tiêu đề"
                            value="{{ old('title') }}" class="form-control">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputContent">Mô tả ngắn</label>
                        <textarea class="form-control" name="content" id="inputContent" rows="3">{{ old('content') }}</textarea>
                        @error('content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="file" class="input-upload-image" onchange="onChangeInputFile(this)" name="thumbnail"
                            hidden />
                        <div class="d-flex align-items-center justify-content-center upload-image"
                            onclick="uploadImage('input-upload-image')">
                            <i class="fas fa-plus"></i>
                        </div>
                        @error('thumbnail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputDesc" class="col-form-label">
                            Mô tả
                        </label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="is_active_event" class="col-form-label">Loại bài viết <span
                                class="text-danger">*</span></label>
                        <select name="is_active_event" class="form-control">
                            <option value="1">Sự kiện sắp diễn ra</option>
                            <option value="0" selected>Bài viết</option>
                        </select>
                        @error('is_active_event')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <button type="reset" class="btn btn-warning">Nhập lại</button>
                        <button class="btn btn-success btn-loading" type="submit">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $('#description').summernote({
                height: 300,
            });
        </script>
    @endpush
@endsection
