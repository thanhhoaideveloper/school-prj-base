@extends('admin.layouts.master')

@section('content')
    <div class="card">
        <h5 class="card-header">Chỉnh sửa địa chỉ</h5>
        <div class="card-body">
            <form method="post" action="{{ route('admin.rating.update', $rating->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Tên khách hàng <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="name" placeholder="Enter title"
                        value="{{ $rating->name }}" class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="avatar" class="col-form-label">Ảnh đại diện <span class="text-danger">*</span></label>
                    <x-upload-image inputName='avatar' inputTitle='' divPreviewId="upload_logo"
                        defaultImage="{{ $rating->avatar ?? null }}" />
                    @error('avatar')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="comment" class="col-form-label">Nội dung đánh giá <span
                            class="text-danger">*</span></label>
                    <textarea class="form-control" id="comment" name="comment">{{ $rating->comment }}</textarea>
                    @error('comment')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="class" class="col-form-label">Tên lớp học <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="class" name="class">{{ $rating->class }}</textarea>
                    @error('class')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="score" class="col-form-label">Điểm đánh giá <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="score" name="score">{{ $rating->score }}</textarea>
                    @error('score')
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

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/summernote/summernote.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@push('scripts')
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script src="{{ asset('backend/summernote/summernote.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <script>
        $('#summary').summernote();
        $('#description').summernote();
        var route_prefix = "{{ url('/filemanager') }}";
        $('#lfm').filemanager('image', {
            prefix: route_prefix
        });
    </script>
@endpush
