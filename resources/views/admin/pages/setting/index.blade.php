@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <h5 class="card-header">Cài đặt trang web</h5>
            <div class="card-body">
                <form method="post" action="{{ route('admin.site.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="col-form-label">Tiêu đề <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="title" name="title">{{ $site->title ?? null }}</textarea>
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-form-label">Mô tả <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="description" name="description">{{ $site->description ?? null }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="file" class="input-upload-image" onchange="onChangeInputFile(this)" name="logo"
                            hidden />
                        <div class="d-flex align-items-center justify-content-center upload-image"
                            onclick="uploadImage('input-upload-image')">
                            @if ($site && $site->logo)
                                <img width="200px" src="{{ asset($site->logo) }}" />
                            @else
                                <i class="fas fa-plus"></i>
                            @endif
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="file" class="input-upload-image-footer" onchange="onChangeInputFile(this)" name="footer_logo"
                            hidden />
                        <div class="d-flex align-items-center justify-content-center upload-image"
                            onclick="uploadImage('input-upload-image-footer')">
                            @if ($site && $site->footer_logo)
                                <img width="200px" src="{{ asset($site->footer_logo) }}" />
                            @else
                                <i class="fas fa-plus"></i>
                            @endif
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" required
                            value="{{ $site->email ?? null }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-form-label">Điện thoại <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="phone" required
                            value="{{ $site->phone ?? null }}">
                        @error('phone')
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
