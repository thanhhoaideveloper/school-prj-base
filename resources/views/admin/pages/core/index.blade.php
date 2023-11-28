@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <h5 class="card-header">
                Giá Trị Cốt Lõi
                <button type="button" class="btn btn-outline-primary rounded-circle" id="btn-add">
                    <i class="fas fa-plus"></i>
                </button>
            </h5>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style="width:15%">Hình ảnh</th>
                            <th scope="col" class="w-25">Tiêu đề</th>
                            <th scope="col" style="width:35%">Mô tả</th>
                            <th scope="col" class="w-25">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coreValue as $item)
                            <tr>
                                <td class="align-middle">
                                    <img class="w-100" src="{{ asset($item->thumbnail) }}" alt="Hinh anh" />
                                </td>
                                <td class="align-middle">{{ $item->title }}</td>
                                <td class="align-middle">{{ $item->description }}</td>
                                <td class="align-middle">
                                    <div class="d-flex">
                                        <button type="button" data-id="{{ $item->id }}"
                                            class="btn btn-outline-primary w-50 editRow">
                                            <i class="fas fa-pen"></i>
                                            <span>Cập nhật</span>
                                        </button>
                                        <a type="button" href="{{ route('admin.core.destroy', $item->id) }}"
                                            class="btn btn-outline-danger w-50 ml-2">
                                            <i class="fas fa-trash-alt"></i>
                                            <span>Xoá</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
