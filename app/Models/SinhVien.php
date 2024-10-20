<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    use HasFactory;

    protected $table = 'sinhvien';
    protected $fillable = ['hoVaTen','hinhAnh','diemSo'];
    protected $guarded = ['maSV'];
    protected $primaryKey = 'maSV';

    // Khi ta không có cột created_at và updated_at thì phải khai báo
    public $timestamps = false;
}
