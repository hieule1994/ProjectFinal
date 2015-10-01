<?php
namespace App\Http\Controllers\admin;
/**
 * Created by PhpStorm.
 * User: Hieu
 * Date: 2015/09/13
 * Time: 7:42 AM
 */
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Layout extends Controller
{
    public function __contruct()
    {

    }
    public function getIndex()
    {
        return view("admin.share.__layout");
        
    }
    public function getChangelogo()
    {
        return view("admin.change_logo");
    }
    public function postChangelogo(Request $request)
    {

        $file = $request -> file('image');
        $path = 'images/tritin.vn';
        $filename =str_random(6).'_'.$file->getClientOriginalName();
        $file -> move($path,$filename);
        return $filename;
        var_dump($request->file('image'));
        
    }
    public function getChangemenu()
    {
        return view ("admin.change_menu");
    }
}