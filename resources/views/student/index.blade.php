 @extends('layout/master')
 @section('name')
  Danh sách sinh viên   
 @endsection
 @section('content')
     <h1>Danh sách sinh viên</h1>
     <a href="{{ route('sinhvien.create') }}" class="btn btn-primary" style="margin-bottom: 5px">Thêm Sinh Viên</a>
     <table class="table table-bordered">
        <tr class="table-info">
            <th>Mã Sinh Viên</th>
            <th>Họ và tên</th>
            <th>Hinh Ảnh</th>
            <th>Điểm số</th>
            <th>Hành Động</th>
        </tr>
        @foreach ($danhSachSV as $sv)
            <tr>
                <td>{{ $sv->maSV }}</td>
                <td>{{ $sv->hoVaTen }}</td>
                <td>{{ $sv->hinhAnh }}</td>
                <td>{{ $sv->diemSo }}</td>
                <td>
                    <a href="{{ route('sinhvien.edit', ['maSV' => $sv->maSV])}}" class="btn btn-warning">Sửa</a>
                    <form style="display: inline-block" action="{{ route('sinhvien.delete') }}" 
                    method="POST" name="frmDelete">
                        @csrf
                        <input type="hidden" name="maSV" value="{{$sv->maSV}}">
                        <input type="submit" class="btn btn-danger" value="Xóa">
                    </form>
                </td>
            </tr>   
        @endforeach
     </table>
 @endsection