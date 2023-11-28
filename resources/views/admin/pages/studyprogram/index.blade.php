@extends('admin.layouts.master')
@section('content')
    <!-- DataTales Example -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary float-left">Danh sách chương trình học</h6>
                <a href="{{ route('admin.studyprogram.create') }}" class="btn btn-primary btn-sm float-right"
                    data-toggle="tooltip" data-placement="bottom" title="Add study program"><i class="fas fa-plus"></i> Thêm
                    mới</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @if ($studyPrograms->isNotEmpty())
                        <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Nội dung</th>
                                    <th>Số lượng</th>
                                    <th>Bắt đầu</th>
                                    <th>Kết thúc</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Hình ảnh</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Nội dung</th>
                                    <th>Số lượng</th>
                                    <th>Bắt đầu</th>
                                    <th>Kết thúc</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Hình ảnh</th>
                                    <th>Thao tác</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($studyPrograms as $study)
                                    <tr>
                                        <td>{{ $study->id }}</td>
                                        <td>{{ $study->name }}</td>
                                        <td>{{ $study->description }}</td>
                                        <td>{{ $study->student }}</td>
                                        <td>{{ $study->start_time }}</td>
                                        <td>{{ $study->end_time }}</td>
                                        <td>
                                            @if ($study->status == 1)
                                                <span class="badge badge-success">{{ 'Mở' }}</span>
                                            @else
                                                <span class="badge badge-warning">{{ 'Đóng' }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $study->created_at }}</td>
                                        <td>
                                            @if ($study->image)
                                                <img src="{{ $study->image }}" class="img-fluid zoom"
                                                    style="max-width:80px" alt="{{ $study->name }}">
                                            @else
                                                <img src="{{ asset('backend/img/thumbnail-default.jpg') }}"
                                                    class="img-fluid zoom" style="max-width:100%" alt="avatar.png">
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ route('admin.studyprogram.edit', $study->id) }}"
                                                class="btn btn-primary btn-sm float-left mr-1"
                                                style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                            <form method="POST"
                                                action="{{ route('admin.studyprogram.delete', $study->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm dltBtn" data-id={{ $study->id }}
                                                    style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                    data-placement="bottom" title="Delete"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                        {{-- Delete Modal --}}
                                        {{-- <div class="modal fade" id="delModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="#delModal{{$user->id}}Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="#delModal{{$user->id}}Label">Delete user</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="{{ route('banners.destroy',$user->id) }}">
                                @csrf 
                                @method('delete')
                                <button type="submit" class="btn btn-danger" style="margin:auto; text-align:center">Parmanent delete user</button>
                              </form>
                            </div>
                          </div>
                        </div>
                    </div> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h6 class="text-center">Vui lòng thêm chương trình học!</h6>
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
