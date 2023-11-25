@extends('admin.layouts.master')

@section('content')
    <div class="card">
        <h5 class="card-header">Thêm đánh giá</h5>
        <div class="card-body">
            <form method="post" action="{{ route('admin.rating.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Tên khách hàng <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="name" placeholder="Enter title"
                        value="{{ old('name') }}" class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="avatar" class="col-form-label">Ảnh đại diện <span class="text-danger">*</span></label>
                    <x-upload-image inputName='avatar' inputTitle='' divPreviewId="upload_logo" defaultImage="" />
                    @error('avatar')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="comment" class="col-form-label">Nội dung đánh giá <span
                            class="text-danger">*</span></label>
                    <textarea class="form-control" id="comment" name="comment">{{ old('comment') }}</textarea>
                    @error('comment')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="class" class="col-form-label">Tên lớp học <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="class" name="class">{{ old('class') }}</textarea>
                    @error('class')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="score" class="col-form-label">Điểm đánh giá <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="score" name="score">{{ old('score') }}</textarea>
                    @error('score')
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
