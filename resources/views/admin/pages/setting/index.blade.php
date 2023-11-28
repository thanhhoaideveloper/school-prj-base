@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <h5 class="card-header">Cài đặt trang web</h5>
        <div class="card-body">
            <form method="post" action="{{ route('admin.site.update') }}">
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
                    <label for="inputPhoto" class="col-form-label">Logo <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Chọn
                            </a>
                        </span>
                        <input id="thumbnail" class="form-control" type="text" name="logo"
                            value="{{ $site->logo }}">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>

                    @error('logo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Footer Logo <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Chọn
                            </a>
                        </span>
                        <input id="thumbnail" class="form-control" type="text" name="footer_logo"
                            value="{{ $site->footer_logo ?? null }}">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>

                    @error('logo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email" class="col-form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" required value="{{ $site->email ?? null }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone" class="col-form-label">Điện thoại <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="phone" required value="{{ $site->phone ?? null }}">
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
@endsection
