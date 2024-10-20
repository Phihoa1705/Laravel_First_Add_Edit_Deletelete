@extends('layout/master')
@section('title')
    Sửa Thông Tin Sinh Viên
@endsection
@section('content')
    <h1>Sửa mới thông tin sinh viên</h1>
    <form action="{{ route('sinhvien.update') }}" name="formEdit" id="formEdit" method="POST">
        @csrf
        <input type="hidden" name="maSV" value="{{ $sinhVien->maSV }}">
        <div class="mb-3">
            <label class="form-label" for="">Họ Và Tên</label>
            <input class="form-control" type="text" name="hoVaTen" id="hoVaTen" value="{{ $sinhVien->hoVaTen}}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Hinh Ảnh</label>
            <input class="form-control" type="text" name="hinhAnh" id="hinhAnh" value="{{ $sinhVien->hinhAnh}}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Điểm Số</label>
            <input class="form-control" type="text" name="diemSo" id="diemSo" value="{{ $sinhVien->diemSo}}">
        </div>
        <input class="btn btn-primary" style="margin-bottom: 5px" type="submit" value="Sửa">
    </form>
@endsection