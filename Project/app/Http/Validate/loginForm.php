<?php
/**
 * Created by PhpStorm.
 * User: hieul_000
 * Date: 2015/10/04
 * Time: 11:13 PM
 */
namespace App\Http\Validate;
class loginForm extends Form
{
    protected $rules = array(
        'username' => 'required',
        'password' => 'required'
    );
    public function getrules()
    {
        return $this->rules;
    }
}