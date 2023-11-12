@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <form action="{{ route('admin.site.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header form-title">
            CẤU HÌNH HỆ THỐNG
        </div>
        <div class="card-body">
            <table class="table table-bordered mb-0 bg-white">
                <tbody>
                    <tr>
                        <td class="input-label">Logo: </td>
                        <td class="input-form">
                            <x-upload-image inputName='logo' inputTitle='' divPreviewId="upload_logo"
                                        defaultImage="{{ $site->logo ?? null }}" />
                        </td>
                    </tr>
                    <tr>
                        <td class="input-label">Favicon: </td>
                        <td class="input-form">
                            <x-upload-image inputName='favicon' inputTitle='' divPreviewId="upload_favicon"
                                        defaultImage="{{ $site->favicon ?? null }}" />
                        </td>
                    </tr>
                    <tr>
                        <td class="input-label">Tiêu đề: </td>
                        <td class="input-form">
                            <input type="text" 
                                    name="title" 
                                    class="form-control form-control-lg"
                                    value="{{ $site->title ?? old('title') }}"
                                    >
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="input-label">Mô tả: </td>
                        <td>
                            <textarea class="form-control form-control-lg" name="description" rows="3">{{ $site->description ?? old('description') }}</textarea>
                            @error('description')
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