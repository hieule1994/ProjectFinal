<?php
/**
 * Created by PhpStorm.
 * User: hieul_000
 * Date: 2015/10/04
 * Time: 11:27 AM
 */
namespace App\Http\Validate;
class SigninForm extends Form
{
       protected $rules = array(
           'name' => 'required|min:2|max:255',
           'username' => 'required|min:2|max:255',
           'password' => 'required|min:8|max:255',
           'etpassword'=>'same:password',
           'email' => 'email|required',
           'address'=>'required',
           'numberphone'=> 'required|min:10|max:11'
       );
    public function getrules()
    {
        return $this->rules;
    }
}