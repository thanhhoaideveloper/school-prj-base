@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary float-left">Cập nhật bài viết</h6>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.article.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" value="{{ $article->id }}" hidden />
                    <div class="form-group">
                        <label for="inputTitle" class="col-form-label">
                            Tiêu đề
                        </label>
                        <input id="inputTitle" type="text" name="title" placeholder="Nhập tiêu đề"
                            value="{{ $article->title ?? old('title') }}" class="form-control">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputContent">Mô tả ngắn</label>
                        <textarea class="form-control" name="content" id="inputContent" rows="3">{{ $article->content }}</textarea>
                        @error('content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="file" class="input-upload-image" onchange="onChangeInputFile(this)" name="thumbnail"
                            hidden />
                        <div class="d-flex align-items-center justify-content-center upload-image"
                            onclick="uploadImage('input-upload-image')">
                            @if ($article->thumbnail)
                                <img width="200px" src="{{ asset($article->thumbnail) }}" />
                            @else
                                <i class="fas fa-plus"></i>
                            @endif
                        </div>
                        @error('thumbnail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputDesc" class="col-form-label">
                            Mô tả
                        </label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ $article->description ?? old('description') }}</textarea>
                        @error('description')
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
    @include('admin.pages.article.script')
    @push('scripts')
        <script>
            $('#description').summernote({
                height: 300,
            });
        </script>
    @endpush
@endsection
