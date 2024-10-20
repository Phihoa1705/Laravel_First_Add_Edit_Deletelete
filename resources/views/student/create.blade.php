@extends('layout/master')
@section('title')
    Thêm Sinh Viên
@endsection
@section('content')
    <h1>Thêm mới sinh viên</h1>
    <form action="{{ route('sinhvien.save') }}" name="formCreate" id="formCreate" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="">Họ Và Tên</label>
            <input class="form-control" type="text" name="hoVaTen" id="hoVaTen">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Hinh Ảnh</label>
            <input class="form-control" type="text" name="hinhAnh" id="hinhAnh">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Điểm Số</label>
            <input class="form-control" type="text" name="diemSo" id="diemSo">
        </div>
        <input class="btn btn-primary" style="margin-bottom: 5px" type="submit" value="Thêm">
    </form>
@endsection