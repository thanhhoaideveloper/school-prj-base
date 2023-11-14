@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="d-flex align-items-center gap-2 mb-2">
            <h1 class="h3 m-0 text-gray-800">QUẢN LÝ SILDER</h1>
            <button type="button" data-toggle="modal" data-target="#create"
                class="btn btn-outline-primary rounded-circle ml-2">
                <i class="fas fa-plus"></i>
            </button>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Liên kết</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($slider as $key => $value)
                    <tr>
                        <td>
                            <img src="{{ asset($value->thumbnail) }}" />
                        </td>
                        <td>{{ $value->title }}</td>
                        <td>{{ $value->content }}</td>
                        <td>{{ $value->link }}</td>
                        <td>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('admin.pages.slide.create')
@endsection
