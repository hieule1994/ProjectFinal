<?php
namespace App\Http\Controllers\user;
use App\Http\Validate\FromException;
use App\Http\Validate\loginForm;
use App\Http\Validate\SigninForm;
use App\Http\Model\Model_user\m_signin_login;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use DB;

class signin_login extends Controller
{
	public function getSignin()
	{
		return view('User.signin');
	}
    public function getLogout()
    {
        Session::forget('username');
        return redirect()->to('/');
    }
    public function postLogin(Request $request)
    {
        try
        {
            $login = new loginForm();
            $login->validate($request->input(),$login->getrules());
            $data = DB::select('select count(*) from db_nguoidung where TenDangNhap = :ten and MatKhau = :mk',['ten'=>$request->input('username'),'mk'=>$request->input('password')]);
            if($data != 0 )
            {
                Session::put('username',$request->input('username'));
                return redirect()->to('/');
            }
            else
            {
                return "Ban nhap sai mơi nhap lai!";
            }
        }
        catch(FromException $e)
        {
            return view('errors.503');
        }
    }
    public function postSignin(Request $request)
    {
        try
        {
            $sign = new SigninForm();
            $sign->validate($request->input(),$sign->getrules());
            $data = array(
                'tendangnhap' =>$request->input('username') ,
                'matkhau' =>$request->input('password'),
                'tendaydu' =>$request->input('name'),
                'diachi' =>$request->input('address'),
                'email' =>$request->input('email'),
                'dienthoai'=>$request->input('numberphone')
            );
            $insert = new m_signin_login();
            $insert->InsertUser($data);
            Session::flash('flag','1');
            return view('index');


        }
        catch(FromException $e)
        {
           return view('errors.503');
        }
    }
}