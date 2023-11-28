@extends('admin.layouts.master')

@section('content')
    <!-- DataTales Example -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary float-left">Danh sách đánh giá</h6>
                <a href="{{ route('admin.rating.create') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip"
                    data-placement="bottom" title="Thêm đánh giá"><i class="fas fa-plus"></i> Thêm đánh giá</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @if (count($rating) > 0)
                        <table class="table table-bordered" id="product-dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ tên</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Đánh giá</th>
                                    <th>Điểm đánh giá</th>
                                    <th>Lớp</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($rating as $rating)
                                    <tr>
                                        <td>{{ $rating->id }}</td>
                                        <td>{{ $rating->name }}</td>
                                        <td>
                                            @if ($rating->avatar)
                                                <img src="{{ $rating->avatar }}" class="img-fluid zoom"
                                                    style="max-width:80px" alt="{{ $rating->avatar }}">
                                            @else
                                                <img src="{{ asset('backend/img/thumbnail-default.jpg') }}"
                                                    class="img-fluid zoom" style="max-width:100%" alt="avatar.png">
                                            @endif
                                        </td>
                                        {{-- <td><img height="100%" class="p-2" src="{{ asset($rating->avatar) }}" /></td> --}}
                                        <td>{{ $rating->comment }}</td>
                                        <td>{{ $rating->score }}</td>
                                        <td>{{ $rating->class }}</td>

                                        <td>
                                            <a href="{{ route('admin.rating.edit', $rating->id) }}"
                                                class="btn btn-primary btn-sm float-left mr-1"
                                                style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                            <form method="POST"
                                                action="{{ route('admin.rating.delete', [$rating->id]) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm dltBtn" data-id={{ $rating->id }}
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
                        <h6 class="text-center">Không có đánh giá, vui lòng thêm mới!</h6>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
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
            transform: scale(5);
        }
    </style>
@endpush

@push('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
    <script>
        $('#product-dataTable').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [8, 9, 10]
            }]
        });

        // Sweet alert

        function deleteData(id) {

        }
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
