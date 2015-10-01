<?php
namespace App\Http\Controllers\user;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class signin_login extends Controller
{
	public function getSignin()
	{
		return view('User.signin');
	}
}