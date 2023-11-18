@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <form action="{{ route('admin.banner.save') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header form-title">
            BANNER
        </div>
        <div class="card-body">
            <table class="table table-bordered mb-0 bg-white">
                <tbody>
                    <tr>
                        <td class="input-label">Tiêu đề: </td>
                        <td class="input-form">
                            <input type="text" 
                                    name="title" 
                                    class="form-control form-control-lg"
                                    value="{{ $banner->title ?? old('title') }}"
                                    >
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="input-label">Mô tả: </td>
                        <td>
                            <textarea class="form-control form-control-lg" name="content" rows="3">{{ $banner->content ?? old('content') }}</textarea>
                            @error('content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="input-label">Hình ảnh: </td>
                        <td>
                            <input type="file" class="input-upload-image" onchange="onChangeInputFile(this)" name="thumbnail" hidden/>
                            <div class="d-flex align-items-center justify-content-center upload-image" onclick="uploadImage(this)">
                                @if($banner->thumbnail)
                                    <img height="100%" class="p-2" src="{{ asset($banner->thumbnail) }}" />
                                @else
                                    <i class="fas fa-plus"></i>
                                @endif
                            </div>
                            @error('thumbnail')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center gap-3 mb-2">
            <button type="submit" class="btn-loading btn btn-primary waves-effect waves-light w-25 btn-lg d-flex align-items-center justify-content-center">
                Cập nhật thay đổi
            </button>
        </div>
    </div>
    </form>
</div>
@endsection