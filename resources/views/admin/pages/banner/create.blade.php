@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <h5 class="card-header">Thêm hình ảnh</h5>
            <div class="card-body">
                <form method="post" action="{{ route('admin.banner.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="title" class="col-form-label">Tiêu đề <span class="text-danger">*</span></label>
                        <input id="title" type="text" name="title" placeholder="Nhập tiêu đề"
                            value="{{ old('title') }}" class="form-control">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-form-label">Mô tả <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image" class="col-form-label">Hình ảnh <span class="text-danger">*</span></label>

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
                        <button class="btn btn-success btn-loading" type="submit">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
