<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SinhVien;

class SinhVienController extends Controller
{
    // action index
    public function index(){
        // Chuẩn bị câu lệnh -> thực thi -> phân rã khối dữ liệu thành mảng trong PHP
        $danhSachSV = SinhVien::all(); // lấy tất cả sinh viên
        //dd($danhSachSV); // dump and die

        return view('student/index')->with('danhSachSV', $danhSachSV);
    }

    public function create(){
        return view('student/create');
    }
    public function save(Request $request){
        // tạo mới một đối tượng sinh viên
        $sinhVien = new SinhVien();
        // gán giá trị từ form vào các thuộc tính của đối tượng sinh viên
        $sinhVien->hoVaTen = $request->hoVaTen; 
        $sinhVien->hinhAnh = $request->hinhAnh;
        $sinhVien->diemSo = $request->diemSo;
        // lưu đối tượng sinh viên vào cơ sở dữ liệu
        $sinhVien->save();
        // chuyển hướng về trang danh sách sinh viên
        return redirect()->route('sinhvien.index');
    }


    public function destroy(Request $request) {
        // tìm sinh viên theo id
        $sinhVien = SinhVien::find($request->maSV); // find: tìm theo maSV
        // xóa sinh viên
        if($sinhVien != null){ // nếu sinh viên tồn tại
            $sinhVien->delete(); // xóa sinh viên
            // chuyển hướng về trang danh sách sinh viên
            return redirect()->route('sinhvien.index');
        }
    }

    public function edit(Request $request){
        // tìm sinh viên theo id
        $sinhVien = SinhVien::find($request->maSV); // find: tìm theo maSV
        if($sinhVien != null){ // nếu sinh viên tồn tại
            // trả về view edit và truyền dữ liệu sinh viên cần sửa
            return view('student/edit')->with('sinhVien', $sinhVien);
        }
    }

    public function update(Request $request) {
        // tìm sinh viên theo id
        $sinhVien = SinhVien::find($request->maSV); // find: tìm theo maSV
        if($sinhVien != null){ // nếu sinh viên tồn tại
            // cập nhật thông tin sinh viên
            $sinhVien->hoVaTen = $request->hoVaTen; 
            $sinhVien->hinhAnh = $request->hinhAnh;
            $sinhVien->diemSo = $request->diemSo;
            // lưu thông tin sinh viên
            $sinhVien->save();
            // chuyển hướng về trang danh sách sinh viên
            return redirect()->route('sinhvien.index');
        }
    }
}
