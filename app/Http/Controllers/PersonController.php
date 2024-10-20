<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    // action index
    public function index() {
        // Xử lý dữ liệu
        $dtb = (9+10+8)/3;
        $hoTen ="Hoàng Phi Hòa";
        $gioiTinh = 2; // 1 là nam, 0 là nữ
        $dangNhap = true;
        $danhSachSinhVien = array(
            array('id'=>1, 'hoTen'=>'Nguyễn Văn A', 'gioiTinh'=>1),
            array('id'=>2, 'hoTen'=>'Nguyễn Thị B', 'gioiTinh'=>0),
            array('id'=>3, 'hoTen'=>'Trần Văn C', 'gioiTinh'=>1),
            array('id'=>4, 'hoTen'=>'Trần Thị D', 'gioiTinh'=>0),
            array('id'=>5, 'hoTen'=>'Lê Văn E', 'gioiTinh'=>1),
            array('id'=>6, 'hoTen'=>'Lê Thị F', 'gioiTinh'=>0),
        );
        return view('gioithieubanthan')
        ->with('dtb',$dtb)
        ->with('hoTen',$hoTen)
        ->with('gioiTinh',$gioiTinh)
        ->with('dangNhap',$dangNhap)
        ->with('danhSachSinhVien',$danhSachSinhVien); 
    }
}
