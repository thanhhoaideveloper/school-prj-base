@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="d-flex align-items-center gap-2 mb-2">
        <h1 class="h3 m-0 text-gray-800">QUẢN LÝ SILDER</h1>
        <button type="button"  data-toggle="modal" data-target="#create" class="btn btn-outline-primary rounded-circle ml-2">
            <i class="fas fa-plus"></i>
        </button>
    </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Mô tả</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
</div>
@include('admin.pages.slide.create')
@endsection