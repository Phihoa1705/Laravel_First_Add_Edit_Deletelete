    @extends('layout/master')
    @section('title')
    Giới thiệu bản thân
    @endsection

    @section('content')
    {{-- Nam thì màu đen cho h1, Nữ thì hồng--}}
    {{-- Câu lệnh if-else-elseif trong Blade --}}
    @if ($gioiTinh == 1)
        <h1>Giới thiệu bản thân</h1>
    @else
        <h1 style="color: pink;">Giới thiệu bản thân</h1>
    @endif

    {{-- Hiển thị thông tin - với vòng lặp for --}}
    @for ($i = 0; $i < 10; $i++)
        <span>{{ $i }}</span>
    @endfor
    
    {{-- Hiển thị thông tin - với vòng lặp foreach --}}
    <table border="1px">
        <tr>
            <th>Mã Sinh Viên</th>
            <th>Họ Tên</th>
            <th>Giới Tính</th>
        </tr>
        @foreach ($danhSachSinhVien as $sv)
            <tr>
                <td>{{ $sv['id'] }}</td>
                <td>{{ $sv['hoTen'] }}</td>
                <td>{{ $sv['gioiTinh'] }}</td>
            </tr>
        @endforeach
    </table>
    {{-- Vòng lặp while --}}
    {{-- Có thể tự tạo biến trong blade bằng cách mở php --}}
    <?php $j = 0?>
    @while ($j < 10)
        <p>Giá trị {{ $j }}</p>
        <?php $j++ ?>    
    @endwhile

    @if($dangNhap == 1)    
        <ul>
            <li>Điểm trung bình: {{$dtb}} </li>
            <li>Họ và tên: {{$hoTen}}</li>
        </ul>
        <p>Hướng dẫn bạn học code BLADE ENGINE, nên xài dấu @{{ }}</p>
    @else
        <p>Vui lòng đăng nhập để xem thông tin...</p>
    @endif
    @endsection