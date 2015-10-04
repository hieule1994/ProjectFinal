<?php
namespace App\Http\Validate;
use Illuminate\Support\Facades\Validator as vali;
class Form
{
    public function validate(array $data, array $rules)
    {
        $validator = vali::make($data,$rules);
        if($validator->fails())
        {
            throw new FromException($validator->messages());
        }
        return true;
    }
}