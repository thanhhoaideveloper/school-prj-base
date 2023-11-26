@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary float-left">Danh sách bài viết</h6>
                <a href="javascript:void(0)" 
                    class="btn btn-primary btn-sm float-right" 
                    id="btn-add" 
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
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Nội dung</th>
                                    <th>Hình ảnh</th>
                                    <th>Mô tả</th>
                                    <th>Tác giả</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    @else
                        <h6 class="text-center">Vui lòng thêm bài viết!</h6>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('admin.pages.article.create')
    @include('admin.pages.article.script')
@endsection
