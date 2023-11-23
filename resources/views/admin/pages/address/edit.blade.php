@extends('admin.layouts.master')

@section('content')
    <div class="card">
        <h5 class="card-header">Chỉnh sửa địa chỉ</h5>
        <div class="card-body">
            <form method="post" action="{{ route('admin.address.update', $address->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Tên địa chỉ <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="name" placeholder="Nhập tên" value="{{ $address->name }}"
                        class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="address" class="col-form-label">Địa chỉ <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="address" name="address">{{ $address->address }}</textarea>
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="map" class="col-form-label">Mã bản đồ </label>
                    <textarea class="form-control" id="map" name="map">{{ $address->map }}</textarea>
                    @error('map')
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
