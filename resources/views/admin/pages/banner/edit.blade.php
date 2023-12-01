@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <h5 class="card-header">Chỉnh sửa hình ảnh</h5>
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
                        <label for="description" class="col-form-label">Nội dung <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="description" name="description">{{ $banner->description }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <input type="file" class="input-upload-image" onchange="onChangeInputFile(this)" name="image"
                            hidden />
                        <div class="d-flex align-items-center justify-content-center upload-image"
                            onclick="uploadImage('input-upload-image')">
                            @if ($banner->image)
                                <img width="200px" src="{{ asset($banner->image) }}" />
                            @else
                                <i class="fas fa-plus"></i>
                            @endif
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