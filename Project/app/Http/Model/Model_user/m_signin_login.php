<?php
/**
 * Created by PhpStorm.
 * User: hieul_000
 * Date: 2015/10/04
 * Time: 3:00 PM
 */
namespace App\Http\Model\Model_user;
use DB;

class m_signin_login
{
    public function InsertUser($data)
    {
        DB::table('db_nguoidung')->insert([
            'TenDangNhap'=>$data['tendangnhap'],
            'MatKhau' => $data['matkhau'],
            'TenDayDu' => $data['tendaydu'],
            'DiaChi' => $data['diachi'],
            'Email' => $data['email'],
            'SoDienThoai' => $data['dienthoai']
        ]);
        return true;
    }
}