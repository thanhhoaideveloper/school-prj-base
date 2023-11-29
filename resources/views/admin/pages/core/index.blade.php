@extends('admin.layouts.master')
@section('content')
    <!-- DataTales Example -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary float-left">Danh sách giá trị cốt lõi</h6>
                <a href="{{ route('admin.core.create') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip"
                    data-placement="bottom" title="Add core value"><i class="fas fa-plus"></i> Thêm
                    mới</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @if ($coreValue->isNotEmpty())
                        <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 2%;">ID</th>
                                    <th>Tiêu đề</th>
                                    <th>Nội dung</th>
                                    <th>Hình ảnh</th>
                                    <th style="width: 8%;">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coreValue as $core)
                                    <tr>
                                        <td>{{ $core->id }}</td>
                                        <td>{{ $core->title }}</td>
                                        <td>{{ $core->description }}</td>
                                        <td>
                                            @if ($core->thumbnail)
                                                <img src="{{ $core->thumbnail }}" class="img-fluid zoom"
                                                    style="max-width:80px" alt="{{ $core->title }}">
                                            @else
                                                <img src="{{ asset('backend/img/thumbnail-default.jpg') }}"
                                                    class="img-fluid zoom" style="max-width:100%" alt="avatar.png">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.core.edit', $core->id) }}"
                                                class="btn btn-primary btn-sm float-left mr-1"
                                                style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                            <form method="POST" action="{{ route('admin.core.delete', $core->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm dltBtn" data-id={{ $core->id }}
                                                    style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                    data-placement="bottom" title="Delete"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h6 class="text-center">Vui lòng thêm giá trị cốt lõi!</h6>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <style>
        div.dataTables_wrapper div.dataTables_paginate {
            display: none;
        }

        .zoom {
            transition: transform .2s;
            /* Animation */
        }

        .zoom:hover {
            transform: scale(3.2);
        }
    </style>
@endpush

@push('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>
    <script>
        $('#banner-dataTable').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [3, 4, 5]
            }]
        });
    </script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.dltBtn').click(function(e) {
                var form = $(this).closest('form');
                var dataID = $(this).data('id');
                // alert(dataID);
                e.preventDefault();
                swal({
                        title: "Bạn có chắc chắn không?",
                        text: "Khi bấm xoá, data không thể khôi phục!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        } else {
                            swal("Đã hoàn tác!");
                        }
                    });
            })
        })
    </script>
@endpush
