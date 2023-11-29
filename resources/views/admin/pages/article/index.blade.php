@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary float-left">Danh sách bài viết</h6>
                <a href="{{ route('admin.article.create') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip"
                    data-placement="bottom" title="Add study program">
                    <i class="fas fa-plus"></i> Thêm mới
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @if ($articles->isNotEmpty())
                        <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Nội dung</th>
                                    <th>Tác giả</th>
                                    <th>Hình ảnh</th>
                                    <th style="width: 10%;">Loại bài viết</th>
                                    <th style="width: 8%;">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $key => $value)
                                    <tr>
                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->content }}</td>
                                        <td>{{ $value->create_by }}</td>
                                        <td>
                                            @if ($value->thumbnail)
                                                <img src="{{ asset($value->thumbnail) }}" class="img-fluid zoom"
                                                    style="max-width:80px" alt="{{ $value->title }}">
                                            @else
                                                <img src="{{ asset('backend/img/thumbnail-default.jpg') }}"
                                                    class="img-fluid zoom" style="max-width:100%" alt="avatar.png">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($value->is_active_event == 1)
                                                <span class="badge badge-primary">{{ 'Sự kiện sắp diễn ra' }}</span>
                                            @else
                                                <span class="badge badge-secondary">{{ 'Bài viết' }}</span>
                                            @endif
                                        </td>
                                        <td class="align-items-center justify-content-center">
                                            <a href="{{ route('admin.article.update', $value->id) }}"
                                                class="btn btn-primary btn-sm float-left mr-1"
                                                style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form method="POST" action="{{ route('admin.article.delete', $value->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm dltBtn" data-id={{ $value->id }}
                                                    style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                    data-placement="bottom" title="Delete">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h6 class="text-center">Vui lòng thêm bài viết!</h6>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
