@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary float-left">Danh sách bài viết</h6>
                <a href="{{ route('admin.article.create') }}" 
                    class="btn btn-primary btn-sm float-right" 
                    data-toggle="tooltip"
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
                                    <th class="text-center">Trạng thái</th>
                                    <th class="text-center">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $key => $value)
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td>{{ $value->title }}</td>
                                    <td>{{ $value->content }}</td>
                                    <td>{{ $value->create_by }}</td>
                                    <td class="text-center">{{ $value->is_active_event }}</td>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="{{ route('admin.article.update', $value->id) }}"
                                            class="btn btn-primary btn-sm float-left mr-1"
                                            style="height:30px; width:30px;border-radius:50%" 
                                            data-toggle="tooltip">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form method="POST" action="{{ route('admin.article.delete', $value->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm dltBtn" data-id={{ $value->id }}
                                                style="height:30px; width:30px;border-radius:50%" 
                                                data-toggle="tooltip"
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
    @include('admin.pages.article.script')
@endsection
